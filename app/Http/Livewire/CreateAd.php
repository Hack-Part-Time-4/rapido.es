<?php

namespace App\Http\Livewire;
use App\Models\Ad;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Livewire\WithFileUploads;

class CreateAd extends Component
{   
    use WithFileUploads;

    public $title;
    public $body;
    public $price;
    public $category;
    public $images=[];
    public $temporary_images;
    public $image;
    
    protected $rules= [
        'title'=>'required|min:4',
        'body'=>'required|min:8',
        'category'=>'required',
        'price'=>'required|min:4',
    ];
    protected $messages=[
        'required'=>'Field :attribute is required, please fill it',
        'min'=>'Field :attribute should be longer than :min',
        'numeric'=>'Field :attribute must be a number',
        'temporary_images.required' => 'La imagen es obligatoria',
        'temporary_images.*.image' => 'Los archivos tienen que ser imagenes',
        'temporary_images.*.max' => 'La imagen supera los :max mb',
        'images.image' => 'El archivo tiene que ser una imagen',
        'images.max' => 'La imagen supera los :max mb',
    ];

    public function store()
    {
        $category= Category::find($this->category);
        $ad= $category->ads()->create([
            'title'=>$this->title,
            'body'=>$this->body,
            'price'=>$this->price,
        ]);
        Auth::user()->ads()->save($ad);

        $this->cleanForm();
        // añadimos el mensaje de sesión, pero ponemos createAd en lugar de message, así continuamos utilizando el layout de alert
        session()->flash('createAd', [
            'type'=>'success',
            'text'=>'nuevo anuncio añadido',
        ]);
        // hacemos un redirect a inicio, en el cual tenemos un alert esperando la sesión createAd
        return redirect()->route('inicio');


        $validatedData=$this->validate();
        $category=Category::find($this->category);
        $ad=$category->ads()->create($validatedData);
        Auth::user()->ads()->save($ad);
        if (count($this->images)){
            foreach ($this->images as $image){
                $ad->images()->create([
                    'path'=>$image->store("images/$ad->id",'public')
                ]);
            }
        }
        session()->flash('message','Ad created successfully');
        $this->cleanForm();

    }

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }
    
    public function cleanForm(){
        $this->title= "";
        $this->body= "";
        $this->category= "";
        $this->price= "";
    }

    public function render()
    {
        return view('livewire.create-ad');
    }

    public function updatedTemporaryImages()
    {
        if($this->validate(['temporary_images.*'=>'image|max:2048']))
        {
            foreach ($this-> temporary_images as $image)
            {
                $this->images[]=$image;
            }
        }
    }

    public function removeImage ($key)
    {
        if(in_array($key,array_keys($this->images))){
            unset($this->images[$key]);
        }
    }

                
}

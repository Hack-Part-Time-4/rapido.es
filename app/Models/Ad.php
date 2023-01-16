<?php

namespace App\Models;

use App\Models\User;
use Nette\Schema\Schema;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Schema as FacadesSchema;
use PhpParser\Node\Stmt\Return_;

class Ad extends Model
{
    protected $fillable = ['title','body','price'];
    use HasFactory, Searchable;

        public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function setAccepted($value)
    {
        $this->is_accepted = $value;
        $this->save();
        return true;
    }

    static public function ToBeRevisionedCount()
    {
        return Ad::where('is_accepted', null)-> count();
    }

    public function images(){
        return $this->hasMany(Image::class);
    }
    
    public function tosearchableArray()
    {
        Return [
            'title'=>$this->title,
            'body'=>$this->body,

        ];
    }
    
}



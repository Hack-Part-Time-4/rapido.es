<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema as FacadesSchema;
use Nette\Schema\Schema;

class Ad extends Model
{
    protected $fillable = ['title','body','price'];
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function up()
    {
        Schema::create('ads', function (Blueprint $table){
        $table->id();
        $table->string('title');
        $table->string('body');
        $table->decimal('price',8,2);
        $table->timestamps();
    });
}


    }
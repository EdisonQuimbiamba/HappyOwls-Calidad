<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;


    protected $fillable = ['title','slug','body']; //Lo que se enviará a la bd

    //Relación uno a uno polimorfica
    public function image()
    {
        //imageable es el nombre del método que se creó en el modelo Imagen
        return $this->morphOne(Image::class, 'imageable');
    }
}

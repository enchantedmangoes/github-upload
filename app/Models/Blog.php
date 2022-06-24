<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'nombre_comun', 'nombre_cientifico', 'clima', 'descripcion', 'cultivo', 'uso', 'plaga'];

    //Blog tiene muchas imagenes
    public function images(){
        return $this->hasMany(Image::class);
    }
    //Muchos a muchos con Tag
    public function tags(){
        return $this->belongsToMany(Tag::class)->withPivot('blog_id', 'tag_id');
    }

}

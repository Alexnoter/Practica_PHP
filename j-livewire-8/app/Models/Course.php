<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    //la relaciones
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    //colocamos el nombre del campo virtual en medio de get<nombre>Attribute
    //ese campo se especifico en course-list 
    public function getExcerptAttribute()
    {
        //nos retorna la descripcion pero solo los caracteres del 0 al 80 luego completa con "..."
        return substr($this->description, 0,80) . "...";    
    }

    //este es un metodo personalizado
    public function similar()
    {
        return  $this->where('category_id', $this->category_id)
            ->with('user')
            ->take(2)
            ->get();
    }
}

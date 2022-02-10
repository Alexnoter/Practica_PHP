<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    //colocamos el nombre del campo virtual en medio de get<nombre>Attribute
    //ese campo se especifico en course-list 
    public function getExcerptAttribute()
    {
        //nos retorna la descripcion pero solo los caracteres del 0 al 80 luego completa con "..."
        return substr($this->description, 0,80) . "...";    
    }
}

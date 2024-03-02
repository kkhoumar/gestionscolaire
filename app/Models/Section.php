<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    public function niveau(){

        return $this->belongsTo(Niveau::class);
    }

    public function etudiants(){
        return $this->hasMany(Etudiant::class);
    }
}

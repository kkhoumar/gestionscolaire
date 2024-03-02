<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Niveau extends Model
{
    use HasFactory;

    public function specialite(){

        return $this->belongsTo(Specialite::class);
    }

    public function modules(){

        return $this->hasMany(Module::class);
    }
//dans un niveau ya plusieurs sections
    public function Sections(){

        return $this->hasMany(Section::class);
    }
}

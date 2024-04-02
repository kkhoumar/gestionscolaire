<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialite extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $primaryKey ='id_sp';

    protected $fillable =[
        'designation_specialite'
    ];
    public function niveaux(){

        return $this->hasMany(Niveau::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $primaryKey ='id_m';

    public function niveau(){

        return $this->belongsTo(Niveau::class);
    }
    protected $fillable =[
        'description_module','coefficient_module'
    ];
}

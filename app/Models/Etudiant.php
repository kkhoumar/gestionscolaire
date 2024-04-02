<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;

    public $incrementing = false;
    public $timestemps =false;
    protected $primaryKey ='id_etud';

    //protected $garduad ='id_etud';

    protected $fillable =[
        'nom_etud','prenom_etud','email_etud','	date_n_etud','lieu_n_etud','numero','mot_p_etud','photo'
    ];
    public function section(){

        return $this->hasMany(Section::class);
    }
}

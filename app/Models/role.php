<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $garduad ='id';
    public function user(){
        return $this->hasOne(User::class);
    }
}

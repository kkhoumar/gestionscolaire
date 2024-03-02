<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_role extends Model
{
    use HasFactory;
    public function user(){
//belongto parce que c'est la table role qui contient lid user
        return $this->belongsTo(User::class);
    }
//belongto parce que c'est la table role qui contient lid user
    public function role()
{
	return $this->belongsTo(Role::class);
}
}

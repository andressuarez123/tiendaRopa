<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
    ];

    
    public function getAllRoles(){
        return User::all();
    }

    public function getRole($id){
        return User::find($id);
    }

    public function users (){
        return $this->hasMany('App\User');
    }
}

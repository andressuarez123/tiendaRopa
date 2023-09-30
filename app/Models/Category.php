<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
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

    public function getAllCategories(){
        return Category::all();
    }

    public function getCategory($id){
        return Category::find($id);
    }

    public function products(){
        return $this->hasMany('App\Product');
    }
}

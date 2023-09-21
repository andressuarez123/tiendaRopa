<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'description',
        'image',
        'brand',
        'stock',
        'slide',
        'description',
        'category_id',



    ];


    public function favorite(){
        return $this->hasMany('App\Models\Favorite');
    }

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }
}

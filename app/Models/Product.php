<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'image',
        'brand',
        'price',
        'stock',
        'slide',
        'user_id',
        'category_id',
    ];

    public function getAllProducts(){
        return Product::all();
    }

    public function getProduct($id){
        return Product::find($id);
    }

    public function user (){
        return $this->belongsTo('App\User');
    }

    public function category (){
        return $this->belongsTo('App\Category');
    }

    public function favorite (){
        return $this->hasMany('App\Favorite');
    }
}

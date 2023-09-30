<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'product_id',
    ];

    public function user (){
        return $this->belongsTo('App\User');
    }

    public function product(){
        return $this->hasMany('App\Product');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=['id'];   //enable Laravel update the field
    //must add the 'id' enable insert the id data

    public function product(){

        return $this->hasMany('App\Product'); // location becareful spelling

    }

    // public function myCart(){

    //     return $this->hasMany('App\myCart'); // location becareful spelling

    // }
}

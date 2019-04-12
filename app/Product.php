<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = ['category_id', 'name', 'image_url'];


    public function prices(){
      return $this->hasMany('App\Price')->orderBy('id', 'desc', 'product_id');
    }

}

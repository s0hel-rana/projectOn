<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable =['product_name','product_quality','product_price','product_discription'];



    public function relationBetweenCatagory()
{
    return $this->hasOne('App\Catagory','id','iproduct_catagoryd');

}

}


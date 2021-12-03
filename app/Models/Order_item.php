<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_item extends Model
{
    use HasFactory;
    public function product()
    {
//        dd(1);
        return $this->hasOne(Product::class, 'id', 'product_id');
    }
    public function setAmountAttribute($value)
    {
//        dd($value);
//        dd($this->product());
//        if(isset($this->product)){ // ()->price)) {
//            $this->attributes['amount'] = $value * $this->product()->price;
//        } else {
//            $this->attributes['amount'] = 0;
//        }

        $product = Product::where('id', $this->product_id)->first();
        dd($product);
        $this->attributes['amount'] = $value * $product;


    }

}

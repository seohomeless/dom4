<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /*
    public function getFinalPriceAttribute()
    {
        return (float)$this->price / 100;
    }
     */
	protected $table="products";
	protected $fillable=['title', 'category_id', 'articul', 'vendor', 'price', 'description', 'created_at', 'updated_at'];
	
	
    protected $touches = ['category'];

    public function category()
    {
        return $this->belongsTo('App\Category')->withDefault();
    }

    public function carts()
    {
        return $this->belongsToMany(Carts::class, 'carts_products');
    }
}

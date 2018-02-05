<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    static public function menuItems()
    {
        return self::all();
    }

    public function product()
    {
        return $this->hasMany('App\Product', 'category_id', 'id');
    }

    public function rootCategory()
    {
        return $this->belongsTo(Category::class, 'parent_id', 'id');
    }

    public function subCategory()
    {
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }

    public function subCategoriesWithProducts()
    {
        $query = $this->subCategory()->with('product');

        \Log::debug('subCategoriesWithProducts', [$query->toSql()]);

        return $query->get();
    }
}

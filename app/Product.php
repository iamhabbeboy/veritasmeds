<?php

namespace App;

use App\Brand;
use App\Category;
use App\Picture;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * @var string
     */
    protected $table = 'product';
    /**
     * @var array
     */
    protected $fillable = ['category_id', 'brand_id', 'title',
        'description', 'price', 'product_status',
        'quantity', 'pictures'];

    /**
     * @return mixed
     */
    public function hasCategory()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function hasBrand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    public function hasPicture()
    {
        return $this->hasMany(Picture::class, 'product_id', 'id');
    }

    public function loadProducts($id = null)
    {
        $query = null;
        if ($id === null) {
            $query = $this->whereNotNull('title');
        } else {
            $query = $this->where('id', $id);
        }
        return $query->with('hasCategory')->with('hasBrand')->with('hasPicture');
    }
}

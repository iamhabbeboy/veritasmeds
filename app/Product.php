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

    public function loadProducts(array $hash)
    {
        $query = null;
        if ($hash == null) {
            $query = $this->whereNotNull('title');
        } else {
            $query_columns = array_keys($hash);
            $query_column = array_get($query_columns, '0');
            $query = $this->where($query_column, $hash[$query_column]);
        }
        return $query->with('hasCategory')->with('hasBrand')->with('hasPicture');
    }
}

<?php

namespace App;
use App\Picture;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * @var string
     */
    protected $table = 'category';
    /**
     * @var array
     */
    protected $fillable = ['title', 'description'];

    public function hasPicture()
    {
        return $this->belongsTo(Picture::class, 'id', 'product_id');
    }

    public function loadCategory()
    {
        return $this->whereNotNull('title')->with('hasPicture');
    }
}

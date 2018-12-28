<?php

namespace App;

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
}

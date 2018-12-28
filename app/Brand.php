<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    /**
     * @var string
     */
    protected $table = 'brand';
    /**
     * @var array
     */
    protected $fillable = ['title', 'description'];
}

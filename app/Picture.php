<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    /**
     * @var string
     */
    protected $table = 'picture';
    /**
     * @var array
     */
    protected $fillable = ['filepath', 'status', 'product_id'];
}

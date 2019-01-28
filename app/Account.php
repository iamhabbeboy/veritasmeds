<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    /**
     * Base Table
     *
     * @var string
     */
    protected $table = 'accounts';
    /**
     * columns in table
     *
     * @var array
     */
    protected $fillable = ['utm_medium', 'name', 'phone', 'email', 'password'];
}

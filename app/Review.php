<?php

namespace App;

use App\Account;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    /**
     * @var string
     */
    protected $table = 'reviews';
    /**
     * @var array
     */
    protected $fillable = ['account_id', 'content'];

    public function hasAccount()
    {
        return $this->belongsTo(Account::class, 'account_id', 'id');
    }

    public function loadReview($product_id)
    {
        return $this->where('product_id', $product_id)->with('hasAccount');
    }
}

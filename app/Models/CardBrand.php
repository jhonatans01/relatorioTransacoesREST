<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CardBrand extends Model
{
    protected $fillable = ['id', 'name'];

    public $timestamps = false;

    public function paymentMethods()
    {
        return $this->belongsToMany('App\PaymentMethod', 'card_payment', 'card_brand', 'payment_method');
    }
}

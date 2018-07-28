<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CardPayment extends Model
{
    public $table = 'card_payment';

    protected $fillable = ['id', 'cardBrand', 'paymentMethod'];

    public $timestamps = false;

    public function cardBrand()
    {
        return $this->hasOne('App\CardBrand', 'id', 'cardBrand');
    }

    public function paymentMethod()
    {
        return $this->hasOne('App\PaymentMethod', 'id', 'paymentMethod');
    }
}

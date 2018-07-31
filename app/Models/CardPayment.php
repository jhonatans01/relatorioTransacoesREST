<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CardPayment extends Model
{
    public $table = 'card_payment';

    protected $primaryKey = 'id';

    protected $fillable = ['id', 'card_brand', 'payment_method'];

    public $timestamps = false;

    public function cardBrand()
    {
        return $this->hasOne('App\CardBrand', 'id', 'card_brand');
    }

    public function paymentMethod()
    {
        return $this->hasOne('App\PaymentMethod', 'id', 'payment_method');
    }
}

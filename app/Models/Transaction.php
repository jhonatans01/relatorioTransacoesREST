<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = ['id', 'checkoutCode', 'merchant', 'cipheredCardNumber', 'amountInCent',
        'installments', 'acquirer', 'status', 'card_brand', 'payment_method', 'acquirerAuthorizationDateTime'];

    protected $dateFormat = ['createdAt', 'acquirerAuthorizationDateTime'];

    public $timestamps = false;

    public function merchant()
    {
        return $this->belongsTo('App\Merchant', 'merchant', 'cnpj');
    }

    public function cardBrand()
    {
        return $this->hasOne('App\CardBrand', 'id', 'card_brand');
    }

    public function paymentMethod()
    {
        return $this->hasOne('App\PaymentMethod', 'id', 'payment_method');
    }

    public function acquirer()
    {
        return $this->hasOne('App\Acquirer', 'id', 'acquirer');
    }

    public function status()
    {
        return $this->hasOne('App\Status', 'id', 'status');
    }

}

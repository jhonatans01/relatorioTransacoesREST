<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = ['id', 'checkoutCode', 'merchant', 'cipheredCardNumber', 'amountInCent',
        'installments', 'acquirer', 'status', 'cardPayment', 'acquirerAuthorizationDateTime'];

    #protected $timdateTimeFormat = ['createdAt', 'acquirerAuthorizationDateTime'];

    public $timestamps = false;

    public function merchant()
    {
        return $this->belongsTo('App\Merchant');
    }

    public function cardPayment()
    {
        return $this->hasOne('App\CardPayment', 'id', 'cardPayment');
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

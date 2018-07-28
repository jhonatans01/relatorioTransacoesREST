<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CardBrand extends Model
{
    protected $fillable = ['id', 'name'];

    public $timestamps = false;

    public function paymentMethods()
    {
        return $this->hasMany('App\PaymentMethod');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    protected $fillable = ['id', 'type'];

    public $timestamps = false;

    public function cardBrand()
    {
        return $this->belongsToMany('App\CardBrand');
    }
}

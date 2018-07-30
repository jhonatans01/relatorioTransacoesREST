<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acquirer extends Model
{
    protected $fillable = ['id', 'name'];

    public $timestamps = false;

    public function cardBrands()
    {
        return $this->belongsToMany('App\CardBrand', 'acquirer_card', 'acquirer', 'card_brand');
    }
}

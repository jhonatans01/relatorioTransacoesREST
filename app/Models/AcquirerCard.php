<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AcquirerCard extends Model
{
    public $table = 'acquirer_card';

    protected $primaryKey = ['acquirer', 'card_brand'];

    public $incrementing = false;

    protected $fillable = ['acquirer', 'card_brand'];

    public $timestamps = false;

    public function cardBrand()
    {
        return $this->hasOne('App\CardBrand', 'id', 'card_brand');
    }

    public function acquirer()
    {
        return $this->hasOne('App\Acquirer', 'id', 'acquirer');
    }
}

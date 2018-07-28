<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AcquirerCard extends Model
{
    public $table = 'acquirer_card';

    protected $primaryKey = ['acquirer', 'cardBrand'];

    public $incrementing = false;

    protected $fillable = ['acquirer', 'cardBrand'];

    public $timestamps = false;

    public function cardBrand()
    {
        return $this->hasOne('App\CardBrand', 'id', 'cardBrand');
    }

    public function acquirer()
    {
        return $this->hasOne('App\Acquirer', 'id', 'acquirer');
    }
}

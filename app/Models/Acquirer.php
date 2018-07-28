<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acquirer extends Model
{
    protected $fillable = ['id', 'name'];

    public $timestamps = false;

    public function cardBrand()
    {
        return $this->hasMany('App\CardBrand');
    }
}

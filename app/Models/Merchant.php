<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    protected $primaryKey = 'cnpj';

    public $incrementing = false;

    protected $fillable = ['cnpj', 'companyName'];

    public $timestamps = false;
}

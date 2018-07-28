<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public $table = 'status';

    protected $fillable = ['id', 'statusText', 'statusInfo'];

    public $timestamps = false;
}

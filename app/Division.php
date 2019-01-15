<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    /**
     *  The attributes that are mass assignable
     * 
     * @var array
     */
    protected $fillable = [
        'code',
        'name',
        'address',
        'postcode',
        'city',
        'state',
    ];
}

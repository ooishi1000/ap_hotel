<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $guarded = array('id');

    public static $rules = array (
        'jusyo' => 'required',
        'tel' => 'required',
        'person_id' =>'required',
        ''
    )
}

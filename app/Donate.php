<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donate extends Model
{
    protected $fillable = [
        'name','phone','medicine','usage', 'quantity','address','ngo',
    ];


    protected $hidden = [
        'remember_token',
    ];


    protected $guard = "donate";
    protected static $rules = array(
        'phone' => 'required|unique:users|min:10|numeric',
        'address' => 'required|max:250',
    );

}

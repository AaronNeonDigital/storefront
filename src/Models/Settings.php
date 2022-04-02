<?php

namespace Aaron\Storefront\Models;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $table = 'storefront_settings';
    protected $fillable = ['home_key_word'];
}
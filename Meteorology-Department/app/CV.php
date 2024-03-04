<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CV extends Model
{
    protected $fillable = [
        'name', 'sub','email','filename'
    ];
}

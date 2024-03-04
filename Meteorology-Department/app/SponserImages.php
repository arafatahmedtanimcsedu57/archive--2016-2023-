<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SponserImages extends Model
{
    protected $fillable = [
        'sponser_id', 'filename'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DepartmentLibrary extends Model
{
    protected $fillable = [
        'book_name', 'author','edition','publication'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];
}

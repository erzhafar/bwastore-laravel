<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Testing\Constraints\SoftDeletedInDatabase;

class Category extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'photo', 'slug'
    ];

    protected $hidden = [];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'name', 'number_of_pages', 'borrowed_by', 'borrowed_at', 'returned_at'
    ];
}

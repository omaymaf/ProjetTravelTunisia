<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'book';
    protected $book = ['name', 'email', 'phone', 'address', 'location', 'guests', 'arrivals', 'leaving'];
}

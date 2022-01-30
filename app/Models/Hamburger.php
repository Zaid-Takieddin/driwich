<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hamburger extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name', 'ingredients', 'price'];
}

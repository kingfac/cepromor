<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projet extends Model
{
    protected $fillable = ['nom', 'descri', 'url'];
    use HasFactory;
}

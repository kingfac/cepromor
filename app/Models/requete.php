<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class requete extends Model
{
    protected $fillable = [
        'message',
        'objet_id',
        'noms',
        'tel',
        'email'
    ];
    use HasFactory;
}

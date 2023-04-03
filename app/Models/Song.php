<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    // Dichiaro quali sono gli attributi che andrò a salvare nella function store() del Controller
    protected $fillable = [
        'title',
        'album',
        'author',
        'editor',
        'length',
        'poster'
    ];
}
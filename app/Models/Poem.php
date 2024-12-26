<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poem extends Model
{
    /** @use HasFactory<\Database\Factories\PoemFactory> */
    use HasFactory;

    protected $fillable = [
        'author',
        'title',
        'text',
        'resources'
    
    ];
}

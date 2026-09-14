<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeris extends Model
{
    use HasFactory;

    protected $table = 'galeris';

    protected $fillable = [
        'gambargaleri',
        'judulgaleri',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CupSize extends Model
{
    use HasFactory;
    protected $table = 'cup_size';
    protected $fillable = [
        'cupSize', 'cupQuantity'
    ];
}

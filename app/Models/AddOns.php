<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AddOns extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'add_ons';
    protected $fillable = [
        'orderId', 'addOns'
    ];
}

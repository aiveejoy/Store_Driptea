<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StoreCheckouts extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'customerId', 'subTotal', 'deliveryFee', 'total', 'incash', 'change'
    ];
}

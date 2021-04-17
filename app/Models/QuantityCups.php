<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QuantityCups extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'quantity_cups';
    protected $fillable = [
        'incomingLowDose', 'incomingHighDose', 'addincomingOverDoseOns', 'onRockLowDose', 'onRockHighDose', 'onRockOverDose', 'remainingLowDose', 'remainingHighDose', 'remainingOverDose', 'usedCupsLowDose', 'usedCupsHighDose', 'usedCupsOverDose'
    ];
}

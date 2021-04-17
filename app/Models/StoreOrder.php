<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StoreOrder extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'customerId', 'cashierId', 'storeCheckoutsId', 'customerType', 'productId', 'onlineId', 'quantity', 'size', 'cupType', 'sugarLevel', 'subTotal', 'choosenPrice', 'status'
    ];

    public function orderProduct(){
        return $this->hasMany('App\Models\Product','id','productId');
    }

    public function sameOrder(){
        return $this->hasMany('App\Models\StoreAddOn','storeOrderId','id');
    }

    public function getCashier(){
        return $this->hasMany('App\Models\User','id','cashierId');
    }

    public function getCheckouts(){
        return $this->hasMany('App\Models\StoreCheckouts','id','storeCheckoutsId');
    }

    public function getCustomer(){
        return $this->hasMany('App\Models\CustomerDetails','id','customerId');
    }
}

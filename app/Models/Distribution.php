<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distribution extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'quantity','products_id','warehouses_id','state'];
    public function product(){
        return $this->belongsTo('App\Product', 'products_id');
    }
    public function warehouse(){
        return $this->belongsTo('App\Warehouse', 'warehouses_id');
    }
}

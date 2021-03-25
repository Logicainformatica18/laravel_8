<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'name','description','cellphone'];
    public function product(){
        return $this->hasMany('App\Product');
    }
}

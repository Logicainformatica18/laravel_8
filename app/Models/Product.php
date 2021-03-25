<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'description','cost','code_box','detail','providers_id','colors_id','types_id','categories_id','price1','price2','price3'];

    public function provider(){
        return $this->belongsTo('App\Provider', 'providers_id');
    }

    public function color()
    {
        //pertenece a muchas - agregamos el id de la tabla asociativa - pivot
        return $this->belongsTo('App\Color','colors_id');
    }
    public function size(){
        return $this->belongsTo('App\Size', 'sizes_id');
    }
    public function type(){
        return $this->belongsTo('App\Type', 'types_id');
    }
    public function category(){
        return $this->belongsTo('App\Category', 'categories_id');
    }
}

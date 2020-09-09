<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use HasFactory;

    use SoftDeletes;
    protected $fillable = [
        'codeno', 'name', 'photo', 'price', 'discount', 'description', 'subcategory_id', 'brand_id'
    ];

    public function subcategory(){
        return $this->belongsTo('App\Models\Subcategory');
    }

    public function brand(){
        return $this->belongsTo('App\Models\Brand');
    }

    public function orders(){
        return $this->belongsToMany('App\Models\Order', 'orderdetails','order_id','item_id')
        ->withPivot('qty')
        ->withTimestamps();;
    }
}

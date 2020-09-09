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
        return $this->belongsTo('App\Model\Subcategory');
    }

    public function brand(){
        return $this->belongsTo('App\Model\Brand');
    }

    public function orders(){
        return $this->belongsToMany('App\Model\Order', 'orderdetails','order_id','item_id')
        ->withPivot('qty')
        ->withTimestamps();;
    }
}

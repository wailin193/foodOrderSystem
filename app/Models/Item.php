<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function category()
    {
        return $this->hasMany('categories');
    }
    public function order()
    {
        return $this->hasMany('orders');
    }
}

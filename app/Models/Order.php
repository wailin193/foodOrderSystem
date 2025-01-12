<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function payment()
    {
        return $this->hasMany('payments');
    }

    public function status()
    {
        return $this->hasMany('statuses');
    }

    public function user()
    {
        return $this->hasMany('users');
    }

    public function item()
    {
        return $this->belongsToMany('items');
    }
}

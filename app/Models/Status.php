<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public function order()
    {
        return $this->belongsTo('orders');
    }
}

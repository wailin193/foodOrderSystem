<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function item()
    {
        return $this->belongsTo('items');
    }
}

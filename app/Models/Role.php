<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class Role extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }
}

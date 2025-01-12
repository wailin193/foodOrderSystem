<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Role;

class User extends Model
{
    public function role(){
        return $this->hasMany(Role::class);
    }
}

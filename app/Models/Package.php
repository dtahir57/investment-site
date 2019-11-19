<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Package extends Model
{
    public function users()
    {
        return $this->hasMany(User::class);
    }
}

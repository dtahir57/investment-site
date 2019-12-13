<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    public function user()
    {
        return $this->hasMany(User::class,'package_id','id');
    }
}

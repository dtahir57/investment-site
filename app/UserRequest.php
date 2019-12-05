<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class UserRequest extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class,'users_id','id');
    }
}

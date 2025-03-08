<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Post extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Posts;

class Comments extends Model
{
    use HasFactory;


    public function author(){
        return $this->belongsTo(User::class,'from_user');
    }

    public function post(){
        return $this->belongsTo(Posts::class,'on_post');
    }

}

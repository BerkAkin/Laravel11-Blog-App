<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Comments;

class Posts extends Model
{
    use HasFactory;
    public $timestamps= true;
    protected $table= "posts";

    public function author(){
        return $this->belongsTo(User::class);
    }

    public function comments(){
        return $this->hasMany(Comments::class,'on_post');
    }

}

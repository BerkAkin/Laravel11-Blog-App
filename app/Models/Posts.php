<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Posts extends Model
{
    use HasFactory;
    public $timestamps= true;
    protected $table= "posts";

    public function author(){
        return $this->belongsTo(User::class);
    }

}

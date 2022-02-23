<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class phone extends Model
{
    use HasFactory;

// one to one

    public function user(){
        // belongTo eken kiyanne user id eka enawa kiyala
        return $this->belongsTo(User::class);
    }



}

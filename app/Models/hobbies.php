<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hobbies extends Model
{
    use HasFactory;


    public function users()
    {
        //belongs eken wenama eliyen hadanna kiyala kiyanne
        return $this->belongsToMany(User::class);
    }
}

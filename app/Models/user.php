<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    use HasFactory;

    // one to one
    public function phone()
    {
        // has  eken phone eka paththata user id eka yawanawa
        return $this->hasOne(phone::class);
    }

    // one to many
    public function cars()
    {
        return $this->hasMany(cars::class);
    }

    //many to many
    public function hobbies()
    {
        // belongs ekenn wenne eliyen hadenna kiyala
        return $this->belongsToMany(hobbies::class);
    }

}

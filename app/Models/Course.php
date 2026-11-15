<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function lecture()
    {
        return $this->belongsTo(Lecture::class);
    }
    public function users()
    {
        return $this->hasMany(User::class);
    }
     public function lecturecs()
    {
        return $this->hasMany(lecturec::class);
    }
}

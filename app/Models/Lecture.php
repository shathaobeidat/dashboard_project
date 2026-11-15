<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    protected $fillable = [
        'photo',
        'name',
        'email',
        'department',
     'office_room',
    ];

 public function user(){
        return $this->belongsTo(User::class);
    }

 public function courses()
    {
        return $this->hasMany(Course::class);
    }
}

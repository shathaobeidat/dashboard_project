<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class lecturec extends Model
{
    public function lecture()
    {
        return $this->belongsTo(Course::class);
    }
}

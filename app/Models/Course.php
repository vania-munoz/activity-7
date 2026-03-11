<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'course_key',
        'course_name',
        'robotics_kit_id'
    ];

    public function groups()
    {
        return $this->belongsToMany(Group::class);
    }

    public function roboticsKit()
    {
        return $this->belongsTo(RoboticsKit::class);
    }
}

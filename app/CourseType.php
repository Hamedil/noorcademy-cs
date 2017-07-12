<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseType extends Model
{
    //

    public function trainer() {
        return $this->belongsTo('App\Trainer');
    }

}

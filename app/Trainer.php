<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    //

    public function courseTypes() {
        return $this->hasOne('App\CourseType');
    }


}

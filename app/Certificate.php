<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    public function reports()
    {
        return $this->hasMany('App\Report');
    }
//    public function questions()
//    {
//        return $this->hasMany('App\Question');
//    }

}

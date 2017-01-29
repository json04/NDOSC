<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Subjective;
use App\Objective;
use App\Assessment;
use App\Plan;
use App\Date;
use App\Photo;

class Patient extends Model
{
    protected $fillable = ['lastname', 'firstname', 'middlename', 'age', 'sex', 'civilstatus', 'address', 'contact', 'occupation'];

    public function subjectives(){
    	return $this->hasMany('App\Subjective', 'patients_id');
    }

    public function objectives(){
    	return $this->hasMany('App\Objective', 'patients_id');
    }

    public function assessments(){
    	return $this->hasMany('App\Assessment', 'patients_id');
    }

     public function plans(){
    	return $this->hasMany('App\Plan', 'patients_id');
    }

     public function dates(){
    	return $this->hasMany('App\Date', 'patients_id');
    }

    public function photos(){
        return $this->hasMany('App\Photo', 'patients_id');
    }
}

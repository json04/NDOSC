<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Patient;
use App\Objective;
use App\Photo;

class Date extends Model
{
    protected $fillable = ['patients_id','date'];

    public function patients(){
    	return $this->belongsTo('App\Patient');
    }

    // public function objectives(){
    // 	return $this->hasOne('App\Objective');
    // }

    public function photos(){
    	return $this->belongsTo('App\Photo');
    }
}

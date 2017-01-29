<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Patient;
use App\Date;
class Objective extends Model
{
    protected $fillable = ['patients_id','objective'];

    public function patients(){
    	return $this->belongsTo('App\Patient');
    }

    public function dates(){
    	return $this->belongsTo('App\Date');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Patient;

class Plan extends Model
{
    protected $fillable = ['patients_id','plan'];

    public function patients(){
    	return $this->belongsTo('App\Patient');
    }
}

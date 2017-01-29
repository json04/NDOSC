<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Patient;

class Subjective extends Model
{
    protected $fillable = ['patients_id','subjective'];

    public function patients(){
    	return $this->belongsTo('App\Patient');
    }
}

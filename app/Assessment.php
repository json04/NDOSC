<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Patient;
class Assessment extends Model
{
    protected $fillable = ['patients_id','assessment'];

    public function patients(){
    	return $this->belongsTo('App\Patient');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class AccountType extends Model
{
    protected $fillable = ['type'];

    public function users()
    {
    	return $this->belongsTo('App\User');
    }
}

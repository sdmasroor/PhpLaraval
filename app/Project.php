<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
    	'name',
    	'description',
    	'company_id',
    	'user_id',
    	'days',
    ];

    public function company(){
        return $this->belongsToMany('App\Company');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }

}

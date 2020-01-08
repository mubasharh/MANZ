<?php

namespace MANZ;

use Illuminate\Database\Eloquent\Model;

class categories extends Model{
    
    protected $fillable = [
    	'cat_name'
    ];

    public function project(){
    	return $this->hasMany('MANZ\projects');
    }


}

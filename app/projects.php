<?php

namespace MANZ;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class projects extends Model{

    use SoftDeletes;
    protected $dates =['delted_at'];

    protected $fillable = [
    	'title','slug','categories_id','description','thumb'
    ];

    public function getThumbAttribute($thumb){
    	return asset('uploads/projects/'.$thumb);
    }

    public function category(){
    	return $this->belongsTo('MANZ\categories');
    }
}

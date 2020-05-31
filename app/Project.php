<?php

namespace OurLive;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //

    public $fillable = [
        'title',
        'description',
        'livehouse_name',
        'target_amount',
        'apprication_end',
    ];

    public static $rules = array(
            'title' => 'required',
            'description' =>'required',
            'livehouse_name' =>'required',
            'target_amount'=>'required','integer',
            'apprication_end'=>'required','date',
        
    );

    public function rewards(){
        return $this->hasMany('OurLive\Reward');
    }

    public function orner(){
        return $this->belongsTo('OurLive\Orner');
    }
}



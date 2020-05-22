<?php

namespace OurLive;

use Illuminate\Database\Eloquent\Model;

class Reward extends Model
{
    //
    protected $fillable = [
        'project_id',
        'reward_price',
        'reward_content',
        
    ];

    public static $rules = array(
            'reward_price' => 'required',
            'reward_content' =>'required',
    );

    public function project(){
        return $this->belongsTo('OurLive\Project');
    }

    public function orders(){
        return $this->hasOne('OurLive\Reward');
    }
}

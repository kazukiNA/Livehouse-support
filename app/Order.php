<?php

namespace OurLive;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'project_id',
        'reward_id',
        'user_id',
        'user_name',
        'quantity',
        
    ];

    public static $rules = array(
            
    );

    public function reward2(){
        return $this->belongsTo('OurLive\Reward');
    }
}

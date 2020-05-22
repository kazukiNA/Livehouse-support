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
            'target_amount'=>'required',
            'apprication_end'=>'required',
        
    );

    public function rewards(){
        return $this->hasMany('OurLive\Reward');
    }
}

/*<?php

namespace OurLive;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = [
        'title',
        'body',
    ];

    public function comments()
    {
        return $this->hasMany('OurLive\Comment');    
    }
}

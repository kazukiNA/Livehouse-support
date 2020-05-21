<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Reward;

class RewardsController extends Controller
{
    public function store(Request $request, Project $project){
    
        
        if($request->reward1_price){
        $reward = new Reward;
        $reward->reward_price= $request->reward1_price;
        $reward->reward_content=$request->reward1_content;
        $project->rewards()->save($reward);
        }
        if($request->reward2_price){
        $reward = new Reward;
        $reward->reward_price= $request->reward2_price;
        $reward->reward_content=$request->reward2_content;
        $project->rewards()->save($reward);
        }
        if($request->reward3_price){
        $reward = new Reward;
        $reward->reward_price= $request->reward3_price;
        $reward->reward_content=$request->reward3_content;
        $project->rewards()->save($reward);
        }
        $rewards = Reward::where('project_id',$project->id)->get();
        return view('project.confirm',compact('project','rewards'));
        //return redirect('/reward');
        }
    
}

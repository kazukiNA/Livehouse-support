<?php

namespace OurLive\Http\Controllers;

use Illuminate\Http\Request;
use OurLive\Http\Requests\CreateRewardRequest;
use OurLive\Project;
use OurLive\Reward;
use OurLive\Orner;

class RewardsController extends Controller
{
    public function store(CreateRewardRequest $request, Project $project, Orner $orner){
    
        
        if($request->reward1_price){
        $reward1 = new Reward;
        $reward1->reward_price= $request->reward1_price;
        $reward1->reward_content=$request->reward1_content;
        //$project->rewards()->save($reward);
        $request->session()->put('reward1',$reward1);
        $rewards[]=$reward1;
        }
        if($request->reward2_price){
        $reward2 = new Reward;
        $reward2->reward_price= $request->reward2_price;
        $reward2->reward_content=$request->reward2_content;
        //$project->rewards()->save($reward);
        $request->session()->put('reward2',$reward2);
        $rewards[]=$reward2;
        }
        if($request->reward3_price){
        $reward3 = new Reward;
        $reward3->reward_price= $request->reward3_price;
        $reward3->reward_content=$request->reward3_content;
        //$project->rewards()->save($reward);
        $request->session()->put('reward3',$reward3);
        $rewards[]=$reward3;
        }
        $project = $request->session()->get('project');
        
        return view('project.confirm',compact('project','rewards'));
        //return redirect('/reward');
        }
    
}

<?php

namespace OurLive\Http\Controllers\Orner;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use OurLive\Http\Requests\CreateProjectRequest;
use OurLive\Http\Requests\CreateOrderRequest;
use OurLive\Http\Requests\CreateRewardRequest;
use OurLive\Project;
use OurLive\Reward;
use OurLive\Order;
use OurLive\Orner;
use Carbon\Carbon;

class ProjectController 
{
    //
    public function create(){
        return view('project.create');
    }

    public function reward(CreateProjectRequest $request){

        
            $project = new Project;
            $project->livehouse_name = $request->livehouse_name;
            $project->target_amount =$request->target_amount;
            $project->apprication_end=$request->apprication_end;
            $project->title =$request->title;
            $project->description =$request->description;
            $request->session()->put('project',$project);
            
            //$orner->lives()->save($project);
            return view('project.reward',compact('project'));
        }
        
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

    public function save(Request $request){
        $orner_id = $request->session()->get('login_orner_59ba36addc2b2f9401580f014c7f58ea4e30989d');
        $orner = Orner::where('id',$orner_id)->first();
        $project = $request->session()->get('project');
        $orner->lives()->save($project);
        $reward1 = $request->session()->get('reward1');
        $project->rewards()->save($reward1);
        if($request->session('reward2')){
        $reward2 = $request->session()->get('reward2');
        $project->rewards()->save($reward2);
        }elseif($request->session('reward3')){
        $reward3 = $request->session()->get('reward3');
        $project->rewards()->save($reward3);
        }
        
        return view('project.completion');
    }
    
    public function welcome(){
        return view('project.welcome');
    }

}
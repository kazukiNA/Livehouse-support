<?php

namespace OurLive\Http\Controllers\Orner;

use OurLive\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use OurLive\Orner;
use OurLive\Project;
use OurLive\Reward;
use OurLive\Order;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $orner_id = $request->session()->get('login_orner_59ba36addc2b2f9401580f014c7f58ea4e30989d');
        $created = Project::where('orner_id',$orner_id)->first();
        
        
        if(empty($created->id)){
            return view('orner.home');
        }else{
            $created_rewards = Reward::where('project_id',$created->id)->get();
            foreach($created_rewards as $reward){
            $support_count[] = count(Order::where('reward_id',$reward->id)->get());
            }
            return view('orner.home',compact('created','created_rewards','support_count'));
        }
    }
    public function histry($reward_id){
        $histry_reward = Reward::where('id',$reward_id)->first();
        $histry_orders = Order::where('reward_id',$histry_reward->id)->get();
        return view('orner.histry',compact('histry_reward','histry_orders'));
    }

    
}
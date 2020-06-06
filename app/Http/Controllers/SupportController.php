<?php

namespace OurLive\Http\Controllers;

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

class SupportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function support($project){
        $id = $project;
        $project = Project::where('id',$id)->first();
        $rewards = Reward::where('project_id',$id)->get();
        $today = strtotime(Carbon::today());
        if(Auth::check()){
            return view ('project.support',compact('project','rewards','today'));
        }else{
            return view('auth.login');
        }
    }
    
    public function check(CreateOrderRequest $request,$project){
        $id = $project;
        foreach($request->selected_id as $return_id){
        $order = new Order;
        $order->reward_id = $return_id;
        $order->user_id = Auth::id();
        $user = Auth::user();
        $b = intval($return_id);
        $order->quantity = $request->{'quantity_'.$b};
        $reward = Reward::where('id',$return_id)->first();
        $request->session()->put('order'.$return_id,$order);
        $rewards[] =$reward;
        $orders[] = $request->{'quantity_'.$b};
        }
        $project = Project::where('id',$id)->first();
        return view ('project.check',compact('orders','project','rewards'));
    }

    public function pay(Request $request){
        foreach($request->reward_id as $return_id){
        $order = $request->session()->get('order'.$return_id);
        $reward = Reward::where('id',$order->reward_id)->first();
        $reward->orders()->save($order);
        }
        return view('project.done');
    }
}
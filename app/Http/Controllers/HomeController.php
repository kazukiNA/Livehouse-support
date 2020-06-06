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

    public function index(Request $request){
        $projects = Project::paginate(6);
        $today = strtotime(Carbon::today());
        return view ('project.index',['projects' => $projects , 'today' => $today]);
    }

    public function histry(){
        $histry_orders = Order::where('user_id',Auth::id())->get();
        //$histry_ordersはそのuserが支援した回数ごと全部
        foreach($histry_orders as $histry_order){
            $histry_rewards[] = Reward::where('id',$histry_order->reward_id)->first();
            $project = Reward::where('id',$histry_order->reward_id)->first();
            $histry_projects[] =Project::where('id',$project->project_id)->first();
        }
        return view('project.histry',compact('histry_orders','histry_projects','histry_rewards'));
    }
}

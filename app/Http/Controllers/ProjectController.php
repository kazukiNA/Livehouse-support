<?php

namespace OurLive\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use OurLive\Project;
use OurLive\Reward;
use OurLive\Order;
use OurLive\Orner;
use Carbon\Carbon;
class ProjectController extends Controller
{
    //
    public function welcome(){
        return view('project.welcome');
    }

    public function index(Request $request){
        $projects = Project::all();
        $today = strtotime(Carbon::today());
        return view ('project.index',['projects' => $projects , 'today' => $today]);
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

    public function check(Request $request,$project){
        $id = $project;
        foreach($request->selected_id as $return_id){
        $order = new Order;
        $order->project_id = $id;
        $order->reward_id = $return_id;
        $order->user_id = Auth::id();
        $b = intval($return_id);
        $order->quantity = $request->{'quantity_'.$b};
        $reward = Reward::where('id',$return_id)->first();
        $reward->orders()->save($order);
        $rewards[] =$reward;
        $orders[] =$order;
        }
        $project = Project::where('id',$id)->first();
        return view ('project.check',compact('orders','project','rewards'));
    }
    public function create(){
        return view('project.create');
    }
    public function reward(Request $request){

        $this->validate($request,Project::$rules);
        $project = new Project;
        $project->livehouse_name = $request->livehouse_name;
        $project->target_amount =$request->target_amount;
        $project->apprication_end=$request->apprication_end;
        $project->title =$request->title;
        $project->description =$request->description;
        $orner_id = $request->session()->get('login_orner_59ba36addc2b2f9401580f014c7f58ea4e30989d');
        $orner = Orner::where('id',$orner_id)->first();
        $orner->lives()->save($project);
        return view('project.reward',compact('project'));
    }
    public function histry(){
        $histry_orders = Order::where('user_id',Auth::id())->get();
        //$histry_ordersはそのuserが支援した回数ごと全部
        foreach($histry_orders as $histry_order){
            $histry_projects[] =Project::where('id',$histry_order->project_id)->first();
            $histry_rewards[] = Reward::where('id',$histry_order->reward_id)->first();
        }
        return view('project.histry',compact('histry_orders','histry_projects','histry_rewards'));
    }

    public function manage(){
        return view('project.manage');
    }
}
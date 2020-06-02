<?php

namespace OurLive\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use OurLive\Http\Requests\CreateProjectRequest;
use OurLive\Http\Requests\CreateOrderRequest;
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

    public function manage(){
        return view('project.manage');
    }
}
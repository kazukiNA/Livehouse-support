<?php

namespace OurLive\Http\Controllers\Orner;

use OurLive\Http\Controllers\Controller;
use Illuminate\Http\Request;
use OurLive\Orner;
use OurLive\Project;
use OurLive\Reward;

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
            $created_rewards = Reward::where('project_id',$created->id);
            return view('orner.home',compact('created','created_rewards'));
        }
        
}
}
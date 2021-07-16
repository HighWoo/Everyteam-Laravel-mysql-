<?php

namespace App\Http\Controllers;
use App\Models\Team; // 추가
use Illuminate\Http\Request;
use DB;
class TeamController extends Controller
{
  public function create(){
      return view('team.create');
  }
  public function store(Request $request){
//테이블 삽입 방법 1
    //$team=new Team;
    //$team->title=$request->title;
    //$team->address=$request->address;
    //$team->content=$request->content;
    //$team->countm=$request->countm;
    //$team->Createdid=$request->user()->email;
    //$team->save();
//테이블 삽입 방법 2
    Team::create([
        'title'=>$request->title,
        'class'=>$request->class,
        'address'=>$request->address,
        'content'=>$request->content,
        'countm'=>$request->countm,
        'Createdid'=>$request->user()->email,
    ]);
    
    return redirect()->back();

  
}
public function maintable(){

  //$team = \App\Models\Team::all(); 
  $ateam=DB::table('teams')
  ->select('title','id')
  ->orderBy('created_at','desc')
  ->limit(6)
  ->get();
  $countuser=DB::table('users')
  ->count();
  $countteam=DB::table('teams')
  ->count();
 
  return view('main',compact('ateam','countuser','countteam'));

}

public function bviewtable(){

    $team = \App\Models\Team::all(); 
  
  
    return view('team.allteams',compact('team'));
  }
  

public function show(Team $team){

    return view('team.teaminfo',compact('team'));
  }
}

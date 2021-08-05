<?php

namespace App\Http\Controllers;
use App\Models\Team; // 추가
use Illuminate\Http\Request;
use DB;
use App\Models\App; 
use Auth;
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
        'address'=>$request->addressbase.' '.$request->addressdetail,
        'content'=>$request->content,
        'countm'=>$request->countm,
        'Createdid'=>$request->user()->id,
        'end'=>0,
        'numopen'=>$request->numopen,
    ]);
    
    //return redirect()->back();
    return redirect('/allteams')->with('controller_alert', '생성이 완료되었습니다'); //생성하구 allteams로 이동

  
}
public function maintable(){

  //$team = \App\Models\Team::all(); 
  $ateam=DB::table('teams')
  ->select('title','id','class','address','created_at')
  ->where('end',0)
  ->orderBy('created_at','desc')
  ->limit(7)
  ->get();



  $countuser=DB::table('users')
  ->count();
  $countteam=DB::table('teams')->where('end',0)->count();

  $countendteam=DB::table('teams')->where('end',1)->count();
 
  return view('main',compact('ateam','countuser','countteam','countendteam'));

}

public function bviewtable(){

   $team = DB::table('teams')->select('*')->where('end',0)->orderBy('created_at','desc')->paginate(10);
   //$team = \App\Models\Team::all(); 
   
    return view('team.allteams',compact('team'));

  }


public function searchtable(Request $request){
    if($request->Searchtext==null){
      return back()->with('controller_alert', '검색어가 없습니다');
    }
    else{
      $searchtext=$request->Searchtext;
   
    //$searchtext=$request->Searchtext;
    
    //$searchval=DB::table('teams')->select('*')->where('title','like','%'.$searchtext.'%')->paginate(2);
    $searchval=DB::table('teams')->select('*')->WhereRaw('REPLACE (title," ","") LIKE "%'.str_replace(' ','%',$searchtext).'%"')->paginate(10);
    $searchcount=$searchval->count();
    return view('search',compact('searchval','searchtext','searchcount'));  
    }
  }




public function show(Team $team){
    $userapp=DB::table('apps')->select('id')->where('user_id',Auth::user()->id)->where('team_id',$team -> id)->count();
  return view('team.teaminfo',compact('team','userapp'));
  }

//
  public function volshow(Team $team){
    $voluser=DB::select('select users.id,users.name,users.kakao
    from users,apps where apps.team_id = ? and users.id = apps.user_id ', [$team -> id]);
    return view('team.volunteer',compact('team','voluser'));
  }
  public function appshow(Team $team){ //
    $numopen=DB::table('teams')->select('numopen')->where('id',$team->id)->get();
    $teamleaderinfo=DB::table('users')->select('phonenum','kakao')->where('id',$team->Createdid)->get();
    return view('team.myappinfo',compact('team','teamleaderinfo','numopen'));
  }

  public function mycreateteamtable(){
    //$team = \App\Models\Team::all(); 

    //$mycteam=DB::select('select * from teams where Createdid = ? ', [Auth::user()->id]);
    $mycteam=DB::table('teams')->select('*')->where('Createdid',Auth::user()->id)->paginate(10);
    $mycteamcount=$mycteam->count();
    return view('team.mycreateteam',compact('mycteam','mycteamcount'));
  
  }
  
  public function myappteamtable(){
//$myateam=AA::select('select teams.id,teams.title,teams.class,teams.address,teams.countm,teams.end 
 //from teams,apps where apps.user_id = ? and teams.id = apps.team_id ', [Auth::user()->id])->paginate(2);
$myateam=DB::table('teams')->join('apps','teams.id','=','apps.team_id')->select('teams.*')->where('apps.user_id',Auth::user()->id)
->paginate(10);
$myateamcount=$myateam->count();
   return view('team.myappteam',compact('myateam','myateamcount')); 
  }

  




  
  
 
}


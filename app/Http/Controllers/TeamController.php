<?php

namespace App\Http\Controllers;
use App\Models\Team;
use Illuminate\Http\Request;
use DB;
use App\Models\App; 
use Auth;
class TeamController extends Controller
{

  
  public function create(){
      return view('team.create');
  }


  public function store(Request $request){ //팀 생성
    $teamcreatenum=DB::table('teams')->select('id')->where('Createdid',Auth::user()->id)->where('end',0)->count();
    if($teamcreatenum<2){
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
    return redirect('/mycreateteam')->with('controller_alert', '생성이 완료되었습니다');
  }
  else{
    return redirect('/')->with('controller_alert', '팀을 더이상 생성할 수 없습니다\n동시모집은 2개까지만 가능하며\n추가 모집을 원하실경우 삭제/모집완료 처리 해주세요');
  }
}


public function maintable(){ //메인화면 출력물
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


public function bviewtable(){ //모든팀 출력
   $team = DB::table('teams')->select('*')->where('end',0)->orderBy('created_at','desc')->paginate(10);
  return view('team.allteams',compact('team'));
  }


public function searchtable(Request $request){//검색어 출력
    if($request->Searchtext==null){
      return back()->with('controller_alert', '검색어가 없습니다');
    }
    else{
      $searchtext=$request->Searchtext;
    $searchval=DB::table('teams')->select('*')->WhereRaw('REPLACE (title," ","") LIKE "%'.str_replace(' ','%',$searchtext).'%"')->paginate(1);
    $searchcount=$searchval->count();
    return view('search',compact('searchval','searchtext','searchcount'));  
    }
  }


public function show(Team $team){//상세정보 출력
    $appcount=DB::table('apps')->select('id')->where('team_id',$team -> id)->count();
    $userapp=DB::table('apps')->select('id')->where('user_id',Auth::user()->id)->where('team_id',$team -> id)->count();
  return view('team.teaminfo',compact('team','userapp','appcount'));
  }


  public function volshow(Team $team){//내 팀에 지원한 사람 출력
    $voluser=DB::select('select users.id,users.name,users.kakao,apps.created_at
    from users,apps where apps.team_id = ? and users.id = apps.user_id ', [$team -> id]);
    return view('team.volunteer',compact('team','voluser'));
  }


  public function appshow(Team $team){ //내가 지원한한정보
    $appcount=DB::table('apps')->select('id')->where('team_id',$team -> id)->count();
    $numopen=DB::table('teams')->select('numopen')->where('id',$team->id)->get();
    $teamleaderinfo=DB::table('users')->select('phonenum','kakao')->where('id',$team->Createdid)->get();
    return view('team.myappinfo',compact('team','teamleaderinfo','numopen','appcount'));
  }
  
  public function classshow($class){ //팀 분류출력
    $classval=DB::table('teams')->select('*')->where('class',$class)->paginate(2);
    $classcount=$classval->count();
    $classname=$class;
    return view('team.teamclass',compact('classval','classcount','classname'));
    }


  public function mycreateteamtable(){ //내가 생성한 팀
    $mycteam=DB::table('teams')->select('*')->where('Createdid',Auth::user()->id)->orderBy('created_at','desc')->paginate(10);
    $mycteamcount=$mycteam->count();
    return view('team.mycreateteam',compact('mycteam','mycteamcount'));
  
  }
  
  public function myappteamtable(){//내가 지원한 팀
  $myateam=DB::table('teams')->join('apps','teams.id','=','apps.team_id')->select('teams.*')->where('apps.user_id',Auth::user()->id)
  ->orderBy('apps.created_at','desc')->paginate(10);
  $myateamcount=$myateam->count();
   return view('team.myappteam',compact('myateam','myateamcount')); 
  }
}


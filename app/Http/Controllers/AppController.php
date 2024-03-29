<?php

namespace App\Http\Controllers;
use App\Models\App; 
use Illuminate\Http\Request;
use DB;
use auth;


class AppController extends Controller
{


    public function apply(Request $request){ //지원
        if(DB::select('select * from apps where user_id = ? and team_id = ?', [$request->userid, $request->teamid])==null){
       
    App::create([
        'user_id'=>$request->userid,
        'team_id'=>$request->teamid,
    ]);
        return redirect('/myappteam')->with('controller_alert', '지원이 완료 되었습니다');//성공 알람 띄우기
        }
        else{
        return redirect('/allteams')->with('controller_alert', '이미 지원하신 팀 입니다');//중복 알람 띄우기
        }
    }


    public function delend(Request $request){//삭제,모집완료
    if($request->buttonc==1){
        if(Auth::user()->id==$request->userid){
        DB::delete('delete from teams where id = ? and Createdid = ?', [$request->teamid, $request->userid]);
        return redirect('/mycreateteam')->with('controller_alert', '삭제처리가 되었습니다');
        }
        else
        return redirect('/')->with('controller_alert', '잘못된 접근입니다');
        }
    else if($request->buttonc==2){
        if(Auth::user()->id==$request->userid){
        DB::update('update teams set end = 1 where id = ? and Createdid = ?', [$request->teamid, $request->userid]);
        return redirect('/mycreateteam')->with('controller_alert', '모집완료 처리가 되었습니다');
        }
        else
        return redirect('/')->with('controller_alert', '잘못된 접근입니다');
    }
    else if($request->buttonc==3){
        DB::update('update teams set title = ?,content = ?,address = ?,countm = ? where id = ? and Createdid = ?', [$request->mtitle,$request->mcontent,$request->maddressbase.' '.$request->maddressdetail,$request->mcountm,$request->teamid, $request->userid]);
        return back()->with('controller_alert', '수정이 완료되었습니다');
    }
    else{
        return redirect('/')->with('controller_alert', '에러입니다');
    }
    }


    public function appcancel(Request $request){//지원취소
    if(Auth::user()->id==$request->userid){
        DB::delete('delete from apps where team_id = ? and user_id = ?', [$request->teamid, $request->userid]);
        return redirect('/myappteam')->with('controller_alert', '지원이 취소 되었습니다');
        }
        else
        return redirect('/')->with('controller_alert', '잘못된 접근입니다');
    }
    
    public function infomod(Request $request){
     DB::update('update users set kakao = ? where id = ?', [$request->kakao,Auth::user()->id]);
     return redirect('/')->with('controller_alert', '수정이 완료 되었습니다');
    }
}
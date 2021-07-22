<?php

namespace App\Http\Controllers;
use App\Models\App; 
use Illuminate\Http\Request;
use DB;
use auth;
class AppController extends Controller
{

    public function apply(Request $request){
        if(DB::select('select * from apps where user_id = ? and team_id = ?', [$request->userid, $request->teamid])==null){
        DB::insert('insert into apps (user_id, team_id) values (?, ?)', [$request->userid, $request->teamid]);
        return redirect('/myappteam')->with('controller_alert', '지원이 완료 되었습니다');//성공 알람 띄우기
        }
        else{
        return redirect('/allteams')->with('controller_alert', '이미 지원하신 팀 입니다');//중복 알람 띄우기
        }
    
 

}
public function delete(Request $request){
    if(Auth::user()->id==$request->userid){
    DB::delete('delete from teams where id = ? and Createdid = ?', [$request->teamid, $request->userid]);
    return redirect('/mycreateteam')->with('controller_alert', '삭제처리가 되었습니다');
    }
   else
   return redirect('/')->with('controller_alert', '잘못된 접근입니다');
}
}
<?php

namespace App\Http\Controllers;
use App\Models\App; 
use Illuminate\Http\Request;
use DB;

class AppController extends Controller
{

    public function apply(Request $request){
        if(DB::select('select * from apps where user_id = ? and team_id = ?', [$request->userid, $request->teamid])==null){
        DB::insert('insert into apps (user_id, team_id) values (?, ?)', [$request->userid, $request->teamid]);
        return redirect('/')->with('controller_alert', '지원이 완료 되었습니다');//성공 알람 띄우기
        }
        else{
        return redirect('/allteams')->with('controller_alert', '이미 지원하신 팀 입니다');//중복 알람 띄우기
        }
       

}
}
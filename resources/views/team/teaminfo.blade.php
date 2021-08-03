<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="/main.css" />
    @include('header')
</head> 
<script>
  function Click(){
    if(confirm("정말 지원 하시겠습니까?")==true){
      document.forma.submit();
    }
    else{
      return;
    }
  }
  </script>

<body>   

<div class="mainl basicl">
    <div class="infosmalll">
    <br><div class="teaminfotextboxl">
      <a class="figuresmalll_secondline volinfotitle ">{{$team -> title}}</a>
    <div class="teaminfotextbox">{{$team -> content}}</div>
    <a class="figuresmalll_secondline volinfotitle add">{{$team -> address}}</a>
    </div>


    <div class="teaminfotextboxl">
   
    <table class="vollist-table">
        <thead>
            <tr>
                 <th width="80">분류</th>
                 <th width="400">모임위치</th>
                 <th width="160">생성일자</th>
                 <th width="160">수정일자</th>
                 <th width="70">모집인원</th>
                 <th width="60">상태</th>
               
              </tr>
        <tbody>
            <tr>
                <td width="80">{{$team -> class}}</td>
 
                <td width="400">{{$team -> address}}</td>
                <td width="160">{{$team -> created_at}}</td>
                <td width="160">{{$team -> updated_at}}</td>
                <td width="70">{{$team -> countm}}</td>
                <td width="60">@if($team->end==0)모집중 @elseif($team->end==1)모집완료 @else 에러 @endif</td>
          
            </tr>
       </thead>
        </tbody>
     </table>
    </div>
  
     @if($team->Createdid == Auth::user()->id) 
  <a class="figuresmalll_secondline volinfotitle add">본인이 생성한 팀입니다</a>
     @else
      <form name="forma" action="{{ route('apps.apply') }}" method="POST">
        @csrf
      <input type="hidden" name="teamid" value="{{$team -> id}}">
      <input type="hidden" name="userid" value="{{Auth::user()->id}}">
         @if($userapp==0)
          <input type="button" class="create_team_button" value="신청하기" onclick="Click()">
         @else
          <a class="figuresmalll_secondline volinfotitle add">이미 지원한 팀입니다</a>
          @endif
      </form>
@endif 
    </div>
    

</div>
</div>
@include("bottom")
</body>

</html>
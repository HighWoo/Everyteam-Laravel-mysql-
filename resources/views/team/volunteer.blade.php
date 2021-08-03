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
  function DClick(){
    if(confirm("정말 삭제하시겠습니까? 삭제후에는 복구가 불가능합니다")==true){
      document.forma.submit();
    }
    else{
      return;
    }
  }
  function EClick(){
    if(confirm("정말 모집완료처리 하시겠습니까?\n모집완료를 하시면 더이상 공고모집글에 출력되지 않으며\n지원자를 받을 수 없습니다")==true){
      document.forme.submit();
    }
    else{
      return;
    }
  }
  </script>

<body>   
<div class="mainl basicl">
  
    <div class="infosmalll">
    <br> 
    
    

    <div class="teaminfotextboxl">
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
<div class="teaminfotextboxl">
  
      <table class="vollist-table">
        <thead>
            <tr>
                 <th width="464">이름</th>
                 <th width="464">이메일</th>
                 <th width="464">채팅방</th>
 
              </tr>
        <tbody>
            @foreach ($voluser as $item)
            <tr>
                <td width="464">{{$item -> name}}</td>
                <td width="464">{{$item -> email}}</td>
                <td width="464"><a href="{{$item -> kakao}}" target="_blank" >채팅입장하기</a></td>
            </tr>
           @endforeach 
    </thead>
        </tbody>
      </table>
  

      <form name="forma" action="{{ route('apps.delend') }}" method="POST">
        @csrf
      <input type="hidden" name="teamid" value="{{$team -> id}}">
      <input type="hidden" name="userid" value="{{Auth::user()->id}}">
      <input type="hidden" name="buttonc" value="1">
  
      </form>

      <form name="forme" action="{{ route('apps.delend') }}" method="POST">
        @csrf
      <input type="hidden" name="teamid" value="{{$team -> id}}">
      <input type="hidden" name="userid" value="{{Auth::user()->id}}">
      <input type="hidden" name="buttonc" value="2">
      
      </form>
      @if($team->end==0)
      <button id="Dbutton" class="create_team_button" onclick="DClick()">삭제</button>
      <button id="Ebutton" class="create_team_button" onclick="EClick()">모집완료</button>
      @else
      완료처리를 진행하신 공고입니다
      @endif
    </div>
    

</div>
</div>
@include("bottom")
</body>

</html>
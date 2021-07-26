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
  function CClick(){
    if(confirm("지원 취소 하시겠습니까? 취소 후에는 복구가 불가능합니다")==true){
      document.formc.submit();
    }
    else{
      return;
    }
  }

  </script>

<body>   

<div class="mainl basicl">
    <div class="infosmalll">
    <br> <a class="titletext">팀 정보</a>
    
    <table class="list-table">
        <thead>
            <tr>
                 <th width="100">분류</th>
                 <th width="500">제목</th>
                 <th width="250">모임위치</th>
                 <th width="80">모집인원</th>
              </tr>
        <tbody>
            <tr>
                <td width="100">{{$team -> class}}</td>
                <td width="500">{{$team -> title}}</td>
                <td width="250">{{$team -> address}}</td>
                <td width="80">{{$team -> countm}}</td>
            </tr>
       </thead>
        </tbody>
     </table>
      <table class="list-table">
        <thead>
            <tr>
                 <th width="464">공고 게시일</th>
                 <th width="464">최종 수정일</th>
              </tr>
        <tbody>
        
            <tr>
                <td width="464">{{$team -> created_at}}</td>
                <td width="464">{{$team -> updated_at}}</td>
        </tr>
    </thead>
        </tbody>
      </table>
<div class="teaminfotextboxl">
      <table class="list-table">
        <thead>
            <tr>
                 <th width="930">상세내용</th>
              </tr>
      <tbody>
            <tr>
               <td><div class="teaminfotextbox">{{$team -> content}}</div></td> 
        </tr>
      </tbody>
    </thead>
      </table>
  

      <form name="formc" action="{{ route('apps.cancel') }}" method="POST">
        @csrf
      <input type="hidden" name="teamid" value="{{$team -> id}}">
      <input type="hidden" name="userid" value="{{Auth::user()->id}}">
      <input type="hidden" name="buttonc" value="1">
      </form>
      @if($team->end==0)
      <button id="Cbutton" class="create_team_button" onclick="CClick()">지원취소</button>
      @else
      모집 완료된 팀은 지원취소를 하실 수 없습니다.
      @endif
    </div>
    

</div>
</div>
@include("bottom")
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('header')
</head> 
<body>   

<div class="mainl basicl">
    <div class="infosmalll">
    @if($mycteamcount==0)
    @auth
    <br> <a class="titletext"> {{Auth::user()->name}}님은 아직 생성하신 팀이 없네요 </a><br>
    <br><a class="stitletext">팀을 생성해보세요</a>
    <br><input type="button" class="create_team_button" value="팀 생성하기" onclick = "location.href = '{{ url('/create') }}'">
    @endauth
    @else
    @auth
    <br> <a class="titletext"> {{Auth::user()->name}}님 이 생성하신 팀입니다 </a><br>
    <br><a class="stitletext">팀을 클릭하시면 상세정보를 볼수있어요</a>
    @endauth
    <table class="list-table">
        <thead>
            <tr>
                 <th width="100">분류</th>
                 <th width="350">제목</th>
                 <th width="410">주소</th>
                 <th width="70">모집인원</th>
                 <th width="70">상태</th>
              </tr>
          </thead>
        <tbody>
            @foreach ($mycteam as $item)
        <tr onClick="location.href='/volunteer/{{$item -> id}}'">
                <td width="100">{{$item -> class}}</td>
                <td width="350"><a class="maintablefont">{{$item -> title}}</a></td>
                <td width="410">{{$item -> address}}</td>
                <td width="70">{{$item -> countm}}</td>
                <td width="70">@if($item->end==0)모집중 @elseif($item->end==1)모집완료 @else 에러 @endif</td>
        </tr>
            @endforeach 

      
        </tbody>
    
      </table>
</div>
</div>
<div class="mainl basicl">
    <div class="infosmalll">
      @if($mycteam->currentPage()==1)
       <a class="buttonpn previous" href=""onclick="alert('첫 페이지 입니다')"><-이전</a>
      @else
       <a class="buttonpn previous" href="mycreateteam?page={{ $mycteam->currentPage()-1 }}"><-이전</a>
     @endif

     @if($mycteam->currentPage()==$mycteam->lastpage())
     <a class="buttonpn " href=""onclick="alert('마지막 페이지 입니다')">다음-></a>
     @else
    <a class="buttonpn " href="mycreateteam?page={{ $mycteam->currentPage()+1 }}">다음-></a>
     @endif
       @endif
    </div>
    </div>
  
@include("bottom")
</body>
</html>
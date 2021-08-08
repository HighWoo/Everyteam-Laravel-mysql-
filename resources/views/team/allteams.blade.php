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
    <br> <a class="titletext">EveryTeam</a><br>
    <br><a class="stitletext">팀을 클릭하시면 상세정보를 볼수있어요</a>
    <table class="list-table">
        <thead>
            <tr>
                 <th width="100">분류</th>
                 <th width="400">제목</th>
                 <th width="400">주소</th>
                 <th width="100">모집인원</th>
              </tr>
          </thead>
        <tbody>
            @foreach ($team as $item)
            @guest
            @if(Route::has('login'))
            <tr onClick="alert('상세보기는 로그인이 필요합니다');location.href='{{ route('login') }}';" >
            @endif
            @else
            <tr onClick="location.href='/teaminfo/{{$item -> id}}'">
            @endguest
                <td width="100">{{$item -> class}}</td>
                <td width="400"><a class="maintablefont">{{$item -> title}}</a></td>
                <td width="400">{{$item -> address}}</td>
                <td width="100">{{$item -> countm}}</td>
        </tr>
            @endforeach 
        </tbody>
      </table>
</div>
</div>
<div class="mainl basicl">
<div class="infosmalll">
  @if($team->currentPage()==1)
   <a class="buttonpn previous" href=""onclick="alert('첫 페이지 입니다')"><-이전</a>
  @else
   <a class="buttonpn previous" href="allteams?page={{ $team->currentPage()-1 }}"><-이전</a>
 @endif
 @if($team->currentPage()==$team->lastPage())
 <a class="buttonpn " href=""onclick="alert('마지막 페이지 입니다')">다음-></a>
@else
<a class="buttonpn " href="allteams?page={{ $team->currentPage()+1 }}">다음-></a>
@endif
</div>
</div>
@include("bottom")
</body>
</html>
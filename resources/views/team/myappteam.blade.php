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
    @auth
        
  
    <br> <a class="titletext"> {{Auth::user()->name}}님 이 신청하신 팀입니다 </a><br>
    <br><a class="stitletext">팀을 클릭하시면 상세정보를 볼수있어요</a>
    @endauth
    <table class="list-table">
        <thead>
            <tr>
                 <th width="100">분류</th>
                 <th width="350">제목</th>
                 <th width="410">모임위치</th>
                 <th width="70">모집인원</th>
                 <th width="70">상태</th>
              </tr>
          </thead>
        <tbody>
            @foreach ($myateam as $item)
            <tr onClick="location.href='/myappinfo/{{$item -> id}}'">
                
                <td width="100">{{$item -> class}}</td>
                <td width="350">{{$item -> title}}</a></td>
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
      @if($myateam->currentPage()==$myateam->firstItem()+1)
       <a class="buttonpn previous" href=""onclick="alert('첫 페이지 입니다')"><-이전</a>
      @else
       <a class="buttonpn previous" href="myappteam?page={{ $myateam->currentPage()-1 }}"><-이전</a>
     @endif
     @if($myateam->currentPage()==$myateam->lastPage())
     <a class="buttonpn " href=""onclick="alert('마지막 페이지 입니다')">다음-></a>
    @else
    <a class="buttonpn " href="myappteam?page={{ $myateam->currentPage()+1 }}">다음-></a>
    @endif
    </div>
    </div>
@include("bottom")
</body>
</html>
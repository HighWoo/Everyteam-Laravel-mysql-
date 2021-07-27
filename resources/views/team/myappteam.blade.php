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
    <br><a style="font-size: 20px">상세보기를 원하시면 팀의 제목을 클릭하세요</a>
    @endauth
    <table class="list-table">
        <thead>
            <tr>
                 <th width="100">분류</th>
                 <th width="550">제목</th>
                 <th width="200">모임위치</th>
                 <th width="80">모집인원</th>
                 <th width="80">완료여부</th>
              </tr>
          </thead>
        <tbody>
            @foreach ($myateam as $item)
            <tr>
             
                <td width="100">{{$item -> class}}</td>
                @guest
                @if(Route::has('login'))
                <td width="500"><a class="maintablefont" href="{{ route('login') }}" onClick="alert('상세보기는 로그인이 필요합니다')">{{$item-> title}}</a></td>
                @endif
                @else
                <td width="500"><a class="maintablefont" href="/myappinfo/{{$item -> id}}">{{$item -> title}}</a></td>
                @endguest
                {{-- <td width="500"><a href="/teaminfo/{{$item -> id}}">{{$item -> title}}</a></td> --}}
                <td width="200">{{$item -> address}}</td>
                <td width="80">{{$item -> countm}}</td>
                <td width="80">@if($item->end==0)모집중 @elseif($item->end==1)모집완료 @else 에러 @endif</td>
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
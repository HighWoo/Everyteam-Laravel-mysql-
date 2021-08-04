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
    
    <table class="list-table">
        @if($searchcount==0)
        <br><a class="titletext">"{{ $searchtext }}" 에 대한 검색 결과가 없습니다</a>
        <br><br><a class="stitletext">조금더 간단하게 검색해보세요</a>

        @else
        <br> <a class="titletext">"{{ $searchtext }}"에 대한 검색 결과 입니다</a><br>
        <br><a class="stitletext">팀을 클릭하시면 신청이 가능합니다</a>
        <thead>
            <tr>
                 <th width="100">분류</th>
                 <th width="350">제목</th>
                
                 <th width="400">모임위치</th>
                 <th width="80">모집인원</th>
               
        
              </tr>
          </thead>
         
          <tbody>
           
            @foreach ($searchval as $item)
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
            @endif
        </tbody>
      </table>
 
</div>
   
   
</div>
<div class="mainl basicl">
<div class="infosmalll">
@if($searchcount==0)
@else
  @if($searchval->currentPage()==1)
  <a class="buttonpn previous" href=""onclick="alert('첫 페이지 입니다')"><-이전</a>
  @else
  <a class="buttonpn previous" href="search?_token=LThFZkp7rJwfO0Ms8jgHLUf0u9OxNHfIUZdyzvVn&Searchtext={{ $searchtext }}&page={{ $searchval->currentPage()-1 }}"><-이전</a>
  @endif
  @if($searchval->currentPage()==$searchval->lastPage())
  <a class="buttonpn " href=""onclick="alert('마지막 페이지 입니다')">다음-></a>
  @else
  <a class="buttonpn " href="search?_token=LThFZkp7rJwfO0Ms8jgHLUf0u9OxNHfIUZdyzvVn&Searchtext={{ $searchtext }}&page={{ $searchval->currentPage()+1 }}">다음-></a>
  @endif
@endif
</div>
</div>

@include("bottom")

</body>
</html>
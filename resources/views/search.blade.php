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
    <br> <a class="titletext">검색 결과 입니다</a><br>
    <br><a style="font-size: 20px">원하시는 팀의 제목을 클릭하세요</a>
    <table class="list-table">
        <thead>
            <tr>
                 <th width="100">분류</th>
                 <th width="550">제목</th>
                
                 <th width="200">모임위치</th>
                 <th width="80">모집인원</th>
               
        
              </tr>
          </thead>
         
        <tbody>
            
            @foreach ($searchval as $item)
            <tr>
                @if($item->end==0)
                <td width="100">{{$item -> class}}</td>
                @guest
                    @if(Route::has('login'))
                    <td width="500"><a class="maintablefont" href="{{ route('login') }}" onClick="alert('상세보기는 로그인이 필요합니다')">{{$item-> title}}</a></td>
                    @endif
               @else
                <td width="500"><a class="maintablefont" href="/teaminfo/{{$item -> id}}">{{$item -> title}}</a></td>
                @endguest
                {{-- <td width="500"><a href="/teaminfo/{{$item -> id}}">{{$item -> title}}</a></td> --}}
                <td width="200">{{$item -> address}}</td>
                <td width="80">{{$item -> countm}}</td>
              @endif
   
        
        
        </tr>
            @endforeach 

     
        </tbody>
    
      </table>
 
</div>
   
   
</div>
<div class="mainl basicl">
<div class="infosmalll">
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
</div>
</div>

@include("bottom")

</body>
</html>
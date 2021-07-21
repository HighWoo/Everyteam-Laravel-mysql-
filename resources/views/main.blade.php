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


    

<div id="mainimagel" class="mainl imagel">
    <img src ="/image/mainimage.png" alt="faild">
</div>
<div class="mainl figure">
  <a class="figuresmalll" href="{{ url('/') }}">
    EveryTeam 도우미
  </a>
  @guest
  @if (Route::has('login'))
  <a class="figuresmalll"  href="{{ route('login') }}" onclick="alert('팀 생성은 로그인이 필요합니다')" >
    팀 생성하기
  </a>
  @endif
  @else
  <a class="figuresmalll"  href="{{ url('/create') }} ">
    팀 생성하기
  </a>
 @endguest
  <a class="figuresmalll" href="{{ route('myappteam') }}">
    내가 신청한 팀
  </a>
  </div>
<div class="mainl figure">
<a class="figuresmalll" href="{{ url('/') }}">
{{ $countuser }}명의 회원
</a>
<a class="figuresmalll" href="{{ url('/') }}">
모집중인 {{ $countteam }}개의 팀
</a>
  <a class="figuresmalll" href="{{ route('mycreateteam') }}">
  내가 생성한 팀
  </a>
</div>
<div id="annl" class="mainl annmainl">
<div id="annsml" class="annsmalll">
    <div id="newann" class="annl left">
      <a  class="ann_title" href="{{ route('allteam')}}">&nbsp;&nbsp;새로 올라온 팀을 확인하세요!</a>
      <a class="ann_plusbtn" href="{{ route('allteam') }}">더보기+</a>
        <table class="mlist-table">
            <thead>
                <tr>
                    
                     <th width="500"></th>
                     
                   
            
                  </tr>
              </thead>
             
            <tbody>
            @guest
            @if (Route::has('login'))
              @foreach ($ateam as $item)
               <tr><td width="500">
                <a class="maintablefont"  href="{{ route('login') }}" onclick="alert('상세보기는 로그인이 필요합니다')" >

                    {{$item-> title}}
  
              </a>

          <br>
           </td></tr>
            @endforeach 
            @endif
            @else
            @foreach ($ateam as $item)
              <tr><td width="500">
                <a class="maintablefont" href="/teaminfo/{{$item -> id}}">
                  {{$item-> title}}
              </a> 

            <br>
             </td></tr>
              @endforeach 
            @endguest
            </tbody>
        
          </table>
    </div>
    <div id="customann" class="annl">
      @guest
      @if (Route::has('login'))
      <a  class="ann_title" href="">&nbsp;&nbsp;회원들만 사용하실 수 있는 서비스</a>
      <a class="ann_plusbtn" href={{ route('register') }}>가입</a>
      <br><a class="mainsignuptext"><br>
        -지금 가입하시고 다음 혜택을 누리세요-<br><br>
        1.나만의 팀 생성하기<br><br>
        2.원하는 팀 상세정보 조회하기<br><br>
        3.원하는 팀에 간편 신청하기<br><br>
        4.나를 위한 맞춤형 팀 소개받기<br><br>
      </a>
      @endif
      @else
      <a  class="ann_title" href="">&nbsp;&nbsp;사용자님께 딱 맞는 팀만 보여드릴게요!</a>
      <a class="ann_plusbtn" href=>더보기+</a>
        <table class="mlist-table">
            <thead>
                <tr>
                  
                     <th width="500"></th>
                   
                  </tr>
              </thead>
    
            <tbody>
              <tr>
                
     
                <td width="500"></td>
              
      
              </tr>
            </tbody>
        
          </table>
        
    </div>
    @endguest
  </div>
</div>

@include('bottom')
</body>
</html>
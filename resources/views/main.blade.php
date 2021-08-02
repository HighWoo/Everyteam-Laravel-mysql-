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


    


<div class="mainl figure">
  <a class="figuresmalll_firstline" href="{{ url('/') }}">
    스터디
  </a>
  <a class="figuresmalll_firstline" href="{{ url('/') }}">
    스포츠
  </a>
  <a class="figuresmalll_firstline" href="{{ url('/') }}">
    동아리
  </a>
  <a class="figuresmalll_firstline" href="{{ url('/') }}">
    게임
  </a>
  <a class="figuresmalll_firstline" href="{{ url('/') }}">
    멘토
  </a>
  </div>


<div class="mainl figure2">
<a class="figuresmalll_secondline" href="{{ url('/') }}"> Everyteam을 <span style="color:#0EC779;font-weight: bold">{{ $countuser }}명이</span> 이용하고 있습니다.
</a>
 
</div>
</div>
<div class="mainl figure2">
<a class="figuresmalll_secondline" href="{{ url('/') }}">
  모집중인 <span style="color:#0EC779;font-weight: bold">  {{ $countteam }}개의팀</span>을 만나보세요.
</a>
 
</div>
</div>
<div class="mainl figure2">
<a class="figuresmalll_secondline" href="{{ url('/') }}">
매칭이 완료된 <span style="color:#0EC779;font-weight: bold;">{{ $countendteam }}개의팀</span>이 있습니다 팀을 생성해보세요
</a>
 
</div>
{{-- <div id="annl" class="mainl annmainl">
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
    </div> --}}
    {{-- <div id="customann" class="annl">
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
    
  </div> --}}
  @if($countteam%2==1)
  <script>
    {{ $countbox=$countteam-1 }}
    </script>
  @else
  <script>
    {{ $countbox=$countteam }}
    </script>
  @endif

  @for($i=0;$i<$countbox-1;$i++)
  @if($countbox==0||$i==6)
  @break
  @endif
  <div id="annl" class="mainl annmainl">
    <div id="annsml" class="annsmalll">
      
      <div id="annsml" class="annl box left">
       
        <a class="annltext">{{ $ateam[$i]->title }}</a><br>
        <a class="annltext class">{{ $ateam[$i]->class }}</a>
        <a class="annltext class">{{ \Illuminate\Support\Str::limit($ateam[$i]->address, 11, $end='') }}</a><br>
        <a class="annltext class">{{ \Illuminate\Support\Str::limit($ateam[$i]->created_at, 11, $end='') }}</a><br><br><br><br><br>
       
        @guest
      @if (Route::has('login'))
      <a class="annltextbutton" href="{{ route('login') }}" onclick="alert('상세보기는 로그인이 필요합니다')">더보기</a>
      @endif
      @else
        <a class="annltextbutton" href="/teaminfo/{{ $ateam[$i]->id }}">더보기</a>
    @endguest
      </div>
      <div id="annsml" class="annl box">
        
        <a class="annltext">{{ $ateam[$i+1]->title }}</a><br>
        <a class="annltext class">{{ $ateam[$i+1]->class }}</a>
        <a class="annltext class" >{{\Illuminate\Support\Str::limit($ateam[$i+1]->address, 11, $end='') }}</a><br>
        <a class="annltext class">{{\Illuminate\Support\Str::limit($ateam[$i+1]->created_at, 11, $end='') }}</a><br><br><br><br><br>

        @guest
        @if (Route::has('login'))
        <a class="annltextbutton" href="{{ route('login') }}" onclick="alert('상세보기는 로그인이 필요합니다')">더보기</a>
        @endif
        @else
          <a class="annltextbutton" href="/teaminfo/{{ $ateam[$i+1]->id }}">더보기</a>
      @endguest
     
        <script>
          {{ $i++ }}
          </script>
     
      </div>
    </div>
  </div>
  @endfor

</div>

@include('bottom')
</body>
</html>
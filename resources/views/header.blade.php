
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="main.css" />
   
    <title>Document</title>
</head>

<body>
           @if(session()->has('controller_alert'))
            <script type="text/javascript">
             alert('{{ session('controller_alert') }}');
            </script>
            @endif
            
    <div id="headerl" class="headerl">

      <div id="Naviationl" class="Naviation left">
      <a  class="Logo" href="{{ url('/') }}">EveryTeam</a>
    </div>
      <div id="Naviationr" class="Naviation right">
        @guest
        @if (Route::has('login'))
        <a class="neviusertext fake">=============</a>
                <a class="Loginbutton" href="{{ route('login') }}">로그인</a>
                <a class="Loginbutton" href="{{ route('register') }}">회원가입</a>
               
        @endif

    @else
            
            <a id="neviusertext" class="neviusertext"   >
                {{Auth::user()->name}}{{'님 안녕하세요' }}
            </a>

            <a class="Loginbutton" href="">내정보</a>
                <a class="Loginbutton" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit(); alert('로그아웃 되었습니다'); ">
               로그아웃
                </a>
                
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
       
                
    @endguest
      </div>
    </div>
   
            {{-- <a  class="Loginbutton" href="{{ route('login') }}">Login</a> --}}
  

    
    <div id="searchlayout" class="searchl">
    <form>
        <div id="smallsearchlayout" class="searchsl">
    <INPUT type="text" name="Searchtext" placeholder="검색어를 입력하세요" class="search"/>

    {{-- <input type="submit" class="searchbutton" value=""> --}}
     <a  class="searchbutton" href=""></a>
        </div>
    </form>
        {{-- <a  class="searchbutton" href="">Search</a> --}}
        {{-- <img src="image/sbutton.png"> --}}
    </div>
    
    <div id="menul" class="menul">
        @guest
        @if (Route::has('login'))
        <div id="menubl" class="menubuttonsl">
               <a class="custom-btn btn-3" href="{{ url('/') }}"><span>도움말</span></a> 
               <a class="custom-btn btn-3 " href="{{ url('/allteams') }}"><span>팀목록</span></a> 
               <a class="custom-btn btn-3" href="{{ route('login') }}" onclick="alert('팀을 생성하시려면 로그인이 필요합니다')"><span>팀생성</span></a> 
               <a class="custom-btn btn-3" href="{{ route('login') }}" onclick="alert('신청한팀 확인은 로그인이 필요합니다')"><span>신청한팀</span></a> 
               <a class="custom-btn btn-3 right" href="{{ route('login') }}" onclick="alert('생성한팀 확인은 로그인이 필요합니다')"><span>생성한팀</span></a> 
              
        </div>
        @endif
        @else
        <div id="menubl" class="menubuttonsl">
            <a class="custom-btn btn-3" href="{{ url('/') }}"><span>도움말</span></a> 
            <a class="custom-btn btn-3" href="{{ url('/create') }}"><span>팀생성</span></a> 
            <a class="custom-btn btn-3 " href="{{ route('myappteam') }}"><span>신청한팀</span></a> 
            <a class="custom-btn btn-3 " href="{{ route('mycreateteam')}}"><span>생성한팀</span></a> 
            <a class="custom-btn btn-3 right" href="{{ url('/allteams') }}"><span>팀목록</span></a> 
       </div>
        @endguest
        
    </div>
    




</body>

</html>


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
    <div id="headerl" class="headerl">

      <div id="Naviationl" class="Naviation left">
      <a  class="Logo" href="{{ url('/') }}">EveryTeam</a>
    </div>
      <div id="Naviationr" class="Naviation right">
        @guest
        @if (Route::has('login'))
        <a class="neviusertext fake">=============</a>
                <a class="Loginbutton" href="{{ route('login') }}">로그인</a>
                <a class="Loginbutton" href="{{ route('login') }}">회원가입</a>
               
        @endif

    @else
            
            <a id="neviusertext" class="neviusertext"   >
                {{ Auth::user()->name}}{{'님 안녕하세요' }}
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
        <div id="menubl" class="menubuttonsl">
               <a class="custom-btn btn-3" href="{{ url('/') }}"><span>Study</span></a> 
               <a class="custom-btn btn-3" href="{{ url('/') }}"><span>Sport</span></a> 
               <a class="custom-btn btn-3 " href="{{ url('/') }}"><span>Club</span></a> 
               <a class="custom-btn btn-3 " href="{{ url('/') }}"><span>Game</span></a> 
               <a class="custom-btn btn-3 right" href="{{ url('/create') }}"><span>Mentor</span></a> 
        </div>
             
        
        
    </div>
    




</body>

</html>

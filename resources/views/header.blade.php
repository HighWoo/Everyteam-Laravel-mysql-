
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/main.css" />
   
    <title>Document</title>
</head>

<body>
           @if(session()->has('controller_alert'))
            <script type="text/javascript">
             alert('{{ session('controller_alert') }}');
            </script>
            @endif
            
    <div id="headerl" class="headerl top">

      <div id="Naviationl" class="Naviation left">
      @guest
      @if (Route::has('login'))
     
        <a  class="Logo" href="{{ url('/') }}">EveryTeam</a>
      
        <a class="topmenubuttons" href="{{ url('/allteams') }}">팀목록</a> 
        <a class="topmenubuttons" href="{{ route('login') }}" onclick="alert('팀을 생성하시려면 로그인이 필요합니다')">팀생성</a> 
        <a class="topmenubuttons" href="{{ route('login') }}" onclick="alert('신청한팀 확인은 로그인이 필요합니다')">신청한팀</a> 
        <a class="topmenubuttons" href="{{ route('login') }}" onclick="alert('생성한팀 확인은 로그인이 필요합니다')">생성한팀</a> 
            
   
      @endif
      @else
      <a  class="Logo" href="{{ url('/') }}">EveryTeam</a>
         
          <a class="topmenubuttons" href="{{ url('/allteams') }}">팀목록</a> 
          <a class="topmenubuttons" href="{{ url('/create') }}">팀생성</a> 
          <a class="topmenubuttons" href="{{ route('myappteam') }}">신청한팀</a> 
          <a class="topmenubuttons" href="{{ route('mycreateteam')}}">생성한팀</a> 
          
   
      @endguest   
    
    
    
    
    </div>
      <div id="Naviationr" class="Naviation right">
        @guest
        @if (Route::has('login'))
        <a class="neviusertext fake">=============</a>

        <a class="topmenubuttons" href="{{ url('https://open.kakao.com/o/svoduBpd') }}" target="_blank">고객지원</a> 
                <a class="Loginbutton" href="{{ route('login') }}">로그인</a>
                <a class="Loginbutton" href="{{ route('register') }}">회원가입</a>
               
        @endif

    @else
            
            <a id="neviusertext" class="neviusertext"   >
                {{Auth::user()->name}}{{'님 안녕하세요' }}
            </a>
           
            <a class="topmenubuttons" href="{{ url('/myinformation') }}">내정보</a> 
            <a class="topmenubuttons" href="{{ url('https://open.kakao.com/o/svoduBpd') }} "target="_blank">고객지원</a> 
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

  

    
    <div id="searchlayout" class="searchl">
    <form name="search" action="{{ route('team.search') }}" method="GET">
        @csrf
        <div id="smallsearchlayout" class="searchsl">
    <INPUT type="text" name="Searchtext" placeholder="제목으로 검색하세요" class="search"/>

      
     <input type="submit" class="searchbutton" value="검색">
        </div>
    </form>
    </div>
    

    <div id="headerl " class="headerl">
    </div>




</body>

</html>


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
      <div id="Naviation" class="Naviation">
      <a  class="Logo" href="{{ url('/') }}">에브리팀</a>
        @guest
        @if (Route::has('login'))
        <a class="neviusertext fake">===============</a>
                <a class="Loginbutton" href="{{ route('login') }}">로그인</a>
               
        @endif

    @else
     
            <a id="neviusertext"   >
                {{ Auth::user()->name}}{{'님 안녕하세요' }}
            </a>

           
                <a class="Loginbutton" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
               로그아웃
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
 

    @endguest
      </div>

   
            {{-- <a  class="Loginbutton" href="{{ route('login') }}">Login</a> --}}
  

  
    <div id="searchlayout" class="searchl">
    <INPUT type="text" name="Searchtext" placeholder="검색어를 입력하세요" class="search">
    <a  class="searchbutton" href="">Search</a>
    </div>
    
    <div id="menul" class="menul">
               <a class="custom-btn btn-3 left" href="{{ url('/') }}"><span>Study</span></a> 
               <a class="custom-btn btn-3 " href="{{ url('/') }}"><span>Sport</span></a> 
               <a class="custom-btn btn-3 " href="{{ url('/') }}"><span>Club</span></a> 
               <a class="custom-btn btn-3 " href="{{ url('/') }}"><span>Game</span></a> 
               <a class="custom-btn btn-3 " href="{{ url('/create') }}"><span>Create</span></a> 
         
             
        
        
    </div>
    

</div>



</body>

</html>

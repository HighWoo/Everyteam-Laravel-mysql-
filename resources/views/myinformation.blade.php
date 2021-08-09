<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="/main.css" />
    <script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
    @include('header')
</head> 
<script>
  function MClick(){
    
    if(confirm("정말 수정하시겠습니까?")==true){
        document.formm.submit();
      }
    else{
      return;
    }
  }

  function showm(){
      document.getElementById("show").style.display = "block";
   }   
  </script>
 


  

<body>   
<div class="mainl basicl">
  
    <div class="infosmalll">
    <br> 
    <br> <a class="titletext">내정보</a><br>
    <br><a class="stitletext">카카오 오픈카톡 링크만 변경이 가능합니다</a>
    <br><a class="stitletext">다른 항목 수정은 우측상단 고객지원에 문의해 주세요</a>

    <div class="teaminfotextboxl"><br><br>
  <form name="formm" action="{{ route('user.infomod') }}" method="POST">
    @csrf
    <a class="create_team_infotext">아이디(이메일)</a><br>
    <input type="text" name="name" maxlength="20" class="create_team_textbox" value="{{Auth::user()->email}}" readonly><br>
    <a class="create_team_infotext">이름</a><br>
    <input type="text" name="name" maxlength="20" class="create_team_textbox" value="{{Auth::user()->name}}" readonly><br>
    <a class="create_team_infotext">전화번호</a><br>
    <input type="text" name="phone" maxlength="20" class="create_team_textbox" value="{{Auth::user()->phonenum}}" readonly><br>
    <a class="create_team_infotext">오픈카톡 링크</a><br>
    <a class="create_team_infotext">수정 후 엔터를 누르시면 수정완료 버튼이 보입니다</a><br>
    <input type="text" name="kakao" maxlength="20" class="create_team_textbox" value="{{Auth::user()->kakao}}" onchange="showm()"><br>
  </form>

  <div id="show" style="display:none">
    <button id="Mbutton" class="create_team_button" onclick="MClick()">수정완료</button>
  </div>

</form>
    </div>
</div>
@include("bottom")
</body>

</html>
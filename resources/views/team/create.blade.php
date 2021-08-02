<!DOCTYPE html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('header')
</head> 
<body>   
   <script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
   {{-- 다음 주소 프로그램 --}}
   <script>   
       function sample6_execDaumPostcode() {
           new daum.Postcode({
               oncomplete: function(data) {
                   document.getElementById("sample6_address").value = data.roadAddress; 
                   document.getElementById("sample6_detailAddress").focus();

                   
               }
               
           }).open();
          
       }
     
   </script>
       {{-- 아니오 클릭시 주소 div생성 --}}
       <script language="javascript" type="text/javascript">
       function setDisplay(){
    if($('input:radio[id=aaa]').is(':checked')){
        document.getElementById("sample6_address").value="온라인";
        $('#test').hide();
    }else{
        
        $('#test').show();
        document.getElementById("sample6_address").value=null;
    }
}
   //주소 입력 체크
function Checkform() { 
  
    if(createform.title.value == ""){
        alert("제목을 입력해 주세요"); 
        createform.title.focus();
        return; 
    }
    else if(createform.class.value == ""){
        alert("종류를 선택해 주세요"); 
        createform.class.focus();
        return; 
    }
    else if(createform.abcd.value == ""){
        alert("온라인 여부를 선택해주세요"); 
        createform.abcd.focus();
        return; 
    }
    else if( createform.addressbase.value == "" ) 
    { 
        alert("주소찾기 버튼을 눌러 주소를 입력해주세요"); 
        createform.addressbase.focus();
        return; 
        } 
    else if(createform.countm.value == ""){
        alert("모집인원수를 입력해 주세요"); 
        createform.countm.focus();
        return; 
    }

    else if(createform.content.value == ""){
        alert("상세내용을 입력해 주세요"); 
        createform.content.focus();
        return; 
    }
    else{
        document.createform.submit();
    }
}


    </script>
      {{--  --}}


     

<div class="mainl basicl">
    <br> <a class="titletext">팀을 생성하세요</a><br><br><br>
    
<form name="createform" action="{{ route('teams.store') }}" method="POST">
    @csrf
    <a class="create_team_infotext">제목은 간단하게 팀을 한마디로 소개 해주세요</a><br>
<input type="text" name="title" maxlength="20" class="create_team_textbox"  ><br>
<a class="create_team_infotext">어떤 종류의 팀인가요?</a><br>
<select name="class" class="create_team_select"  >
    <option selected disabled value=""></option>
    <option value="study">학습</option>
    <option value="sport">스포츠</option>
    <option value="club">동아리/단체</option>
    <option value="game">게임</option>
    <option value="mentor">멘티모집</option>
    <option value="menti">멘토모집</option>
    <option value="others">기타</option>

</select><br>
<a class="create_team_infotext">온라인 활동 인가요?</a><br>
<div class=create_team_radiobox name="onlinecheck"  >
<input class="create_team_radio" type="radio" id="aaa" name="abcd"  onchange="setDisplay()" > 네
<input class="create_team_radio right" type="radio" id="bbb" name="abcd"  onchange="setDisplay()" >아니오
</div><br>

<div id="test" class="create_team_radiobox addressbox" style="display:none">
    <a class="create_team_infotext">주소찾기 버튼을 눌러 활동하실 주소를 입력해주세요</a><br>
    <input type="button" class="searchbutton" onclick="sample6_execDaumPostcode()" value="주소 찾기"><br>
    <input type="text" name="addressbase" class="create_team_textbox addressbox" id="sample6_address"  readonly><br>
    <a class="create_team_infotext">상세 주소를 입력해 주세요</a><br>
    <input type="text" name="addressdetail" class="create_team_textbox addressbox" id="sample6_detailAddress"><br>
</div><br>

<a class="create_team_infotext">모집 인원 수를 입력해 주세요</a><br>
<input type="number" name="countm" class="create_team_textbox"  ><br>
<a class="create_team_infotext">팀의 상세내용을 입력해 주세요</a><br>
<textarea name="content" class="create_team_textarea" wrap="hard"  ></textarea><br>

<input type="button" class="create_team_button" value="생성하기" onclick="Checkform()">
</form>
</div>

@include("bottom")
</body>
</html>
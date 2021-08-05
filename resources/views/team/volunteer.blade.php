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
  function DClick(){
    if(confirm("정말 삭제하시겠습니까? 삭제후에는 복구가 불가능합니다")==true){
      document.forma.submit();
    }
    else{
      return;
    }
  }

  
  function EClick(){
    if(confirm("정말 모집완료처리 하시겠습니까?\n모집완료를 하시면 더이상 공고모집글에 출력되지 않으며\n지원자를 받을 수 없습니다")==true){
      document.forme.submit();
    }
    else{
      return;
    }
  }



  function sample6_execDaumPostcode() {
           new daum.Postcode({
               oncomplete: function(data) {
                   document.getElementById("sample6_address").value = data.roadAddress; 
                   document.getElementById("sample6_detailAddress").focus();

                   
               }
               
           }).open();
          
       }
    


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
   function showinfoad(){
    document.getElementById("showinfoad").style.display = "block";
   }
   function online(){
   document.getElementById("sample6_address").value="온라인";
   document.getElementById("showinfoad").style.display = "none";
   document.getElementById("sample6_detailAddress").value=null;

   }
  </script>
 


  

<body>   
<div class="mainl basicl">
  
    <div class="infosmalll">
    <br> 
    @if($team->end==0)
    <br> <a class="titletext">수정/지원자확인</a><br>
    <br><a class="stitletext">하단 사항에 변경사항이 있으면 수정하기 버튼이 생성됩니다</a>
    @else
    <br> <a class="titletext">모집이 완료된 팀입니다 </a><br>
    <br><a class="stitletext">수정/변경이 불가능해요!</a>
    @endif

    <div class="teaminfotextboxl"><br><br>
  <form name="formm" action="{{ route('apps.delend') }}" method="POST">
    @csrf
    <input type="hidden" name="teamid" value="{{$team -> id}}">
    <input type="hidden" name="userid" value="{{Auth::user()->id}}">
    
    <a class="create_team_infotext">제목</a><br>
    <input type="text" name="mtitle" maxlength="20" class="create_team_textbox" value="{{$team -> title}}" onchange="showm()"><br>

    <a class="create_team_infotext">상세내용</a><br>
    <textarea class="create_team_textarea modify" name="mcontent" wrap="hard" onchange="showm()">{{$team -> content}}</textarea><br><br><br>

    <a class="create_team_infotext">활동주소</a><br>
    <input type="text" name="maddressbase" class="create_team_textbox addressbox" id="sample6_address" value="{{$team -> address}}" readonly ></a>
    @if($team->end==0)
    <button type="button" class="create_team_button" onclick="sample6_execDaumPostcode();showm();showinfoad()"  >주소수정</button>
    <button type="button" class="create_team_button" onclick="showm();online();">온라인</button><br>
    <div id="showinfoad" style="display:none">
    <a class="create_team_infotext">상세주소 입력</a><br>
    <input type="text" name="maddressdetail" class="create_team_textbox" id="sample6_detailAddress" ><br>
    </div>
    <a class="create_team_infotext">모집인원 수</a><br>
    <input type="number" name="mcountm" class="create_team_textbox countm"  value="{{$team -> countm}}"  onchange="showm()" ><br>
   
    <input type="hidden" name="buttonc" value="3" >
    
  </form>

  <div id="show" style="display:none">
    <button id="Mbutton" class="create_team_button" onclick="MClick()">수정완료</button>
  </div>
  @else
</form>
  @endif
    </div>


    <div class="teaminfotextboxl">
      <br><a class="stitletext">상세정보 입니다</a>
    <table class="vollist-table">
        <thead>
            <tr>
                 <th width="80">분류</th>
                 <th width="400">모임위치</th>
                 <th width="160">생성일자</th>
                 <th width="160">수정일자</th>
                 <th width="70">모집인원</th>
                 <th width="60">상태</th>
               
              </tr>
        <tbody>
            <tr>
                <td width="80">{{$team -> class}}</td>
 
                <td width="400">{{$team -> address}}</td>
                <td width="160">{{$team -> created_at}}</td>
                <td width="160">{{$team -> updated_at}}</td>
                <td width="70">{{$team -> countm}}</td>
                <td width="60">@if($team->end==0)모집중 @elseif($team->end==1)모집완료 @else 에러 @endif</td>
          
            </tr>
       </thead>
        </tbody>
     </table>
    </div>
<div class="teaminfotextboxl">
  
      <table class="vollist-table">

        <thead>
          <br><a class="stitletext">지원자목록 입니다<br>지원자가 연락이 없을때 채팅을 사용해주세요</a>
            <tr>
                 <th width="464">이름</th>
                 
                 <th width="464">채팅방</th>
 
              </tr>
        <tbody>
            @foreach ($voluser as $item)
            <tr>
              
                <td width="464">{{$item -> name}}</td>
          
                <td width="464"><a href="{{$item -> kakao}}" target="_blank" >채팅입장하기</a></td>
            </tr>
           @endforeach 
    </thead>
        </tbody>
      </table>
  

      <form name="forma" action="{{ route('apps.delend') }}" method="POST">
        @csrf
      <input type="hidden" name="teamid" value="{{$team -> id}}">
      <input type="hidden" name="userid" value="{{Auth::user()->id}}">
      <input type="hidden" name="buttonc" value="1">
  
      </form>

      <form name="forme" action="{{ route('apps.delend') }}" method="POST">
        @csrf
      <input type="hidden" name="teamid" value="{{$team -> id}}">
      <input type="hidden" name="userid" value="{{Auth::user()->id}}">
      <input type="hidden" name="buttonc" value="2">
      
      </form>
    
    </div>

    @if($team->end==0)
    <button id="Dbutton" class="create_team_button" onclick="DClick()">삭제</button>
    <button id="Ebutton" class="create_team_button" onclick="EClick()">모집완료</button>
    @else
    <a class="figuresmalll_secondline volinfotitle add">완료처리를 진행하신 공고입니다</a>
    
    @endif

</div>
</div>
@include("bottom")
</body>

</html>
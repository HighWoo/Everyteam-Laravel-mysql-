<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="/main.css" />
    @include('header')
</head> 
<script>
  function CClick(){
    if(confirm("지원 취소 하시겠습니까? 취소 후에는 복구가 불가능합니다")==true){
      document.formc.submit();
    }
    else{
      return;
    }
  }

  </script>

<body>   

  <div class="mainl basicl">
    <div class="infosmalll">
    <br><div class="teaminfotextboxl">
      <a class="figuresmalll_secondline volinfotitle ">{{$team -> title}}</a>
    <div class="teaminfotextbox">{{$team -> content}}</div>
    

    @if($team -> address=='온라인')
    <a class="figuresmalll_secondline volinfotitle add">온라인 활동 입니다</a>
    @else
    <a class="figuresmalll_secondline volinfotitle add">{{$team -> address}}</a>
    <div id="map"  class="teaminfotextboxl map" ></div>
  
    <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=416edf074c64349156ba0521803d55da&libraries=services"></script>
    <script>
     // 카카오맵api스크립트
     var mapContainer = document.getElementById('map'),
    mapOption = {
        center: new kakao.maps.LatLng(33.450701, 126.570667), 
        level: 3 
    };   
var map = new kakao.maps.Map(mapContainer, mapOption); 
var geocoder = new kakao.maps.services.Geocoder();
geocoder.addressSearch('{{$team -> address}}', function(result, status) {
     if (status === kakao.maps.services.Status.OK) {
        var coords = new kakao.maps.LatLng(result[0].y, result[0].x);
        var marker = new kakao.maps.Marker({
            map: map,
            position: coords
        });
        var infowindow = new kakao.maps.InfoWindow({
            content: '<div class="mapdot">여기서 만나요!</div>'
        });
        infowindow.open(map, marker);
        map.setCenter(coords);
    } 
});    
    </script>
    @endif
    </div>


    <div class="teaminfotextboxl">
   
    <table class="vollist-table">
        <thead>
            <tr>
                 <th width="80">분류</th>
                 <th width="400">모임위치</th>
                 <th width="160">생성</th>
                 <th width="115">모집인원</th>
                 <th width="115">지원인원</th>
           
                 <th width="60">상태</th>
               
              </tr>
        <tbody>
            <tr>
                <td width="80">{{$team -> class}}</td>
 
                <td width="400">{{$team -> address}}</td>
                <td width="160">{{$team -> created_at}}</td>
        
                <td width="115">{{$team -> countm}}</td>
                <td width="115">{{$appcount}}</td>
                <td width="60">@if($team->end==0)모집중 @elseif($team->end==1)모집완료 @else 에러 @endif</td>
          
            </tr>
       </thead>
        </tbody>
     </table>
    </div>
  

      <form name="formc" action="{{ route('apps.cancel') }}" method="POST">
        @csrf
      <input type="hidden" name="teamid" value="{{$team -> id}}">
      <input type="hidden" name="userid" value="{{Auth::user()->id}}">
      </form>
 
        {{-- 넘버 오픈에 동의했을때 --}}
        @if($numopen[0]->numopen==1) 
        <div class="teaminfotextboxl">
          <br>
        <a class="stitletext kakao">전화번호</a>
        <a class="figuresmalll_secondline volinfotitle">{{$teamleaderinfo[0]->phonenum}}</a>
        </div>
        <div class="teaminfotextboxl">
          <br>
        <a class="stitletext kakao">카카오톡 오픈채팅</a>
        <a class="figuresmalll_secondline volinfotitle add">{{$teamleaderinfo[0]->kakao}}</a>
        <a class="create_team_button" onclick="window.open('{{$teamleaderinfo[0]->kakao}}')"  target="_blank">채팅방입장하기</a><br><br>
      </div>
         {{-- 넘버 오픈에 동의하지 않았을 때 --}}
        @elseif($numopen[0]->numopen==0)
        <div class="teaminfotextboxl">
          <a class="stitletext kakao">카카오톡 오픈채팅</a>
        <a class="figuresmalll_secondline volinfotitle add">{{$teamleaderinfo[0]->kakao}}</a>
        <a class="create_team_button" href="{{$teamleaderinfo[0]->kakao}}"  target="_blank">채팅방입장하기</a><br><br>
        </div>
        @else
        <div class="teaminfotextboxl">
        에러입니다
      </div>
        @endif
      </div>
      @if($team->end==0)
      <br><button id="Cbutton" class="create_team_button" onclick="CClick()">지원취소</button>
      @else
      <a class="figuresmalll_secondline volinfotitle add">모집 완료된 팀은 지원취소를 하실 수 없습니다<br>걱정마세요 팀마스터도 더이상 개인정보를 열람할 수 없습니다</a>

      @endif

    

</div>
</div>
@include("bottom")
</body>

</html>
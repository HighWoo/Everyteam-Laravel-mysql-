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
  function Click(){
    if(confirm("정말 지원 하시겠습니까?")==true){
      document.forma.submit();
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
                 <th width="115">신청인원</th>
                 <th width="60">상태</th>
               
              </tr>
        <tbody>
            <tr>
                <td width="80">{{$team -> class}}</td>
 
                <td width="400">{{$team -> address}}</td>
                <td width="160">{{$team -> created_at}}</td>
                <td width="115">{{$team -> countm}}명</td>
                <td width="115">{{$appcount}}명</td>
            
                <td width="60">@if($team->end==0)모집중 @elseif($team->end==1)모집완료 @else 에러 @endif</td>
          
            </tr>
       </thead>
        </tbody>
     </table>
    </div>
  
     @if($team->Createdid == Auth::user()->id) 
  <a class="figuresmalll_secondline volinfotitle add">본인이 생성한 팀입니다</a>
     @else
      <form name="forma" action="{{ route('apps.apply') }}" method="POST">
        @csrf
      <input type="hidden" name="teamid" value="{{$team -> id}}">
      <input type="hidden" name="userid" value="{{Auth::user()->id}}">
         @if($userapp==0)
           <a class="figuresmalll_secondline volinfotitle add">신청하시면 연락처를 확인할 수 있어요</a>
          <input type="button" class="create_team_button" value="신청하기" onclick="Click()">
         @else
         
          <a class="figuresmalll_secondline volinfotitle add">이미 지원한 팀입니다</a>
          @endif
      </form>
@endif 
    </div>
    

</div>
</div>
@include("bottom")
</body>

</html>
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
<body>   

<div class="mainl basicl">
    <div class="infosmalll">
    <br> <a class="titletext">조회하신 팀 목록입니다</a>
    
    <table class="list-table">
        <thead>
            <tr>
                 <th width="100">분류</th>
                 <th width="500">제목</th>
                 <th width="200">모임위치</th>
                 <th width="80">모집인원</th>
               
        
              </tr>
        
         
        <tbody>
        
            <tr>
                <td width="100">{{$team -> class}}</td>
                <td width="500">{{$team -> title}}</td>
                <td width="200">{{$team -> address}}</td>
                <td width="80">{{$team -> countm}}</td>
 
   
        
        
        </tr>
   
    </thead>
    
      
        </tbody>
    
      </table>
      <table class="list-table">
        <thead>
            <tr>
                 <th width="442">공고 게시일</th>
                 <th width="442">최종 수정일</th>
              
               
        
              </tr>
        
         
        <tbody>
        
            <tr>
                <td width="442">{{$team -> created_at}}</td>
                <td width="442">{{$team -> updated_at}}</td>
               
 
   
        
        
        </tr>
   
    </thead>
    
      
        </tbody>
    
      </table>
<div class="teaminfotextboxl">
      <table class="list-table">
        <thead>
            <tr>
                 <th width="886">상세내용</th>
              
               
        
              </tr>
        
         
      <tbody>
              
            <tr>
             
               <td><div class="teaminfotextbox">{{$team -> content}}</div></td> 
              
        
        
        </tr>
      </tbody>
    </thead>
    
      
        
    
      </table>
    </div>
</div>
</div>

</body>
</html>
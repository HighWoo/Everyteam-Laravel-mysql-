<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('header')
</head> 
<body>   
<div id="mainimagel" class="mainl imagel">
    <img src ="/image/mainimage.png" alt="faild">
</div>
<div id="annl" class="mainl annmainl">
    <div id="annl" class="annlbar left">
        <a  class="ann_title" href="">&nbsp;&nbsp;새로 올라온 팀을 확인하세요!</a>
        <input type="button" class="ann_plusbtn" onclick="location.href='aa.php'" value="더보기+">
    </div>
    
    <div id="annl" class="annlbar">
        <a  class="ann_title" href="">&nbsp;&nbsp;사용자님께 딱 맞는 팀만 보여드릴게요!</a>
        <input type="button" class="ann_plusbtn" onclick="location.href='aa.php'" value="더보기+">
    </div>

    <div id="newann" class="annl left">
        
        <table class="list-table">
            <thead>
                <tr>
                    
                     <th width="500">제목</th>
                     
                   
            
                  </tr>
              </thead>
    
            <tbody>
              <tr>
                
               
                <td width="500"></td>
                

    
      
              </tr>
            </tbody>
        
          </table>
    </div>
    <div id="customann" class="annl">

        <table class="list-table">
            <thead>
                <tr>
                  
                     <th width="500">제목</th>
                   
                  </tr>
              </thead>
    
            <tbody>
              <tr>
                
     
                <td width="500"></td>
              
      
              </tr>
            </tbody>
        
          </table>
        
    </div>
</div>


</body>
</html>
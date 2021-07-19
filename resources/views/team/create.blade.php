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
   

     
      
     

<div class="mainl basicl">
    <br> <a class="titletext">당신만의 팀을 생성하세요</a>
    
<form action="{{ route('teams.store') }}" method="POST">
    @csrf
<input type="text" name="title" class="create_team_textbox" placeholder="제목"><br>

<select name="class" class="create_team_select">
    <option selected disabled value="">분류/유형을 선택해주세요</option>
    <option value="study">학습</option>
    <option value="sport">스포츠</option>
    <option value="club">동아리/단체</option>
    <option value="game">게임</option>
    <option value="others">기타</option>

</select><br>
<input type="text" name="address" class="create_team_textbox" placeholder="모임장소(온라인은 '온라인'으로 작성해주세요)"><br>
<input type="text" name="countm" class="create_team_textbox" placeholder="모집인원"><br>
<textarea name="content" class="create_team_textarea"placeholder="상세내용(마우스를 올려주세요)" wrap="hard" ></textarea><br>

<input type="submit" class="create_team_button" value="생성하기">
</form>
</div>

@include("bottom")
</body>
</html>
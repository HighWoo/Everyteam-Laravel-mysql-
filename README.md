# TeamMatching-v2

### 기존에 만들었던 [TeamMatching](https://github.com/highcowoo/TeamMatching-project)을 더 전문적인 개발도구를 활용하여 최종적으로 서버까지 여는것이 목표 
### 개발언어는 php사용 프레임워크는 라라벨 사용 매일 라라벨에 대한 학습과 개발을 진행  
### 백엔드와 프론트엔드 전부 도구를 이용하여 직접 개발  
### laravel,phpStorm,Zeplin,mysql,figma,css,php  
### 먼저 프론트앤드 개발 후 백엔드는 Laravel학습이 완료되면 진행  
### 주말에는 간단한 개발정도만 진행  

 
## 목차  
[Day1](#Day1)-색조합,디자인/라라벨 설치,실행방법  
[Day2](#Day2)-메인화면 디자인/라라벨 기본폴더 학습  
[Day3](#day3)-헤더파일개발,자식에게 상속/블레이드코드 학습    
[Day4](#day4)-hover기능 구현    
[Day5](#day5)-로그인 기능 구현  
[Day6](#day6)-회원가입 기능 구현/컨트롤러와 라우트에 대한 이해  
[Day7](#Day7)-팀을 생성하여 데이터베이스 내에 삽입/데이터베이스 이용방법과 MVC모델에 대한 이해    
[Day8](#Day8)-테이블을 출력구현,get메소드 활용 구현/라라벨의 기본구조MVC에 대해 더 심도있게 학습  

<hr>

# Day1 
(2021/07/07)
## 개발Part
설계전 adobe컬러에서 색 조합을 검색
![AdobeColor-My Color Theme](https://user-images.githubusercontent.com/75231868/124706030-9a4c1100-df31-11eb-9883-3e378ee971da.jpeg)  
검색한 색 조합으로 figma를 이용하여 main 인터페이스 설계
![Figma 사용 Ui설계](https://user-images.githubusercontent.com/75231868/124705418-9b307300-df30-11eb-9b97-a7064c149636.png)  

figma로 설계한것을 zeplin으로 연동
![zeplin 연동한 모습](https://user-images.githubusercontent.com/75231868/124705519-bd29f580-df30-11eb-9168-445b21154469.png)  

## 학습Part

### 라라벨 설치와 프로젝트생성,라라벨 실행방법 학습  

프로젝트 생성법-  
cmd에서 
cd c:\xampp\htdocs
laravel new 프로젝트이름  

라라벨 실행하기-  

cd c:\xampp\htdocs\프로젝트이름  
php artisan serve  

![image](https://user-images.githubusercontent.com/75231868/124710408-b5218400-df37-11eb-9122-e64218413570.png)

포트번호 8000으로 인터넷 창에서 localhost:8000 입력

![image](https://user-images.githubusercontent.com/75231868/124710570-eb5f0380-df37-11eb-8e40-39b4256ecb5b.png)

실행되었다면 이런화면이 나온다 종료시에는 cmd창에서 ctrl+c 누르면 종료

### 파일 열기 
파일은 vscode에서 열기로 xampp\htdosc\TeamMatchingv2  
폴더를 열기하면 된다

### css파일 적용법
css파일을 public 밑에 놓은 후 불러올 php파일에서  
link rel="stylesheet" href="/main.css"  
 식으로 불러온다 css이름은 main.css이다.
 <hr>
 
# Day2
(2021/07/08)
## 개발Part

Day1에 만든 기본틀을 이용하여 더욱 자세한 인터페이스 완성  
![image](https://user-images.githubusercontent.com/75231868/124861945-7949f580-dfef-11eb-9ffc-e1b96ae45bf5.png)


기존에는 로그인을 메인에 구현하려 했으나 새로운창으로 로그인이 가능하도록 수정  
![image](https://user-images.githubusercontent.com/75231868/124861822-3be56800-dfef-11eb-89ae-8fb7eb697cf4.png)  

css와 html을 이용하여 메인화면 일부 구현
![image](https://user-images.githubusercontent.com/75231868/124921249-27c35a00-e033-11eb-8c35-7e4ed1e4952a.png)


## 학습Part  
개발전에는 div태그로 레이아웃 부터 잡아주고 시작한다  
margin은 외부여백 padding은 내부여백을 의미한다  
 
margin: 20px 같은 표현은 상하좌우 모두 20px을 의미  
margin: 30px 10px은 상하 30px, 좌우 10px을 의미  
margin: 30px 10px 20px 50px은 위 30px, 오른쪽 10px, 아래 20px, 왼쪽 50px을 의미  
margin: 30px 10px 40px은 위 30px, 좌우 10px, 아래 40px을 의미  

라라벨 기본 로그인 기능 학습 window에 대한 자료가 부족하다 데이터 베이스 연동은 더 찾아보아야 한다  
라우터:페이지간의 이동  
리소시스->뷰:실제 보여지는 php페이지  

로그인페이지와 메인페이지 완성 후 라라벨을 통해 데이터베이스와 페이지간의 이동을 시험해 볼 예정이다  
<hr>

# Day3
(2021/07/09)
## 개발Part  
만든 Header.php를 main.php에 상속  
상속에는 성공했으나 부모가 자식보다 밑에뜨는 현상을 발견  
![image](https://user-images.githubusercontent.com/75231868/125020373-b1b30780-e0b3-11eb-8d8a-a7bad2ac8410.png)  
해결->간단하게 @include('header') 이라고 하면된다 header.blade.php일때  

새로운 메뉴버튼 디자인과 현재 공고를 출력할 테이블 작성  
![image](https://user-images.githubusercontent.com/75231868/125048186-a0c9bc80-e0da-11eb-9ffa-d1853389bc82.png)


## 학습part  
상속  
@extends : 특정 파일의 레이아웃을 상속받는다. (상속받을 php에 작성)  
@yield : 상속한다.(상속할 php에 작성)  
@include :기존 php에서 사용하던 상속 

라라벨을 사용하는 이유를 잘 모르겠어서 라라벨 코리아 사이트에서 라라벨의 장점을 정독  
라라벨을 사용하면 더욱 간단한 코드를 구성할 수 있다는것을 이해  
추후 적용해보며 추가 학습을 해야할 것 같음  

<hr>

# Day4
(2021/07/10)
## 개발Part

버튼과 인터페이스에 Hover효과를 적용하여 마우스 올릴시 반응하게 개발  

문제점  
기본화면에서 밑에 출력 표에 hover하면 표시레이어가 확장되도록 하고싶었으나
![image](https://user-images.githubusercontent.com/75231868/125153513-28710300-e18f-11eb-853c-c4bce2756438.png)
다음 사진과 같이 오른쪽 표가 밑으로 밀리는 문제점 발견  
해결하지 못하여 관련 자료나 도서 검색이 필요함  
![image](https://user-images.githubusercontent.com/75231868/125153534-53f3ed80-e18f-11eb-895e-d91acf251b68.png)
즉 A를 Hover했을때 B자료가 삭제되는 코드를 구현해야한다   
<hr>

# Day5
(2021/07/11)
## 개발Part

로그인 화면과 로그인 기능 구현  
현재는 회원가입과 로그인 로그아웃 기능으로만 구현  
![image](https://user-images.githubusercontent.com/75231868/125184850-f8436600-e25b-11eb-9a06-7e00d2b30659.png)  

라라벨의 자동 구현 시스템을 이용하여 회원관리 프로그램을 구현하였음  

<hr>

# Day6
(2021/07/12)
## 개발Part

회원가입 화면 구현
![image](https://user-images.githubusercontent.com/75231868/125234026-c5ac7280-e31a-11eb-9a3a-b0c4afbd0514.png)

로그인시 네비게이션 바에 출력되는 로그인버튼이 로그아웃 버튼으로 바뀌게 구현  
네비게이션 상단에 로그인한 사용자의 이름과 인사말이 출력되도록 구현  
![image](https://user-images.githubusercontent.com/75231868/125234177-1de37480-e31b-11eb-9e67-95114a7d0bb7.png)  

각종 에러메시지들 한글화 작업  

## 학습part
컨트롤러와 라우트에 대한 이해   
기존 단순히 버튼을 누르면 어느페이지로 이동해라 라고 php구문 안에만 넣었던 탓에 새로운 방식으로 코딩하는데 
아직 익숙하지 않음   
반복적인 연습과 자료,강의를 찾아보며 학습중  
이번주 안에 학습을 마치고 필요한 모든 php파일들을 연결할 예정  

<hr>

# Day7
(2021/07/13)
## 개발Part
내가 직접 나의 팀을 만드는 페이지를 구현  
![image](https://user-images.githubusercontent.com/75231868/125404942-2a86cc00-e3f2-11eb-8782-a207043c9ca8.png)

이곳에 입력한 정보들이 Team 테이블에 현재 시간과 함께 입력된다  

문제점:    
현재 시간이 2시간 정도 차이가 나서 관련 자료를 찾아보아야 한다  
추후 css에서 hover한뒤에 변경사항을 계속 유지할 수 있는 방법도 찾아보아야 한다  


## 학습part

모델은 무겁게 컨트롤러는 가볍게 코딩해야한다  

데이터를 받아 데이터베이스 안에 입력하는방법을 학습하고 개발에 응용하였음  
테이블을 변경 수정할때는  
php artisan migrate:refresh  
이용하면 되지만 테이블의 모든 정보가 사라진다  

데이터베이스 적용하는데 도움이 많이 된 영상  
https://youtu.be/N2GUmRaKqzQ  

라라벨 테이블에 대한 공식홈페이지의 설명  
https://laravel.kr/docs/5.1/quickstart   
오늘 연습으로 컨트롤러,라우트 사용이 어느정도 이해되었지만 꾸준한 연습이 필요해보임  

<hr>

# Day8
(2021/07/14)
## 개발Part  
입력한 정보를 출력해주는 페이지와  
출력된 테이블의 제목을 클릭하면 상세 페이지로 넘어가게 구현  

특별한 조건문 없이 get에서 받은 숫자를 자동으로 테이블의 primary키와 비교하여 출력하는 방식인것 같다  
get문장을 여러 숫자로 바꾸고 문자로 바꾸어도 자동적으로 Team테이블의 id와 비교하는 모습을 볼 수 있었다  

### 문제해결  
get을 전달받고 출력하는 페이지에서 css가 적용이 제대로 안되는 것을 발견  
다른 메뉴들이 제대로 출력되는 것을 보고 include 문제는 아니라고 판단  
![image](https://user-images.githubusercontent.com/75231868/125586575-ee560b04-3242-403e-b046-583fe281e9c4.png)  
css입력부분에 문제가 있다고 판단하여 코드수정  
<link rel="stylesheet" type="text/css" href="/main.css" />  
main.css 앞에 / 를 넣어주니 정상적으로 작동  

팀 모집글 출력페이지 작성 엔터를 입력하지 않으면 내용이 쭉 나와버리는 오류발견 7/15 수정예정  
![image](https://user-images.githubusercontent.com/75231868/125595466-0ccefa7a-570a-4f6a-9fa8-6afa5573816f.png)

## 학습part  
평소 듣던 유튜브 강의가 끝나 이제부터는 홈페이지나 도서를 직접 찾아보며 학습해야 한다  

모델-컨트롤러->라우트(web.php)->뷰

테이블을 출력하는법  
컨트롤러  
public function view(){
    $team = \App\Models\Team::all();
    return view('main',compact('team'));
}  

라우트  
Route::get('/', [App\Http\Controllers\TeamController::class ,'view']);  

블레이드  
 @foreach ($team as $item)  
     {{$item -> title}}    
 @endforeach

테이블을 출력하는 부분을 학습하고 개발단계에 적용  

지금까지 학습하며 느낀정보  

라우트:너가 이 주소로 오면 컨트롤러를 만나게 해줄게 or 선물을 줄게(리턴값)  
컨트롤러:일하는 회사(return view('A',compact('B')); A로 B를 보내줄게) 
뷰:보여지는 결과물  

<hr

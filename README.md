# TeamMatching-v2

# aws를 이용해 서버 여는데 성공 
http://wooeveryteamf-env.eba-zpir8wxz.ap-northeast-2.elasticbeanstalk.com/

### 기존에 만들었던 [TeamMatching](https://github.com/highcowoo/TeamMatching-project)을 더 전문적인 개발도구를 활용하여 최종적으로 서버까지 여는것이 목표임 
### 개발언어는 php사용 프레임워크는 라라벨 사용 매일 라라벨에 대한 학습과 개발을 진행  
### 백엔드와 프론트엔드 전부 도구를 이용하여 직접 개발  
### laravel,phpStorm,Zeplin,mysql,figma,css,php  
### 먼저 프론트앤드 개발 후 백엔드는 Laravel학습이 완료되면 진행  
### 주말에는 간단한 개발 또는 학습 정도만 진행  

 
## 목차  
[Day1](#Day1)-색조합,디자인/라라벨 설치,실행방법  
[Day2](#Day2)-메인화면 디자인/라라벨 기본폴더 학습  
[Day3](#day3)-헤더파일개발,자식에게 상속/블레이드코드 학습    
[Day4](#day4)-hover기능 구현    
[Day5](#day5)-로그인 기능 구현  
[Day6](#day6)-회원가입 기능 구현/컨트롤러와 라우트에 대한 이해  
[Day7](#Day7)-팀을 생성하여 데이터베이스 내에 삽입/데이터베이스 이용방법과 MVC모델에 대한 이해    
[Day8](#Day8)-테이블을 출력구현,get메소드 활용 구현/라라벨의 기본구조MVC에 대해 더 심도있게 학습  
[Day9](#Day9)-메인화면 재 디자인,화면 사이즈에 구애받지 않는 방식으로 메인화면 재설계/라라벨 내에서의 select,update등의 문장 사용법을 학습   
[Day10](#Day10)-줄바꿈 에러해결,하단 레이어 제작,최대 공고출력 수 제한  
[Day11](#Day11)-auth학습,auth폴더 설정  
[Day12](#Day12)-auth추가 학습 인증경로 수정 실패  
[Day13](#Day13)-인증된 사용자만 진입할수 있는 페이지 설정/외래키학습,컨트롤러 라우트 복습 90%이상 이해  
[Day14](#Day14)-신청시스템,App테이블 개발/라라벨에 적용되는 sql 학습  
[Day15](#Day15)-내가 생성한팀 ,신청한팀,내 팀에 지원자들 확인 하는 코드작성  
[Day16](#Day16)-팀 삭제 구현,내가 생성한 팀에는 지원불가설정,users테이블에 번호 오픈카톡링크 추가  
[Day17](#Day17)-데이터 복구/Auth부분 추가학습  
[Day18](#Day18)-모집완료 버튼을 추가해 모집 완료된 팀은 공고게시판에서 삭제/데이터에는 남아있어서 지원자와 생성자는 확인 가능  
[Day19](#Day19)- day18 추가보완  
[Day20](#Day20)-지원취소 기능 개발/메인 디자인 재 변경(버튼배치,count출력)  
[Day21](#Day21)-페이지네이션  
[Day22](#Day22)-배포/서버구축 학습  
[Day23](#Day23)-배포완료  
[Day24](#Day24)-1차 테스트/디자인변경/검색기능추가    
[Day25](#Day25)-서버정리/정크코드 정리
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

팀 모집글 출력페이지 작성 엔터를 입력하지 않으면 내용이 쭉 나와버리는 오류발견 [수정완료](#Day10)
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

<hr>

# Day9
(2021/07/15)
## 개발Part  
레이어들을 화면 크기 변화에도 적합하게 반응할 수 있도록 재설계  
주요 사이트 들을 참조하여 흰색배경에 특징색을 잘 살려 새로 디자인  
![image](https://user-images.githubusercontent.com/75231868/125764041-7471bf71-3438-48e8-add4-dd74bd7ba8a3.png)

게시글 상세보기화면(teaminfo.blade.php)도 크키변화에 적응할 수 있도록 재설계  

### 메인화면 레이아웃 지도  
![image](https://user-images.githubusercontent.com/75231868/125760138-143aefe8-e59b-4039-88fb-98de75ccdedc.png)  
빨강 Naviation.left / 주황 Naviation.right /노랑 searchl / 노랑 안쪽 보이지 않는 레이어 searchsl  
초록 menul / 파랑 menubuttonsl /보라 mainl.imagel / 검정 mainl.annmainl / 회색 annsmalll  

### 문제사항  
hover 효과 사용시 화면이 떨리는 증상 발견(객체의 사이즈가 변하는 hover효과)  
-> 화면밖으로 1px의 테두리가 넘어가 있는것을 수정하자 화면 떨림 사라짐  

로그인 후 메인화면으로 넘어올 때 $team 변수를 받지 못하는 오류 발견  
->라우트에서 메인화면으로 왔을때도 변수를 전달받을 수 있도록 선언  

## 학습part  
테이블 자료로 select update 등을 활용하는 방법을 학습  
sql문장은 쉽지만 라우트와 컨트롤러를 이용해 적용하는 것이 어려웠음  
라우트와 컨트롤러는 지속적인 연습이 필요해 보임  

<hr>

# Day10  
(2021/07/16)
## 개발Part    

### 줄바꿈에러해결  
day8에 해결하지 못했던 자동 줄바꿈을 처리했습니다 이제는 줄바꿈을 하지 않아도 칸수를 넘어가면 자동으로 줄바꿈이 됨  
![image](https://user-images.githubusercontent.com/75231868/125891908-9db5b00a-2d54-4782-aa20-b70c1298f3c3.png)  

하단 레이어 제작(모든 페이지에 header처럼 include해서 사용할 예정)  

로그인시 전 화면으로 돌아가는 코드 추가 LoginController.php 맨 밑줄  

팀,유저 카운트 기능과 홈페이지에 표현되는 공고수가 5개로 제한되게 구현  

## 학습part
인증 라우트는 web.php에 정의되어 있지 않고 Auth::routes(); 로 등록되어 있다. 기본인증 라우트를 확인 하려면 /vendor/laravel/ui/src/AuthRouteMethods.php를 확인하면 된다.  
sql문장을 라라벨에서 다루는 것을 학습  

<hr>


# Day11  
(2021/07/17)
## 개발Part
인증 시스템을 수정   
로그인시 특정화면으로 이동하지 않는 현상 수정  
불필요한 인증요소들 삭제  

## 학습part  
인증 시스템(Auth) 에 대하여 학습  

<hr>

# Day12    
(2021/07/18)
## 개발part  
개발사항 없음  
로그인 후 /home을 /main으로 바꾸려 여러번 시도했지만 실패  
추가 학습을 진행  
## 학습Part  
Day11에 이어 인증 시스템에 대해 학습  
자세한 인증시스템 ex)인증된 사용자만 접근 가능한 페이지 생성 등 을 학습  
Day13에 직접 프로그램에 적용 시켜볼 예정  
적용이 어렵다면 기존 라라벨 회원프로그램을 삭제하고 직접 만들어 볼 예정  
라우트 위치나 컨트롤러 위치등이 개발자가 직접 개발한 프로그램의 위치와는 많이 다른 점을 발견  
라라벨 교재가 도착하여 두권을 병행하여 찾아보며 학습을 진행하였음  

<hr>

# Day13    
(2021/07/19)
## 개발part 
인증(로그인)을 해야만 진입할수 있는 페이지 들을 설정  
alert 가 필요한 부분에 alert 작업  
allteams 테이블이 가운데 정렬이 안되는 문제 해결  
로그아웃 시 로그아웃 되었습니다 라는 alert창 출력후 로그인 창으로 이동하게 설정  
팀 생성 후 allteams로 이동하게 설정  
불필요한 css코드들 삭제  
메인 프레임에 로그인 하지 않았을시 맞춤공고 창이 안뜨도록 설정  
분류에 Mentor 추가  
여러 단순 문제사항 수정(사이즈,깨짐현상)  
7/20부터 매칭시스템 개발 시작 금일은 외래키에 대해 학습    
메인화면 추가 변경  
![image](https://user-images.githubusercontent.com/75231868/126111442-93c9d4d2-3d1a-43e5-a95b-63b81d3d4997.png)
![image](https://user-images.githubusercontent.com/75231868/126111516-97a73644-8214-43b2-ba2b-7d036fb2cbb4.png)

## 학습Part
@if (Route::has('login')) 로그인이 안되었을때  
@else 로그인이 되었을 때 
인증부분 학습 완료  

라우트,컨트롤러 추가학습 90%이상 이해 
라라벨 외래키에 대하여 학습  

html alert yes or no에 대하여 학습 참고자료   
https://jootc.com/p/201807211394



<hr>

# Day14      
(2021/07/20)
## 개발part 
팀을 신청 하는 테이블인 Apps 테이블 생성  
 $table->foreignId('user_id')  
            ->constrained()  
            ->onDelete('cascade');  
 외래키를 사용하여 생성  
 
 완성된 최종 DB구조  
 ![image](https://user-images.githubusercontent.com/75231868/126259355-8a26480f-498e-41ab-883b-ec91669a4c55.png)  
 
 컴포넌트 내에 alert창 삽입  
 원하는 팀에 신청하는 시스템 완성  
 외래키를 적용한 이유는 후에 내가 만든팀 또는 내가 신청한 팀을 조회할때 조금더 유용하기 위함임  
 confirm창을 이용하여 submit 전 한번 더 확인  
 중복 신청을 막는코드 작성  
 buttom 에 깃허브 링크 연결  
 teaminfo 출력창이 가운데 위치 하지 않은 문제 해결

## 학습Part  
행안부 주소 db 사이트  
https://www.juso.go.kr/addrlink/main.do?cPath=99MM  
기존에 user테이블에 데이터를 넣는것 보다 더 빠르고 단순한 insert를 학습하여 app테이블에 적용    
comfirm 창 적용방법 학습  
2주동안 컴포넌트 라우트 부분을 학습한 결과 자유롭게 사용할 수 있게되었고  
라우트 시스템의 편리성을 이해하게됨  

<hr>

# Day15 
(2021/07/21)
## 개발Part  
회원가입,로그인시 /home으로 이동하여 정보들을 못 출력하는 에러발견==>기본 홈을 / 로 설정하여 해결  
내가 지원한 팀 조회 구현  
지원한 팀의 제목을 클릭시 상세내역 나오게 구현  
내가 생성한 팀에서 제목을 클릭시 상세정보와 내 팀에 지원한 인원들의 상세정보를 출력할 수 있도록 구현  

내일 인증부분에서 번호 부분을 추가하여 전화번호도 출력되게 해야함  

## 학습part
RouteServiceProvider.php 에 기본 Home을 지정할수 있는 코드가 있다    
인증부분 학습=>회원가입 후 alert창을 띄우고 싶었으나 실패  
내일 user테이블에 번호 추가를 위해 인증을 추가 학습하며 같이 해결할 예정  

-추후 계획  
회원가입 부분에 번호 추가  
로그인 안했을시 내가 생성한팀 ,신청한팀 진입 금지설정  
공고 완료 누르면 공고 삭제 
전체 시스템 안정화  
<hr>



# Day16  
(2021/07/22)  
## 개발Part  
회원가입 부분에 번호,오픈카톡방 링크 추가  
로그인 안했을시 내가 생성한팀 ,신청한팀 진입 금지설정  
공고 삭제 누르면 공고 삭제  
공고 삭제를 이중장치로 설계 1.내가만든 팀만조회 2.삭제시 현재세션의 로그인정보와 팀생성정보가 다르면 에러표시  
내가생성한 팀에 지원을 금지하는 코드 추가  
채팅을 직접 생성하지 않고 오픈카톡 링크를 이용해 소통(쾌적한 서버 개인정보 유출방지)  
여러 작은에러 해결  

## 학습part  
회원가입 테이블 추가할때  
테이블 마이그레이트/User.php/Controller/validateion.php  
만 수정해 주면 된다  

블레이드 코드 안에는 {{}} 을 사용할 필요가 없다  


추후계획  
teams테이블에 모집이 완료되었는지 아닌지 를 알수있는 속성추가  
모집이 완료되었으면 그 팀에는 지원을 하지 못하게 설정  
공고 수정 개발  
회원 내정보 확인/수정  


<hr>


# Day17 
(2021/07/23)  
## 개발Part
데이터의 일부가 사라져서 깃허브에서 복구작업 진행  
복구완료  
채팅 시스템을 개발 --> 개발중 현재있는 채팅방을 사용하는게 낫다고 판단 //개발중지  
정크파일 삭제  
회원 수정문제에 부딛혀 금일은 학습 위주로 진행  

## 학습Part
블레이드 코드 추가학습  
sql적용방법 학습 여러가지중 프로그램 내에서는 2가지로 함축  
입력 시간이 현재시간과 맞지 않는 현상을 해결하기 위해 학습-- 해결하지 못함  
회원테이블 수정방법 학습  
Auth의 비밀번호 암호화에 대하여 학습  

<hr>

# Day18
(2021/07/24)  
## 개발Part
team데이터 베이스에 end를 추가 end는 모집 완료 여부를 알수 있는 속성  
해당 팀을 생성한 생성자 아이디로 접근하여 내가 생성한팀 페이지에 들어가 모집완료 버튼을 누르면 end 값이 1로 변경  
end값이 1인 팀은 공고에서 제거되며 다른유저들이 지원/확인을 할수 없다  
하지만 생성자와 그 팀에 지원한 지원자는 팀 페이지를 확인할 수 있다  
end값을 이용해 신청자에게 팀의 모집이 완료되었는지 아니면 진행중인지 확인시켜 줄 수 있다  



## 학습Part  
한 페이지 안에 두개의 post문장을 넣는것을 실패하여 버튼을 눌렀을 때 마다 서로 다른 값을 넣어줘서 어떤 버튼을 입력하였는지  
판단하는 코드로 작성  
두개의 post를 이용하는 방법이 있을것 같은데 여러 자료를 찾아봐도 찾을 수 없었음  

<hr>

# Day19
(2021/07/25)  
## 개발Part
내가 생성한 팀 페이지에서 모집이 완료된 페이지를 확인 할 수 있다 하지만 삭제와 완료 버튼은 제거된 화면을 보게된다  
모집이 완료된 팀은 만일의 상황을 대비하여 삭제할 수 없게 코딩하였다  
이미 지원한 팀에는 다시 지원할 수 없게 버튼이 생성되지 않도록 구현하였다  
많은 테스트 진행  


day20 개발사항-  
팀을 신청하고 내가 신청한 팀에 들어가 확인할때 다른페이지로 이동하여 팀 지원 취소/오픈카톡 입장등 새로운 페이지개발  
현재는 단순 출력페이지 사용중(team info)+모집 완료된 팀 확인페이지도 if 문을 사용하여 한 페이지에 구현  
내가 지원한 팀이 삭제되었을때 cascade를 풀면 내가 지원한 팀이 삭제되었다고도 알려줄 수 있을것 같다  

<hr>

# Day20    
(2021/07/26)  
## 개발Part  
로그인을 안한 상태에서 main의 특정 버튼을 눌렀을때 로그인이 필요하다는 alert출력  
팀을 신청하고 내가 신청한 팀에 들어가 확인할때 다른페이지로 이동하여 팀 지원 취소 구현   
팀 생성자가 모집 완료를 누른 팀에 대해서는 지원을 취소할 수 없게 설정  
추가할 만한 기능들을 테스팅을 진행 해보면서 생각  

상단 네비게이션 바에 팀의 종류를 넣으면 다른 페이지에서 불편함이 있어 버튼의 위치를 교체  
count를 회원수,모집중인 팀,매칭된 팀 세가지를 출력  
![image](https://user-images.githubusercontent.com/75231868/126935060-9ca489d9-f0d4-46fc-a121-7dc5da0e682f.png)  


## 학습Part 
데이터 베이스에서 일정 시간이 되면 삭제 하는 기능을 구현하고 싶어서 찾아봤지만  
현재 라라벨에서 구현하는 것 보다 서버 관리시에 mysql편집기를 이용하여 구현하는게 더 편하다고 생각하여 추후에 개발  
공고 삭제시 신청자에게도 삭제되었다고 알려주고 싶어서 cascade제약조건을 해제하고 구현했지만 apps테이블만을 출력하는 방법을 찾지못하여  
추후 계속 학습할 예정  
어느정도 학습이 완료되어 Day21부터는 개발Part에 힘을 더 실을 예정  

day21 개발사항-검색 시스템 개발  
메인화면에 team class 별 버튼을 클릭했을때 해당 클래스의 자료들이 나올 수 있게 개발  
오류해결,안정화  

<hr>

# Day21    
(2021/07/27)  
## 개발Part
게시판 페이지네이션 개발  
계속 오류발생 links가 제대로 출력되지 않음  
![image](https://user-images.githubusercontent.com/75231868/127119160-2a261a08-0395-48e6-bcc8-b65b8f2c1015.png)
-> 페이지네이션 버튼을 라라벨에서 제공하는 것을 사용하지 않고 직접 개발  
![image](https://user-images.githubusercontent.com/75231868/127149810-bd779285-6795-439a-bb12-a5bcf5c9bc70.png)

페이지 네이션이 필요한 모든 페이지에 작성완료  
기존 외래키 주소 호출방식에서 조인 방식으로 바꿈  

## 학습Part
게시판 페이지네이션 학습  
페이지네이션을 테이블에 적용하는것은 쉽지만 위에 사진처럼 짤리면서 적용됨  
오류 해결을 위해 계속 학습  
부트스트랩 적용을 위해 학습  
Join문에 대하여 학습  

<hr>

# Day22    
(2021/07/28)  
## 개발Part
aws서버구축 사이트 자체를 올리는것은 성공/db연동 실패  

## 학습part
라라벨 서버구축 학습  
aws외의 여러가지 서버를 찾아보았지만 aws가 가장 괜찮다고 판단  
mac위주의 설명이라 쉽지않음  
외국 영상들을 찾아서 학습  
elastic beanstalk을 활용하여 개발하기로 결정  
day23 https://youtu.be/ISVaMijczKc
<hr>

# Day23    
(2021/07/29)  
## 개발Part
서버 여는데 성공

방법-aws Elastic Beanstalk 접속  
애플리케이션과 환경 생성  
환경-구성-소프트웨어 편집-문서루트 를 /public 으로 수정  
데이터베이스-편집-아이디:root 비밀번호:1234567890 설정 후  
.env 파일 수정  
DB_HOST=db엔드포인트 입력  
DB_PORT=3306  
DB_DATABASE=  db 정보에서 name 입력  
DB_USERNAME=  사용자이름  
DB_PASSWORD= 비밀번호  

.ebextensions/init.config 파일 생성  

container_commands:  
  01_drop_tables:  
    command:  
      "php artisan migrate:fresh"  

  02_initdb:  
    command:   
      "php artisan migrate"  
      
.ebextensions/Nginx/nginx.conf  파일 생성  
파일은 Woofile안에 있음  

.platform/nginx/conf.d/elasticbeanstalk/laravel.conf 생성  

location / {  
    try_files $uri $uri/ /index.php?$query_string;  
    gzip_static on;  
}  


완료

app컨트롤러를 읽지못해 전부 team컨트롤러로 보내는 작업 
<hr>


# Day24    
(2021/07/30)  
## 개발Part  
1차 테스트
디자인 문제관련-차차 해결할 예정  
휴대폰 번호 박스 따로따로 입력하게 해달라는 의견-추후 수정  
모집인원과 지원자수를 바로 볼수있게 해달라는 의견-추후 수정  
메인색이 붉은색 보다는 녹색이 어울린다는 의견-수렴 수정완료 
글씨체의 가독성이 떨어진다는 의견-수렴 수정완료  
중단 메뉴바가 필요없을것 같다는 의견- 수렴 정정완료 상단으로 배치  

최신 팀을 기존의 테이블 형태 대신 박스형태로 수정  
검색기능 구현  
메인 화면 디자인 재구성  
![image](https://user-images.githubusercontent.com/75231868/127660436-603feef0-b026-4b4d-b48b-3bbca82060d3.png)  
![image](https://user-images.githubusercontent.com/75231868/127660516-08504b42-bb3f-439a-a16d-442de60201bb.png)

aws서버 작동시 css구현 안되는 현상-쿠키삭제  

<hr>

# Day25    
(2021/07/31)  
## 개발Part  
정크코드 정리  
검색시스템 개발 마무리  
검색창에서 페이지네이트를 적용하여도 깨지지 않게 구현  
로고 재 디자인  
@buttom 글씨체 적용  
기존 출력 테이블 대신 박스 형태로 출력하는 방식을 설계  
서버 과금으로 인한 서버정리  

# TeamMatching-v2

### 기존에 만들었던 TeamMatching 을 더 전문적인 개발도구를 활용하여 최종적으로 서버까지 열어 관리 해보는것이 목표  
### 개발언어는 php사용 프레임워크는 라라벨 사용 매일 라라벨에 대한 학습과 개발을 진행  
### 백엔드와 프론트엔드 전부 도구를 이용하여 직접 개발  
### laravel,phpStorm,Zeplin,mysql,figma,css,php  
### 먼저 프론트앤드 개발 후 백엔드는 Laravel학습이 완료되면 진행  

## Day1(2021/07/07)
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
 
## Day2(2021/07/08)
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

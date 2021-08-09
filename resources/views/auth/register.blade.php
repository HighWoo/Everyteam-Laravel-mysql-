@extends('layouts.app')
<script>
    function numberMaxLength(e){
        if(e.value.length > e.maxLength){
            e.value = e.value.slice(0, e.maxLength);
        }
    }
</script>
@section('content')
<link rel="stylesheet" type="text/css" href="login.css" />
<div class="loginmainl">
<div class="loginl register">
    <a class="loginLogo" href="{{ url('/') }}">EveryTeam</a><br>
    <a class="logintext">회원가입</a><br><br>
    <form method="POST" action="{{ route('register') }}">
        @csrf
    <input id="name" type="text" placeholder="이름" class="logintextbox @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
    @error('name')
            <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
         </span>
      @enderror
    <input id="email" type="email" placeholder="이메일" class="logintextbox bottom register @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
    @error('email')
      <span class="invalid-feedback" role="alert">
      <br><strong>{{ $message }}</strong>
     </span>
    @enderror
    <input id="kakao" type="text" placeholder="카카오 오픈카톡 링크(연락수단 입니다)" class="logintextbox bottom register @error('kakao') is-invalid @enderror" name="kakao" value="{{ old('kakao') }}" required autocomplete="phonenum" >
    <br><a class="logintext">[방이름은 본인의 이름/1대1 채팅방으로 생성]</a>
    <a class="logintext howmadekakao" href="{{ url('https://tv.kakao.com/v/390647067') }} "target="_blank">오픈카톡 생성방법</a>
    @error('kakao')
            <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
         </span>
      @enderror
    <input id="phonenum" type="number"  maxlength="11"   placeholder="전화번호(선택공개)" class="logintextbox bottom register @error('phonenum') is-invalid @enderror" name="phonenum" value="{{ old('phonenum') }}" required autocomplete="phonenum" oninput="numberMaxLength(this);">
    @error('phonenum')
            <span class="invalid-feedback" role="alert">
                <br><strong>{{ $message }}</strong>
         </span>
      @enderror
    <input id="password" type="password" placeholder="비밀번호" class="logintextbox bottom register @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
   
    <input id="password-confirm" type="password" placeholder="비밀번호 재입력" class="logintextbox bottom register" name="password_confirmation" required autocomplete="new-password">
    @error('password')
    <span class="invalid-feedback" role="alert">
        <br><strong>{{ $message }}</strong>
    </span>
    @enderror
    
    <button type="submit" class="loginbutton register">
        {{ __('회원가입') }}
    </button>
</form>
</div>
</div>
@endsection
@extends('layouts.app')
<link rel="stylesheet" type="text/css" href="login.css" />
@section('content')
<div class="loginmainl">
<div class="loginl">
    <a class="loginLogo" href="{{ url('/') }}">EveryTeam</a><br>
    <br><br><br><a class="logintext">이메일로그인</a>
    <form method="POST" action="{{ route('login') }}">
        @csrf
    <input id="email" type="email" placeholder="이메일을 입력하세요"class="logintextbox @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
  
    <input id="password" type="password" placeholder="비밀번호를 입력하세요" class="logintextbox bottom @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    @error('email')
    <span class="invalid-feedback" role="alert">
        <br><strong>{{ "$message" }}</strong><br>
    </span>
    @enderror
    <button type="submit" class="loginbutton">
        로그인
    </button>
    <a class="findpass" href="{{ route('register') }}">
         회원가입이 필요하세요?
    </a>
    </form>
</div>
</div>
@endsection

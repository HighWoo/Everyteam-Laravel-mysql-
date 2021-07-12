@extends('layouts.app')
<link rel="stylesheet" type="text/css" href="login.css" />
@section('content')
<div class="loginl">
    <a class="loginLogo" href="{{ url('/') }}">에브리팀</a><br>
    <a class="logintext">간편로그인</a>
    <button type="button" class="easyloginbutton" onclick="/"><img src="/image/instar.png"></button>
    <button type="button" class="easyloginbutton bottom" onclick="/"><img src="/image/google.png"></button>
    <br><br><br><a class="logintext">계정로그인</a>
    <form method="POST" action="{{ route('login') }}">
        @csrf
    <input id="email" type="email" placeholder="이메일을 입력하세요"class="logintextbox @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
  
    <input id="password" type="password" placeholder="비밀번호를 입력하세요" class="logintextbox bottom @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    {{-- @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror --}}
    @error('email')
    <span class="invalid-feedback" role="alert">
        <br><strong>{{ "$message" }}</strong><br>
    </span>
    @enderror


    <a class="findpass" href="{{ route('password.request') }}">
        비밀번호를 잊으셨나요?
    </a>

    <button type="submit" class="loginbutton">
        로그인
    </button>
    {{-- <a class="logintext">처음 방문하시나요?</a> --}}
    <a class="findpass" href="{{ route('register') }}">
         회원가입을 하시겠어요?
    </a>

    </form>
    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Aaaaddress') }}</label>
                                
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
</div>
@endsection

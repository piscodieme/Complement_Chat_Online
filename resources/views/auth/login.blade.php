@extends('layouts.app')

@section('content')
<div class="container bgcolor shadow-lg p-lg-5 col-md-12">
    <div class="row justify-content-center">
        <div class="container mt-lg-5 colorBg login-left col-md-6 col-sm-12 col-xl-6 col-lg-12 col-12">
            <img class="container image-cadre" src="/images/imageLogin.jpg" alt="test"/>
            <a href="/registration"><span class="posText mb-2 mt-2">Create Account</span></a>
            <form method="POST" action="{{ route('login') }}">
             @csrf
                <div  class="form-group container">
                    <input id="phone_number" type="number" placeholder="Phone Number" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus>

                        @error('phone_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div  class="form-group container">
                    <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                </div>
                        

                        <!-- <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> -->

                        
                <div class="container">
                    <button id="button_id" class="btn btn-lg btn-block mt-lg-2 mb-lg-2 bgButton shadow text-white">
                        {{ __('Login') }}
                    </button>

                        @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">
                            <span class="posText mt-2 ">
                                {{ __('Forgot Your Password?') }}
                            </span>
                        </a>
                        @endif
                </div>
                        
            </form>
        </div>
        <!-- left side -->
        <div class="container shadow left-side col-md-6 col-sm-12 col-xl-6 col-lg-12 col-12">
                <div class="textLeft">
                    <h4 class="container mt-5 mb-3 text-white">
                       Bienvenu sur votre appli de chatte sur vos dessins Animés préférés
                    </h4>
                    <i><h5 class="container text-white">
                        Veuillez saissir vos informations de connexion pour commencer à discuter !
                    </h5></i>
                </div>
                <img  class= "wallpaper" src="images/narutoBack.jpg" alt="wallpaper">
            </div>
        </div>
    </div>
</div>
    
@endsection

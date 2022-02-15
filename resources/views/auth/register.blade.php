@extends('layouts.app')

@section('content')
<div class="container bgcolor shadow p-lg-5 col-md-12">
    <div class="row justify-content-center taille">
        <div class="container shadow left-side col-md-6 col-md-offset-6 col-sm-12 col-sm-pull-6 col-xl-6 col-lg-12 col-xs-12">
            <div class="textLeft textInfo shadow">
                <h6 class="container">
                    <span> Bienvenu sur votre application de chatte sur votre déssin Animé préféré NARUTO</span>
                </h6>
            </div>
            <div class="textInfo shadow">
                <h6 class="container">
                   <i> Veuillez saissir vos informations pour créer votre compte !</i>
                </h6>
            </div>
            <div class="row">
                <div class="container col-md-11 mt-3">
                    <img  class= "wallpaper" src="images/minato.jpg" alt="wallpaper">
                </div>
               <!--  <div class="container shadow col-md-12">
                    <img  class= "wallpaper" src="images/kakashi.jpg" alt="wallpaper">
                </div> -->
            </div>
        </div>
        <div  class="container colorBg pt-lg-1 login-left col-md-6 col-md-offset-6 col-sm-12 col-sm-pull-6 col-xl-6 col-lg-12 col-xs-12">
            <img class="container image-cadre" src="/images/imageLogin.jpg" alt="test"/>
            <a href="/login"><span class="posText mb-2 mt-2">I Already have an Account</span></a>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                            <div class="form-group container">
                                <input id="fullname" placeholder="Full Name" type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname" value="{{ old('fullname') }}" required autocomplete="full  name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group container">
                                <input id="phone" placeholder="Phone Number" type="number" class="form-control @error('name') is-invalid @enderror" name="phone_number" value="{{ old('phone') }}" required autocomplete="phone number" autofocus>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group container">
                                <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group container">
                                <input id="passwordRegister" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="container">
                                <button id="button_id_register" type="submit" class="btn btn-lg btn-block mt-lg-2 mb-lg-2 bgButton shadow text-white" disabled>
                                    {{ __('Register') }}
                                </button>
                            </div>

                    </form>
                </div>

        </div>
    </div>
</div>
@endsection

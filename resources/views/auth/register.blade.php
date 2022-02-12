@extends('layouts.app')

@section('content')
<div class="container bgcolor shadow-lg p-lg-5 col-md-12">
    <div class="row justify-content-center">
        <div class="container shadow left-side col-md-6 col-sm-12 col-xl-6 col-lg-12">
            <div class="textLeft">
                <h4 class="container mt-5 mb-3 text-white">
                    Bienvenu sur votre appli de chatte sur vos dessins Animés préférés {{ __('Register') }}
                </h4>
                <i>
                    <h5 class="container text-white">
                        Veuillez saissir vos informations pour créer votre compte !
                    </h5>
                </i>
            </div>
            <div class="container-fluid">
                <img  class= "wallpaper" src="images/wallkim.jpg" alt="wallpaper">
            </div>
        </div>
        <div  class="container mt-lg-2 colorBg mb-lg-2 pt-lg-2 login-left col-md-6 col-sm-12 col-xl-6 col-lg-12">
            <img class="container image-cadre" src="/images/imgreg.jpg" alt="test"/>
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
                                <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="container">
                                <button type="submit" class="btn btn-lg btn-block mt-lg-2 mb-lg-2 bgButton shadow text-white">
                                    {{ __('Register') }}
                                </button>
                            </div>

                    </form>
                </div>

        </div>
    </div>
</div>
@endsection

@extends('layouts.head')

@section('content')
<div class="container bgcolor shadow-lg p-lg-5 col-md-12">
        <div class="row">
            <div class="container shadow left-side col-md-6 col-sm-12 col-xl-6 col-lg-12">
                <div class="textLeft">
                    <h4 class="container mt-5 mb-3 text-white">
                       Bienvenu sur votre appli de chatte sur vos dessins Animés préférés {{ __('Register') }}
                    </h4>
                    <i><h5 class="container text-white">
                        Veuillez saissir vos informations pour créer votre compte !
                    </h5></i>
                </div>
                <img  class= "wallpaper" src="images/narutoBack.jpg" alt="wallpaper">
            </div>
            <div class="container mt-lg-5 colorBg mb-lg-5 pt-lg-3 login-left col-md-6 col-sm-12 col-xl-6 col-lg-12">
                <img class="container image-cadre" src="/images/gaara.jpg" alt="test"/>
                @if($errors->any())
                    @foreach($errors->all() as $err)
                        <li>{{$err}}</li>
                    @endforeach
                @endif
                <a href="/"><span class="posText mb-2 mt-2">I Already have an Account</span></a>
                <form action="_register" method="post">
                    @csrf
                    <div class="form-group container">

                        <input class="form-control" type="text" placeholder="Full Name" name="fullname" value="" required>
                    </div>
                    <div class="form-group container">

                        <input class="form-control" type="email" placeholder="Email" name="email" value="" required>
                    </div>
                    <div class="form-group container">

                        <input class="form-control" type="number" placeholder="Phone Number" name="phone_number" value="" required>
                    </div>

                    <div class="form-group container">

                        <input class="form-control" type="password" name="password" placeholder="Password" value="" required>
                    </div>
                    <div class="container">
                        <button class="btn btn-lg btn-block mt-lg-2 mb-lg-2 bgButton shadow" type="submit"><a href="/" class="text-white">Valider</a></button>
                    </div>
                </form>
            </div>
        </div>
</div>
@endsection

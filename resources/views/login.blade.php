<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Projet</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link
        rel="stylesheet"
        href="css/bootstrap-grid.min.css"
    />
    <link
        rel="stylesheet"
        href="css/bootstrap.min.css"
    />
    <link
        rel="stylesheet"
        href="css/app.css"
    />

</head>
<body>
    <div class="container bgcolor shadow-lg p-lg-5 col-md-12">
        <!-- <h1 class="text-center">Chatter en Ligne</h1> -->
        <div class="row">
            <div class="container mt-lg-5 colorBg mb-lg-5 pt-lg-3 login-left ">
                <img class="container image-cadre" src="/images/imageLogin.jpg" alt="test"/>
                <a href="/registration"><span class="posText mb-2 mt-2">Create Account</span></a>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group container">

                        <input class="form-control" type="number" placeholder="Phone Number" name="telephone" value="" required>
                    </div>

                    <div class="form-group container">

                        <input class="form-control" type="password" name="password" placeholder="Password" value="" required>
                    </div>
                    <a href="#"><span class="posText mt-2 ">Forgot password</span></a>
                    <div class="container">
                        <button class="btn btn-lg btn-block mt-lg-2 mb-lg-2 bgButton shadow" type="submit"><a href="/account" class="text-white">Se Connecter</a></button>
                    </div>
                </form>
            </div>
            <div class="container shadow left-side">
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
</body>
</html>

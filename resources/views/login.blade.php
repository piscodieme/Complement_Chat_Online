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
    <div class="container mt-lg-2 bgcolor shadow-lg mt-lg-5 mb-lg-5 p-lg-5">
        <h1 class="text-center">Chatter en Ligne</h1>
        <div class="row">
            <div class="container mt-lg-5 colorBg mb-lg-5 pt-lg-3 login-left">
                <a href="register.html"><span class="text-warning posText">Create Account</span></a>
                <form action="">
                
                    <div class="form-group container">
                        <label class="mb-lg-2" for="telephone">Phone Number</label>
                        <i class="fas fa-user"></i>
                        <input class="form-control" type="number" name="telephone" value="" required>
                    </div>
                
                    <div class="form-group container">
                        <label class="mb-lg-2" for="password">Password</label>
                        <input class="form-control" type="password" name="password" value="" required>
                    </div>
                    <a href="#"><span class="text-warning posText mt-2 ">Forgot password</span></a>
                    <div class="container">
                        <button class="btn btn-lg btn-block mt-lg-2 mb-lg-2 bgButton" type="submit"><a href="home.html" class="text-white">Connection</a></button>
                    </div>
                </form>
            </div>
            <div class="container shadow left-side">
                
            </div>
        </div>
    </div>
</body>
</html>
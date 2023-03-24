<?php


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <style >
        body{
            background-color: #FFFBE6;
        }
        header{
            background-color: #37966F
        }
        .head{
            font-size: 40px;
            font-family: 'Poppins';
            font-weight: 700;
        }
        .header{
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 25px 13%;
            background: transparent;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 100;
            color: black;

        }
        .navbar a{
            position: relative;
            font-size: 16px;
            color: #fff;
            margin-right: 30px;
            text-decoration: none;
        }
        .navbar a::after{
            content: "";
            position: absolute;
            left: 0;
            width: 100%;
            height: 2px;
            background: #fff;
            bottom: -5px;
            border-radius: 5px;
            transform: translateY(10px);
            opacity: 0;
            transition: .5s ease;
        }
        .navbar a:hover:after{
            transform: translateY(0);
            opacity: 1;
        }
        .under {
          outline: 0;
          border-width: 0 0 2px;
          border-color: #292f36;
          background-color: rgba(185, 228, 201, 0) !important
        }
        .under:focus {
          border-color: #2BAE66;
          
        }
        .btndsgn{
          width: 150px;
          border-radius: 10px;
          border: none;
          background-color: #FD5523 !important; 
          color: white !important;
          font-size: 18px;
          font-family: 'Poppins';
          font-weight: 500;
          transition: none !important;
        }
        ::placeholder{
            font-family: 'Font Awesome 5 Free', 'Lora';
            font-weight: 900;
            color: #292f36;
        }
        .icon{
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            font-size: 24px;
        }
        .fa-solid {
            color: #FD5523;
        }
        .navi{
            font-family: 'Poppins';
            font-weight: 900;
            color: white;
        }
        .text1{
          font-family: 'Poppins';
        }
        .text2{
          font-family: 'Lora';
        }
        .foot{
          font-family: 'Lora';
          color: #FCF6F5;
        }
    </style>
</head>

<body style="">
<header class="p-3 mb-3 border-bottom" style="">
<div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none icon" >
                <i class="fa-solid fa-link"></i>
                </a>
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="navi nav-link px-2 ">Home</a></li>
                    <li><a href="#" class="navi nav-link px-2 ">Portfolio</a></li>
                    <li><a href="#" class="navi nav-link px-2 ">About</a></li>
                    <li><a href="#" class="navi nav-link px-2 ">Contact</a></li>
                    <li><a href="#" class="navi nav-link px-2 ">Help</a></li>
                </ul>

            </div>
        </div>
   </header>
    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
    
        <div class="row align-items-center g-lg-5 py-5">
            <div class="col-lg-7 text-center text-lg-start">
                <h1 class="display-4 fw-bold lh-1 mb-3 text1">Shorten your links with ease</h1>
                <p class="col-lg-10 fs-4 text2">Welcome to our URL shortening system! By signing in to your account, you can easily create short links for your long URLs, track clicks, and manage all your links in one place. So, sign in to your account today and start shortening your links with ease!</p>
            </div>
            <div class="col-md-10 mx-auto col-lg-5" >
                
                <?php
                echo form_open('process/login', 'class=" p-4 p-md-5 border rounded-5" style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5); background-color: rgba(185, 228, 201, 0.5) !important"')
                ?>
                <h2 class="head text-center">LOGIN</h2>
                <div class="mb-3">
                    <input class="form-control under" type="text" name="username" placeholder="&#xf007; Username">
                </div>
                <div class="mb-3">
                    <input class="form-control under" type="password" name="pass" placeholder="&#xf084; Password">
                </div>
                <div class="checkbox mb-3">
                    <label class="text2">
                        <input type="checkbox" " disabled> Remember me
                    </label>
                </div>
                <div class="g-recaptcha" data-sitekey="6LfLxSYlAAAAALPSeYHtzmF_2Ionuxfkc_ygI4fU"></div>
                <br/>
                <button class="w-100 btn btn-lg btndsgn" type="submit" name="login">LOG IN</button>
                <?php echo form_close(); ?>
    </form>
            </div>
        </div>
        <footer class="py-3 my-4" style="color: #FCF6F5">
            <hr>
            <p class="text-center text-muted foot">© 2023 Nicole Borromeo</p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>
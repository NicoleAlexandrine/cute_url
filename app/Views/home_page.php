<?php



?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>cuteurl</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style >
        body{
            background-color: #37966F;
        }
        header{
            background-color: #FFFBE6
        }
        h1{
            color: #FFFBE6
        }
        .icon{
            font-family: 'Font Awesome 5 Free','Poppins';
            font-weight: 900;
            font-size: 24px;
            color: #FD5523;
        }
        .fa-solid {
            color: #FD5523;
        }
        .navi{
            font-family: 'Poppins';
            font-weight: 900;
            color: #37966F !important;
            transition: none !important;
        }
        .btndsgn{
          width: 150px;
          border-radius: 10px;
          border: none;
          background-color: #FD5523 !important; 
          color: white !important;
          font-size: 24px;
          font-family: 'Poppins';
          font-weight: 500;
          transition: none !important;
        }
        .btndsgn2{
          width: 150px;
          border-radius: 10px;
          border-color: #fffbe6 !important ;
          border-width: 2px;
          background-color: #37966F !important; 
          color: #fffbe6 !important;
          font-size: 24px;
          font-family: 'Poppins';
          font-weight: 500;
          transition: none !important;
        }
        .text1{
          font-family: 'Poppins';
        }
        .text2{
          font-family: 'Lora';
        }
    </style>
</head>

<body>
<header class="p-3 mb-3 border-bottom" style="">
<div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none icon" >
                <i class="fa-solid fa-link">cuteurl</i>
                </a>
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
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="<?php echo site_url('assets/img/img1.png') ?>" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3 text1">Experience the magic of short links with CuteURL - the cutest URL shortener out there.</h1>
                <p class="lead text2" style="color: #FFFBE6">Transform your long, complicated URLs into short, cute links in seconds - and share them with the world!</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <a href="<?php echo site_url("login"); ?>" class="btn btndsgn btn-lg px-4 me-md-2">START</a>
                    <a href="<?php echo site_url("login"); ?>" class="btn btndsgn2 btn-lg px-4">LOG IN</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
            </ul>
            <p class="text-center text-muted">© 2023 TrabahoLang, Inc.</p>
        </footer>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>
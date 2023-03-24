<?php


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet'>
    <style>
        body{
            background-color: #FFFBE6;
        }
        header{
            background-color: #37966F
        }
        .icon{
            font-family: 'Font Awesome 5 Free', 'Poppins';
            font-weight: 900;
            font-size: 24px;
            color: #fffbe6;
        }
        .fa-solid {
            color: #fffbe6;
        }
        .navi{
            font-family: 'Poppins';
            font-weight: 900;
            color: #fffbe6 !important;
            ;
        }
        .drop{
            background-color: #37966F !important;
            color: #fffbe6 !important;
            transition: none !important;
        }
        .drop a:hover{
            color: #37966F !important;
        }
        .btn{
          background-color: #FD5523 !important;
          color: white !important;
          font-size: 18px;
          font-weight: 500;
          text-decoration: none;
          transition: none !important;
        }
        .text1{
          font-family: 'Poppins';
        }
        .text2{
          font-family: 'Lora';
        }
        h1{
            font-weight: 900;
        }
        .txturl{
            border-width: 2px;
            border-color: #FD5523;
        }
    </style>
</head>

<body>
    <header class="p-3 mb-3 border-bottom">
        <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none icon" style="color:#ff6392 ">
                <i class="fa-solid fa-link">cuteurl</i>
                </a>
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="navi nav-link px-2 ">Dashboard</a></li>
                    <li><a href="<?php echo site_url('users') ?>" class="navi nav-link px-2">Users</a></li>
                </ul>
                <div class="dropdown text-end">
                    <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="<?php echo "https://i.pravatar.cc/150?u=" . $user['username']; ?>" alt="mdo" width="32" height="32" class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu text-small drop">
                        <li><a class="navi dropdown-item" href="#">Settings</a></li>
                        <li><a class="navi dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="navi dropdown-item" href="<?php echo site_url('logout') ?>">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <h1 class='text1 text-center'>URL Shortener</h1>
        <h5 class='text1 text-center'>Create short memorable links in seconds</h5>
        <?php echo form_open('process/add_url'); ?>
        <div class="input-group mb-3">
            <input type="text" class="text1 txturl form-control form-control-lg" placeholder="Paste long URL and shorten it" name="source_url">
            <button class="btn button" type="submit"><i class="bi-send"></i></button>
        </div>
        <?php echo form_close(); ?>
        <ul>
            <?php
            foreach ($urls as $elem) {
                echo '<li style="font-family: Lora"><a href="' . site_url('cute/' . $elem['custom']) . '" target="_blank" style="font-family: Lora">' . site_url('cute/' . $elem['custom']) . '</a> redirect to <a href="' . $elem['source_url'] . '" target="_blank" style="font-family: Lora">' . $elem['source_url'] . '</a></li>';
            }
            ?>
        </ul>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>
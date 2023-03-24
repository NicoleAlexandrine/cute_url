<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Users</title>
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
        .drop{
            background-color: #37966F !important;
            color: #fffbe6 !important;
            transition: none !important;
        }
        .drop a:hover{
            color: #37966F !important;
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
            font-family: 'Poppins';
        }
        h2{
            font-weight: 900;
            font-family: 'Poppins';
        }
        .foot{
          font-family: 'Lora';
          color: #FCF6F5;
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

    <div class="container col-xl-10 col-xxl-8 px-4 py-1">
        
        <div class="row align-items-center g-lg-5 py-1">
            <h1 class='text1 text-center'>USER ACCESS</h1>
            <div class="col-md-10 mx-auto col-lg-5 py-1" >
                <?php
                echo form_open('process/register_user', 'class=" p-4 p-md-5 border rounded-5" style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5); background-color: rgba(185, 228, 201, 0.5) !important"')
                ?>
                <h2 class="head text-center">NEW USER</h2>
                <div class="mb-3">
                    <input class="form-control under text2" type="text" name="short_name" placeholder="&#xf007; Name">
                </div>
                <div class="mb-3">
                    <input class="form-control under text2" type="text" name="username" placeholder="&#xf007; Username">
                </div>
                <div class="mb-3">
                    <input class="form-control under text2" type="password" name="pass" placeholder="&#xf084; Password">
                </div>
                <div class="mb-3">
                    <input class="form-control under text2" type="password" name="pass2" placeholder="&#xf084; Confirm Password">
                </div>
                <button class="w-100 btn btn-lg btn-primary btndsgn" type="submit">REGISTER</button>
                <?php echo form_close(); ?>
            </div>
            <div class="col-lg-7 text-center text-lg-start">
            <?php

                if (isset($edit_user)) {
                ?>
                    <div class="col-lg-7 text-center text-lg-start py-3">
                        <?php echo form_open('process/update_user', 'class=" p-4 p-md-5 border rounded-5" style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5); background-color: rgba(185, 228, 201, 0.5) !important"') 
                        ?>
                        <h2 class="head text-center">EDIT USER</h2>
                        <input type="hidden" name="id" value="<?php echo $edit_user['id'] ?>" />
                        <div class="form-group row mb-3">
                            <label class ="text1 col-form-label col-sm-4"  for="editLabel">Name</label>
                            <div class="col-sm-8" >
                                <input class="form-control under text2" id="editLabel" type="text" name="short_name" placeholder="&#xf007; Name" value="<?php echo $edit_user['short_name'] ?>">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label class ="text1 col-form-label col-sm-4"  for="editLabel">Username</label>
                            <div class="col-sm-8" >
                                <input class="form-control under text2" id="editLabel" type="text" name="username" placeholder="&#xf007; Username" value="<?php echo $edit_user['username'] ?>">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label class ="text1 col-form-label col-sm-4"  for="editLabel">Password</label>
                            <div class="col-sm-8" >
                                <input class="form-control under text2" id="editLabel" type="text" name="pass" placeholder="&#xf007; Password" >
                            </div>
                        </div>
                        <button type="submit" class="w-100 btn btn-primary btndsgn">SAVE</button>
                        <?php echo form_close(); ?>
                    </div>
                <?php
                }

                ?>
            </div>
            <ul class="py-3">
                    <h2>User List</h2>
                    <?php
                    foreach ($users as $elem) {
                        echo "<li style='font-family: Poppins'><a href='" . site_url('users') . "?user_id=" . $elem['id'] . "' class='btn' style='color: #fffbe6; background-color: #37966F; font-family: Poppins'>Edit</a> <a href='" . site_url('process/delete_user') . "?user_id=" . $elem['id'] . "' class='btn btn-danger' style='font-family: Poppins'>Delete</a> Name: " . $elem['short_name'] . ' Username: ' . $elem['username'] . "</li>";
                    }
                    ?>
                </ul>
        </div>
        <footer class="py-3 my-4" style="color: #FCF6F5">
            <hr>
            <p class="text-center text-muted foot">© 2023 Nicole Borromeo</p>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>
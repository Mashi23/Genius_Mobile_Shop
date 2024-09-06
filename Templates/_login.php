<?php

include 'connection_log.php';

if(isset($_POST['submit'])){
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $email= mysqli_real_escape_string($conn, $_POST['email']);
    $phone_num= mysqli_real_escape_string($conn, $_POST['phone_num']);
    $password= md5($_POST['password']);
    $c_password= md5($_POST['c_password']);

    $select = "SELECT * FROM user WHERE email='$email' && password='$password'";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){
        $row = mysqi_fetch_array($result);
        header ('location:available.php');
    }else{
        $error[] = 'incorrect email or password!';
    }
}
?>

<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <form action="" method="post">
        <?php
        if(isset($error)){
            foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
            };
        };
        ?>
    <!----------------------- Login Container -------------------------->
    <div class="row border rounded-5 p-3 bg-white shadow box-area">
        <!--------------------------- Left Box ----------------------------->
        <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #c19191;">
            <div class="featured-image mb-3">
                <img src="./assets/login1.png" class="img-fluid" style="width: 450px; height: 450px;">
            </div>
            <p class="text-white fs-2 text-center" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Welcome to Genius Mobile Shop</p>
            <small class="text-white text-wrap text-center font-size-16" style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Unlock the Latest in Mobile Technology</small>
        </div>
        <!-------------------- ------ Right Box ---------------------------->

        <div class="col-md-6 right-box">
            <div class="row align-items-center">
                <div class="header-text mb-4">
                    <h2 class="text-center font-rubik">Hello,Again</h2>
                    <p class="text-center font-rubik">Access Your Genius Mobile Account.</p>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control form-control-lg bg-light fs-6 font-rubik" placeholder="Email address">
                </div>
                <div class="input-group mb-1">
                    <input type="password" class="form-control form-control-lg bg-light fs-6 font-rubik" placeholder="Password">
                </div>
                <div class="input-group mb-5 d-flex justify-content-between">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="formCheck">
                        <label for="formCheck" class="form-check-label text-secondary font-rubik"><small>Remember Me</small></label>
                    </div>
                    <div class="forgot font-rubik">
                        <small><a href="#">Forgot Password?</a></small>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <button class="btn btn-lg btn-danger w-100 font-rubik font-size-20">Login</button>
                </div>
                <div class="input-group mb-3">
                    <button class="btn btn-lg btn-light w-100 fs-6 font-rubik"><img src="./assets/icon1.png" style="width:20px" class="me-2 "><small>Login  with Google</small></button>
                </div>
                <div class="row font-rubik">
                    <small>Don't have account? <a href="signup.html">Sign Up</a></small>
                </div>
            </div>
        </div>

    </div>
    </form>

</div>
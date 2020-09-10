<?php
    $showAlert = false;
    $showError = false;
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        include 'partial/_dbconnect.php';
        
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $password = md5($password);
        $cpassword = md5($cpassword);
        $exists = false;
        if(($password == $cpassword) && $exists == false){
            $sql = "INSERT INTO `admin_user` (`email`, `password`) VALUES ('$email', '$password')";
            $result = mysqli_query($conn, $sql);
            if ($result == 1){
                header("location:login.php");
            }
            else{
                $showError = "Password do not match";
            }
        }
    }

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/slow.css">
</head>
<body class="anim text-center" style="padding-top: 180px;padding-left: 300px";
>

        <div class="card" style="width: 18rem;">
        <div class="card-body">
            <!-- <h5 class="card-title">Login</h5> -->
            <h6 class="card-subtitle mb-2 text-muted">Sign Up</h6>
            <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
            <form class="form-signin" method="POST" action="signup.php">
                <!-- <img class="mb-4" src="/docs/4.5/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72"> -->
                <h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>
                <label for="inputEmail" class="sr-only">Email address</label>
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required autofocus>
                <br>
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
                <br>
                <label for="confirmPassword" class="sr-only">Confirm Password</label>
                <input type="password" id="confirmPassword" class="form-control" placeholder="confirm Password" name="cpassword" required>
                <!-- <div class="checkbox mb-3">
                    <label>
                    <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div> -->
                <br>
                <button class="btn btn-lg btn-danger btn-block" type="submit">Sign in</button>
                <!-- <p class="mt-5 mb-3 text-muted">&copy; 2017-2020</p> -->
            </form>
            <a href="login.php" class="card-link">Sign IN</a>
            <!-- <a href="#" class="card-link">Another link</a> -->
        </div>
        </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
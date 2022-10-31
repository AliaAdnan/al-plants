<?php 
require_once('config.php');
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $user_email =$_POST["email"];
    $password = md5($_POST["pass"]);

    $sql="select * from user where user_email = '".$user_email."' AND  user_password = '".$password."' ";

    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);

    if($row["user_type"]=="User"){
        $_SESSION["user_email"]==$user_email;
       header("location:index.php");
    }
   else if($row["user_type"]=="admin"){
    $_SESSION["user_email"]==$user_email;
       header("location:dashboard/category.php");
    
    }
}
?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <!-- CSS only -->
    <link href="dashboard/assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!--My Css -->
</head>

<body>
    <div class="modal modal-signin position-static d-block bg-white py-5" tabindex="-1" role="dialog"
        id="modalSignin">
        <div class="modal-dialog" role="document">
            <div class="modal-content rounded-4 shadow">
                <div class="modal-header p-5 pb-4 border-bottom-0">
                    <!-- <h5 class="modal-title">Modal title</h5> -->
                    <h2 class="fw-bold mb-0">Login</h2>
                </div>
                <div class="modal-body p-5 pt-0">
                    <form class="" action="#" method="POST">
                        <div class="form-floating mb-3">
                            <input type="email" name="email" class="form-control rounded-3" id="floatingInput"
                                placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" name="pass" class="form-control rounded-3" id="floatingPassword"
                                placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Login</button>
                        <hr class="my-4">
                        <p class="">Not a user? <a href="sign_up.php">Sign Up now!</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
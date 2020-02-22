<?php
include("register-php.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
       <link rel="stylesheet" href="style1.css">
        <script src="https://kit.fontawesome.com/ae3a7cebd4.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">

    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-8 col-lg-5 col-xl-4">
                    <form action="#" method= "POST" class="form-div">
                        <div class="text-center">
                            <img class="img img-responisve rounded-circle" src="user.png">
                        </div>
                        <h3 class="text-center">Register</h3>
                        <?php include('errors.php'); ?>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username"  class="form-control form-control-lg" value="<?php echo $username;?>" placeholder="Enter Username">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control form-control-lg" value="<?php echo $email;?>" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control form-control-lg" placeholder="Enter Password">
                        </div>
                        <div class="form-group">
                            <label for="password1">Confirm Password</label>
                            <input type="password" name="password1" class="form-control form-control-lg" placeholder="Confirm Password">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="register-btn" class="btn btn-primary btn-block btn-lg"><i class="fas fa-sign-in-alt"></i>Sign Up</button>
                        </div>
                        <p class="text-center">Already a member? <a href="login.php">Sign In</a></p>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- <div class="body-section">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <form action="register-php.php" method="POST" class="card col-sm-10 col-md-8 col-lg-8 col-xl-7">
                        <img class="img img-responisve rounded-circle text-center" src="user.png">
                        <h1 class=" text-center">Register Form</h1>
                        <div class="form-group row justify-content-center">
                            <label class="col-form-label col-sm-12 col-md-4 col-lg-3 col-xl-2">Username:</label>
                            <div class="col-sm-12 col-md-8 col-lg-8">
                                <input type="text" name="username" class="form-control" placeholder="Enter Username">
                            </div>
                        </div>
                        <div class="form-group row justify-content-center">
                            <label class="col-form-label col-sm-12 col-md-4 col-lg-3 col-xl-2">Email:</label>
                            <div class="col-sm-12 col-md-8 col-lg-8">
                                <input type="email" name="email" class="form-control" placeholder="Enter Email">
                            </div>
                        </div>
                        <div class="form-group row justify-content-center">
                            <label class="col-form-label col-sm-12 col-md-4 col-lg-3 col-xl-2">Password:</label>
                            <div class="col-sm-12 col-md-8 col-lg-8">
                                <input type="password" name="password" class="form-control" placeholder="Enter Password">
                            </div>
                        </div>
                        <div class="form-group row justify-content-center">
                            <label class="col-form-label col-sm-12 col-md-4 col-lg-3 col-xl-2">Confirm Password:</label>
                            <div class="col-sm-12 col-md-8 col-lg-8">
                                <input type="password" name="password1" class="form-control" placeholder="Confirm Password">
                            </div>
                        </div>
                        <div class="form-group row justify-content-center">
                            <div class="col-sm-12 col-md-2"></div>
                            <div class="col-sm-12 col-md-12 col-lg-4">
                                <a href="login.html">Anmelden</a>
                            </div>
                            <div class="col-md-12 col-lg-4">
                                <button type="submit" name="register-btn" class="btn btn-success "><i class="fas fa-sign-in-alt"></i>Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> -->
    </body>
</html>
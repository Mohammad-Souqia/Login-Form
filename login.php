<?php
include("login-php.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/ae3a7cebd4.js"></script>

    </head>
    <body>
        <div class="container-fluid body-section">
            <div class="row justify-content-center">
                <div class="col-sm-6 col-md-5 col-lg-4">
                    <form action="login.php" method="POST" class="card">
                        <img class="img img-responisve rounded-circle text-center" src="user.png">
                        <h1 class=" text-center">Login Form</h1>
                        <?php include('errors.php'); ?>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" value="<?php echo $username;?>" class="form-control" placeholder="Enter Username">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Enter Password">
                        </div>
                        <button type="submit" name="login-btn" class="btn btn-success "><i class="fas fa-sign-in-alt"></i>Login</button>
                        <div class="forgot text-center">
                            You dont have an account?<a href="register.php">Sign up</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
<?php
include ("db.php");
session_start();

$username = "";
$email = "";
$errors = array();

if (isset($_POST['register-btn'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $password1 = mysqli_real_escape_string($conn, $_POST['password1']);
    // $username = $_POST['username'];
    // $email = $_POST['email'];
    // $password = $_POST['password'];
    // $password1 = $_POST['password1'];

    if (empty($username)) {
        array_push($errors,"Username required");
    }
    if (empty($email)) {
        array_push($errors,"Email required");
    }if (empty($password)) {
        array_push($errors,"Password required");
    }
    if ($password !== $password1) {
        array_push($errors,"The two passwords do not match");
    }
    if(isset($_POST['username']) || isset($_POST['email'])) {
        $query = "SELECT * FROM users WHERE username = '$username'";
        $query2 = "SELECT * FROM users WHERE email = '$email'";
        $rslt = mysqli_query($conn, $query);
        $rslt2 = mysqli_query($conn, $query2);
        
        // $row = mysqli_fetch_row($rslt);
        // array_push($errors,"Username/email already exist");
        if (mysqli_num_rows($rslt) > 0) {
            array_push($errors,"Username already exist");
        }
        if(mysqli_num_rows($rslt2) > 0){
            array_push($errors,"Email already exist");
        }
        
    } 
    if (count($errors) === 0) {
        $password = md5($password); 
        $sql = "INSERT INTO users(username, email, password)
         VALUES('$username', '$email', '$password')";
        mysqli_query($conn, $sql);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header("location: home.php");

    }

}
?>
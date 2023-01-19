<?php

if(isset($_SESSION['loggedin'])){
    header('location: admin.php');
    exit();
}

if (isset($_POST['submit'])) {
    $con = mysqli_connect('localhost', 'root');

    mysqli_select_db($con, 'crazy_blog');
    $email = $_POST['email'];
    $password = $_POST['password']; 

    $get_user = " select * from user where email = '$email'";
    $query = mysqli_query($con, $get_user);
    
    if(mysqli_num_rows($query)> 0){
        while($result = mysqli_fetch_assoc($query)){
            if(password_verify($password, $result["password"])){
                if($result['status'] == 'ADMIN'){
                    session_start();
                    $_SESSION['isAdmin'] = true;
                    $_SESSION['loggedin'] = true;

                    header('location: admin.php');
                }
            }else{
                echo "Unautorized";
            }
           
        }
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="images/logo1.png" type="image/x-icon">
    <title>Login - Crazy Blog</title>
</head>

<body>
<section class='my-5 container'>
    <div>
        <h2 class='text-center'>Admin Login</h2>
    </div>

    <div class='w-50 m-auto'>
        <form action="" method="post">
            <div class='form-group mt-4'>
                <label for="">Email Id</label>
                <input class='form-control mt-2' type="email" name='email' autocomplete='off'>
            </div>

            <div class='form-group mt-4'>
                <label for="">Password</label>
                <input class='form-control mt-2' type="password" name='password' autocomplete='off'>
            </div>


            <button name="submit" type='submit' class='btn btn-success mt-5'>Login</button>
        </form>
    </div>
    
</section>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>

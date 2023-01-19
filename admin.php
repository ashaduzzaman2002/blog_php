<?php 

if(!isset($_COOKIE['PHPSESSID'])) {
    header('location: admin_login.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Craxy Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="images/logo1.png" type="image/x-icon">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container">
            <a class="navbar-brand" href="index.php">CRAZY BLOG</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0" style='margin-left: auto;'>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">HOME</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="service.php">SERVICES</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="about.php">ABOUT</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">CONTACT</a>
                    </li>

                </ul>

                <a href="logout.php" class="btn btn-light" style="margin-left: 15px;"><i
                        class="bi bi-box-arrow-in-right"></i></a>

            </div>
        </div>
    </nav>

    <section class="container my-5">
        <div>
            <h2 class="text-center">User Messages</h2>
        </div>

        <div class="mt-5 w-75 m-auto">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Message</th>
                        <th scope="col">Time</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    $con = mysqli_connect('localhost', 'root');

                    mysqli_select_db($con, 'crazy_blog');

                    $select_query = "SELECT * FROM contacts";

                    $query = mysqli_query($con, $select_query);

                while ($result = mysqli_fetch_assoc($query)) {


                    ?> 
        
                    <tr>
                        <th scope="row"><?php echo $result['id'] ?></th>
                        <td><?php echo $result['username'] ?></td>
                        <td><?php echo $result['email'] ?></td>
                        <td><?php echo $result['phone'] ?></td>
                        <td><?php echo $result['message'] ?></td>
                        <td><?php echo $result['time'] ?></td>
                    </tr>

                    <?php
                }
                    ?>
                </tbody>
            </table>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
        crossorigin="anonymous"></script>
</body>

</html>
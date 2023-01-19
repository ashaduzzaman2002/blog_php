<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Craxy Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/logo1.png" type="image/x-icon">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
  <div class="container">
    <a class="navbar-brand" href="index.php">CRAZY BLOG</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
          <a class="nav-link active" href="contact.php">CONTACT</a>
        </li>
        
      </ul>
      
    </div>
  </div>
</nav>

<section class='my-5 container'  style="padding-top: 5rem">
    <div>
        <h2 class='text-center'>Contact Us</h2>
    </div>

    <div class='w-50 m-auto'>
        <form action="userinfo.php" method="post">
            <div class='form-group mt-4'>
                <label for="">Username</label>
                <input class='form-control mt-2' type="text" name='username' autocomplete='off'>
            </div>

            <div class='form-group mt-4'>
                <label for="">Email Id</label>
                <input class='form-control mt-2' type="email" name='email' autocomplete='off'>
            </div>

            <div class='form-group mt-4'>
                <label for="">Phone</label>
                <input class='form-control mt-2' type="number" name='phone' autocomplete='off'>
            </div>

            <div class='form-group mt-4'>
                <label for="">Message</label>
                <textarea class='form-control mt-2' name="message" id="" cols="30" rows="6"></textarea>
            </div>

            <button type='submit' class='btn btn-success mt-5'>Submit</button>
        </form>
    </div>
    
</section>

<footer>
    <p class='p-3 text-center text-light bg-success'>@crazyprogrammer. 2023</p>
</footer>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>
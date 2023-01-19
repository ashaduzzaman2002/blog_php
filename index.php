<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Craxy Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap">
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
          <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
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
      
    </div>
  </div>
</nav>


<div id="carouselExampleCaptions" class="carousel slide carousel-fade">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img style="width: 100%; height: 97vh !important;" src="images/wall3.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img style="width: 100%; height: 97vh !important;" src="images/wall2.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img style="width: 100%; height: 97vh !important;" src="images/wall1.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<section class='my-5 container'>
    <div>
        <h2 class='text-center'>About Us</h2>
    </div>

    <div class='row mt-5'>
        <div class="col-lg-6 col-md-6 col-12">
            <img src="images/wall3.jpeg" alt="" class="img-fluid about-img">
        </div>

        <div class="col-lg-6 col-md-6 col-12">
            <h2 class="display-7">We are Crazy Programmers</h2>
            <p class='py-5' >Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus totam, eius ea obcaecati corporis maiores illo, nihil in, corrupti dolores delectus animi quod! Laborum voluptatum saepe sint obcaecati error omnis.</p>

            <a href="about.php" class='btn btn-success'>Know More</a>
        </div>
    </div>
</section>

<section class='my-5 container'>
    <div>
        <h2 class='text-center'>Our Services</h2>
    </div>

    <div class='d-flex flex-wrap justify-content-evenly'>
            <div class="card box-shadow  mt-5" style="width: 18rem;">
                <img src="images/nakhoda1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-success">View more</a>
                </div>
            </div>

            <div class="card box-shadow  mt-5" style="width: 18rem;">
                <img src="images/stpaul.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-success">View more</a>
                </div>
            </div>

            <div class="card box-shadow  mt-5" style="width: 18rem;">
                <img src="images/tram.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-success">View more</a>
                </div>
            </div>

            <div class="card box-shadow  mt-5" style="width: 18rem;">
                <img src="images/stjohn.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-success">View more</a>
                </div>
            </div>
    </div>
</section>

<section class='my-5 container'>
    <div>
        <h2 class='text-center'>Galrey</h2>
    </div>

    <div class='d-flex flex-wrap justify-content-evenly'>
            <div class="mt-4" style="width: 18rem;">
                <img src="images/biswabangla.jpg" class="card-img-top rounded" alt="...">
            </div>

            <div class="mt-4" style="width: 18rem;">
                <img src="images/dakhsin.jpg" class="card-img-top rounded" alt="...">
            </div>

            <div class="mt-4" style="width: 18rem;">
                <img src="images/bits.jpg" class="card-img-top rounded" alt="...">
            </div>

            <div class="mt-4" style="width: 18rem;">
                <img src="images/esp.jpg" class="card-img-top rounded" alt="...">
            </div>

            <div class="mt-4" style="width: 18rem;">
                <img src="images/ch.jpg" class="card-img-top rounded" alt="...">
            </div>

            <div class="mt-4" style="width: 18rem;">
                <img src="images/hoghly1.jpg" class="card-img-top rounded" alt="...">
            </div>

            <div class="mt-4" style="width: 18rem;">
                <img src="images/howrah2.jpg" class="card-img-top rounded" alt="...">
            </div>

            <div class="mt-4" style="width: 18rem;">
                <img src="images/maidan.jpg" class="card-img-top rounded" alt="...">
            </div>

            <div class="mt-4" style="width: 18rem;">
                <img src="images/nakhoda1.jpg" class="card-img-top rounded" alt="...">
            </div>

            <div class="mt-4" style="width: 18rem;">
                <img src="images/stpaul.jpg" class="card-img-top rounded" alt="...">
            </div>

            <div class="mt-4" style="width: 18rem;">
                <img src="images/tram.jpg" class="card-img-top rounded" alt="...">
            </div>

            <div class="mt-4" style="width: 18rem;">
                <img src="images/stjohn.jpg" class="card-img-top rounded" alt="...">
            </div>

    
    </div>
</section>

<section class='my-5 container'>
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
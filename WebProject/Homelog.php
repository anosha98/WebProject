<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <title>Home Page</title>
  <style>
.fa {
  padding: 15px;
  font-size: 20px;
  text-decoration: none;
  
}

.fa:hover {
    opacity: 0.8;
}

.fa-snapchat-ghost {
  background: #fffc00;
  color: white;
  text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

h3.a{
      font-family: Impact, Charcoal, sans-serif;
      text-align: center;
      margin-top: 5px;
    }
    .nav-link{
  color: black;
  font-size: 26px;
}

body {
  font-family: 'Varela Round', sans-serif;
}
.modal-login {    
  color: #636363;
  width: 350px;
}
.modal-login .modal-content {
  padding: 20px;
  border-radius: 5px;
  border: none;
}
.modal-login .modal-header {
  border-bottom: none;   
  position: relative;
  justify-content: center;
}
.modal-login h4 {
  text-align: center;
  font-size: 26px;
  margin: 30px 0 -15px;
}
.modal-login .form-control:focus {
  border-color: #70c5c0;
}
.modal-login .form-control, .modal-login .btn {
  min-height: 40px;
  border-radius: 3px; 
}
.modal-login .close {
  position: absolute;
  top: -5px;
  right: -5px;
} 
.modal-login .modal-footer {
  background: #ecf0f1;
  border-color: #dee4e7;
  text-align: center;
  justify-content: center;
  margin: 0 -20px -20px;
  border-radius: 5px;
  font-size: 13px;
}
.modal-login .modal-footer a {
  color: #999;
}   
.modal-login .avatar {
  position: absolute;
  margin: 0 auto;
  left: 0;
  right: 0;
  top: -70px;
  width: 95px;
  height: 95px;
  border-radius: 50%;
  z-index: 9;
  background: #60c7c1;
  padding: 15px;
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
}
.modal-login .avatar img {
  width: 100%;
}
.modal-login.modal-dialog {
  margin-top: 80px;
}
.modal-login .btn, .modal-login .btn:active {
  color: #fff;
  border-radius: 4px;
  background: #60c7c1 !important;
  text-decoration: none;
  transition: all 0.4s;
  line-height: normal;
  border: none;
}
.modal-login .btn:hover, .modal-login .btn:focus {
  background: #45aba6 !important;
  outline: none;
}
.trigger-btn {
  display: inline-block;
  margin: 100px auto;
}
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="logo.jpeg" height="80px" width="80px" alt="Logo" style="border-radius: 50%"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<span class="navbar-text" style="margin-left: 1000px" >
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
   <ul class="navbar-nav w-25">
      <li class="nav-item ml-auto active">
        <a class="nav-link" href="#">
          <a href="#" class="fa fa-snapchat-ghost"></a>
        </a>
      </li>
      <li class="nav-item ml-auto active">
        <a class="nav-link" href="#">
          <a href="#" class="fa fa-twitter" style="margin: 0px 5px 0px 5px"></a>
        </a>
      </li>
      <li class="nav-item ml-auto active">
        <a class="nav-link" href="#">
          <a href="#" class="fa fa-instagram"></a>
        </a>
      </li>
       </ul>
  </div>
</span>
</nav>
<div class="container w-50">
<?php
if(isset($_GET['alert'])){?>
  
<div class="alert alert-danger" >
    <h4 style="color: black" class="text-center">Invalid Username OR Password</h4>
  </div>
<?php
}
?>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12  text-right">
            <a href="#myModal" class="btn btn-light" data-toggle="modal">Login</a>
        </div>
    </div>
</div>
<ul class="nav justify-content-center sticky-top" style="background-color: #D8DBD1">
  <li class="nav-item">
    <a class="nav-link active" href="Home.html">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="AboutUs.html">About Us</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="ProductsPage.html">Products</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="ContactUs.html">Contact Us</a>
  </li>
</ul>

<div class="container w-50">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="1.jpeg" alt="First slide" height="550px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="2.jpeg" alt="Second slide" height="550px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="3.jpeg" alt="Third slide" height="550px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="4.jpeg" alt="Fourth slide" height="550px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="5.jpeg" alt="Fifth slide" height="550px">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

<div class="container w-75 pt-4 pb-4">
  <div style="border: 1px solid black; background-color: #F5F0F0">
  <h3 class="a">Graphic Teez are vibes. And we think they are the basis of your wardrobes. </h3>
</br>
  <h5 style="text-align: center;">So here we are for you!</h5>
</div>
</div>

  <div class="container">
    <h1 style="text-align: left;"><i><u>Latest Products</u></i></h1>
    <div class="row my-5">
      <div class="col-sm-4">
        <div class="card">
        <a href="p1.html" target="_blank"><img src="1.jpeg" width="100%" height="330px" alt="Hoodie"></a>

        <div class="card-body text-center">
          <h3 >Sharp Hoodie</h3>
          <div class="card-footer">
          <a href="p1.html" class="btn btn-dark" >Details</a>
          </div>
        </div>  
        </div>
      </div>

            <div class="col-sm-4">
        <div class="card">
        <a href="p2.html" target="_blank"><img src="2.jpeg" width="100%" height="330px" alt="Hoodie"></a>

        <div class="card-body text-center">
          <h3 >Skull Hoodie</h3>
          <div class="card-footer">
          <a href="p2.html" class="btn btn-dark">Details</a>
          </div>
        </div>  
        </div>
      </div>

            <div class="col-sm-4">
        <div class="card">
        <a href="p3.html" target="_blank"><img src="3.jpeg" width="100%" height="330px" alt="Hoodie"></a>

        <div class="card-body text-center">
          <h3 >Gulaboo Hoodie</h3>
          <div class="card-footer">
          <a href="p3.html" class="btn btn-dark">Details</a>
          </div>
        </div>  
        </div>
      </div>
</div>
    </div>
    <div class="text-center">
  <!-- Button HTML (to Trigger Modal) -->
</div>

<!-- Modal HTML -->
<div id="myModal" class="modal fade">
  <div class="modal-dialog modal-login">
    <div class="modal-content">
      <div class="modal-header">
        <div class="avatar">
          <img src="logo.jpeg" alt="Avatar" style="border-radius: 50%;">
        </div>        
        <h4 class="modal-title">Member Login</h4> 
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        <form action="log.php" method="post">
          <div class="form-group">
            <input type="text" class="form-control" name="user" placeholder="Username">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" name="pass" placeholder="Password">
          </div>
          <div class="form-group">  
            <input type="submit" class="btn btn-dark" name="submit" value="Login"> <br>
          </div>
</form>
      </div>
      <div class="modal-footer">
        <a href="#">Forgot Password?</a>
      </div>
    </div>
  </div>
</div>     



<!-- Footer -->
<footer class="page-footer font-small stylish-color-dark pt-1" style="background-color: #60736b;">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-4 mx-auto">

        <!-- Content -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">NEWS</h5>
        <p>Beat the winter blues with Our New Ideas of Winter Collection 2020. Our exotic winter dresses feature warm tones.</p>

      </div>


      <hr class="clearfix w-100 d-md-none">
      <hr class="clearfix w-100 d-md-none">
      <!-- Grid column -->
      <div class="col-md-2 mx-auto">
        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>
        <ul class="list-unstyled">
          <li class="nav-item ml-auto active">
        <a class="nav-link" href="#">
          <a href="#" class="fa fa-snapchat-ghost"></a>
        </a>
      </li>
      <li class="nav-item ml-auto active">
        <a class="nav-link" href="#">
          <a href="#" class="fa fa-twitter" ></a>
        </a>
      </li>
      <li class="nav-item ml-auto active">
        <a class="nav-link" href="#">
          <a href="#" class="fa fa-instagram"></a>
        </a>
      </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <hr>

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright</div>
  <!-- Copyright -->

</footer>
</body>
</html>

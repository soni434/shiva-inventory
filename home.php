<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inv</title>
    <link rel="stylesheet" href="style.css"/>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    .abc{
    margin-right: 257px;
    background-color: dark;
}
.nav{
    color:green;
    font-size: 17px;
    font-family: arial;
    font-weight: bold;
    
}
.nav:hover{
    background-color: #212529;
    color:lightgreen;
}
.logo{
    margin-top:10px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px 2px gray;
}
.logo:hover{
    box-shadow: 1px 5px 10px;
}
.card {
  margin-left: 36px;
}
.com-btn{
  margin-bottom: -39px;
}
.server-btn{
  margin-bottom:-38px;
}
.laptop-btn{
  margin-bottom: -41px;
}
.printer-btn{
  margin-bottom: -60px;
}
.con-us{
  margin-left:5px;
}
.visit-btn{
  width:140px;
}
.submit-btn{
  width:141px;
}
#footer{
  height:auto;
  width:auto;
  background-color:#212529;
  color:white;
  text-align: center;
  font-size: 13px;;
}
.feedback-btn{
  width:161px;
}
.srch{
  margin-left: -252px;
  width: 170px;
}
.link{
  font-size:36px;
  color: black;
  margin-left:580px;
  font-family: arial;
  /* text-decoration: underline; */
}
.new-account-create{
  height:200px;
  width:100%;
  background-color: white;
  border:2px solid white;
  border-radius:5px;
  box-shadow: 0px 0px 10px 2px gray;
}
.new-account-create-btn{
  height:140px;
  width:700px;
  color:black;
  margin-left:355px;
  margin-top:28px;
  font-size: 25px;
  font-family:'Times New Roman';
  box-shadow: 0px 0px 10px 2px gray;
  border-radius:10px;
  flex-direction: center;
  background-color: lightgray;
}
a{
  text-decoration: none;
  color: white;
}
</style>
<body>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand nav" href="#">SAM (Shiva Asset Management)</a>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
          <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse abc " id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active d-flex text-white" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" style="margin-left: 50px" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Update Inventory
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="ho.php">STL Head Office</a></li>
                  <li><a class="dropdown-item" href="#">STL Unit 1</a></li>
                  <li><a class="dropdown-item" href="#">STL Unit 2</a></li>
                  <li><a class="dropdown-item" href="#">YWL</a></li>
                  <li><a class="dropdown-item" href="#">SSYL</a></li>
                  <li><a class="dropdown-item" href="#">HFL</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link visit-btn text-white" style="margin-left: 20px;" href="#">Discard Items</a>
              </li>
              <!-- <li class="nav-item"> -->
                <!-- <a class="nav-link submit-btn text-white" style="margin-left: 10px" href="#">Submit your form</a> -->
              <!-- </li> -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" style="margin-left: 20px" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Reports
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">STL Head Office</a></li>
                  <li><a class="dropdown-item" href="#">STL Unit 1</a></li>
                  <li><a class="dropdown-item" href="#">STL Unit 2</a></li>
                  <li><a class="dropdown-item" href="#">YWL</a></li>
                  <li><a class="dropdown-item" href="#">SSYL</a></li>
                  <li><a class="dropdown-item" href="#">HFL</a></li>
                </ul>
              </li>
              <li class="nav-item" style="margin-left: 25px;">
                <a class="nav-link feedback-btn text-white" style="margin-left: 10px" href="#feedback">Leave your feedback</a>
              </li>
            </ul>
          </div></div>
          <form class="d-flex" role="search">
            <input class="form-control me-2 srch" type="search" placeholder="Search here" aria-label="Search">
            <button class="btn btn-outline-success" type="submit"><a href=login.php>Logout</a></button>
          
          </form>
        </div>
      </nav>
      <div id="carouselExample" style="margin-top:2px" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="001.jpg"class="d-block w-100">
          </div> 
          <div class="carousel-item">
            <img src="10.jpg" style="height:596px; width:539px; margin-left:450px";>
          </div>
          <!-- <div class="carousel-item"> -->
            <!-- <img src="02.jpg" class="d-block w-100"> -->
          <!-- </div> -->
          <!-- <div class="carousel-item"> -->
            <!-- <img src="05.jpg" class="d-block w-100"> -->
          <!-- </div> -->
          <!-- <div class="carousel-item"> -->
            <!-- <img src="06.jpg" class="d-block w-100"> -->
          </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <br><label class="link">Short Links</label><br><br>
<div class="d-flex gap-3">      
      <div class="card logo card" style="height:26rem; width: 18rem; margin-right:35px;">
        <img src="com/computer.jpg" class="card-img-top" alt="logo">
        <div class="card-body">
        <h5 class="card-title">Computers & Desktops</h5>
        <p class="card-text">Click below to Provide DESKTOPS information</p>
        <a href="https://en.wikipedia.org/wiki/Goa" class="btn btn-primary com-btn">Desktop</a>
        </div>
      </div>
      <div class="card logo" style="height:26rem; width: 18rem;margin-right:35px;">
        <img src="com/server.jpg" class="card-img-top" alt="logo">
        <div class="card-body">
        <h5 class="card-title">Servers</h5>
        <p class="card-text">Click below to Provide SERVERS information.</p>
        <a href="https://en.wikipedia.org/wiki/Jaipur" class="btn btn-primary server-btn">Servers</a>
        </div>
      </div>

      <div class="card logo" style="height:26rem; width: 18rem; margin-right:35px;">
        <img src="com/laptop.jpg" class="card-img-top" alt="logo">
        <div class="card-body">
        <h5 class="card-title">Laptops</h5>
        <p class="card-text">Click below to Provide LAPTOPS information</p>
        <a href="https://en.wikipedia.org/wiki/Chandigarh" class="btn btn-primary laptop-btn">Laptops</a>
        </div>
      </div>
      
      <div class="card logo" style="height:26rem; width: 18rem;margin-right:35px;">
        <img src="com/printer.jpg" class="card-img-top" alt="logo">
        <div class="card-body">
        <h5 class="card-title">Printers & Scanners</h5>
        <p class="card-text">Click below to Provide PRINTERS & SCANNERS information</p>
        <a href="https://en.wikipedia.org/wiki/Mumbai" class="btn btn-primary printer-btn">Printers/Scanners</a>
        </div>
      </div>
</div>
<br>
<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Location</th>
      <th scope="col">State</th>
      <th scope="col">Population</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Goa</td>
      <td>Goa is an UT</td>
      <td>300 Cr</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jaipur</td>
      <td>Rajasthan</td>
      <td>1000 Cr</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Chandigarh</td>
      <td>Chandigarh is an UT</td>
      <td>720 Cr</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Mumbai</td>
      <td>Maharashtra</td>
      <td>1200 Cr</td>
      </tr>
  </tbody>
</table><br>

<h3 id="feedback" class="card-title text-primary" style="margin-left:10px;">Leave your feedback</h3>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label" style="margin-left:10px;">Full Name</label>
  <input type="email" class="form-control" style="margin-left:10px; height:35px; width:300px;border:solid gray; 
  border-radius:10px;"  id="exampleFormControlInput1" placeholder="Enter your name">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label" style="margin-left:10px;">Email address</label>
  <input type="email" class="form-control" style="margin-left:10px; height:35px; width:300px;border:solid gray; 
  border-radius:10px;"  id="exampleFormControlInput1" placeholder="name@example.com">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label" style="margin-left:10px;">Contact Number</label>
  <input type="email" class="form-control" style="margin-left:10px; height:35px; width:300px;border:solid gray; 
  border-radius:10px;"  id="exampleFormControlInput1" placeholder="Provide contact Number">
</div>

<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label" style="margin-left:10px;">Comments</label>
  <textarea class="form-control" style="margin-left:10px; height:200px; width:650px; border:solid gray; 
  border-radius:10px;" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>

<input class="btn btn-primary"style="margin-left:10px;" type="submit" value="Submit"><br>
<br><div class="new-account-create">
  <a class="btn btn-primary new-account-create-btn" href="register.php" target="_blank" style="padding-top: 4%;" role="button">Don't have an account? Create Account</a>
  </div>
<br><div class="d-flex card text-bg-dark mb-3 con-us flex-row">
  <div style="max-width: 18rem;">
    <div class="card-header" style="border:2px solid white;">Registered Office</div>
    <div class="card-body">
      <h5 class="card-title"style="font-size: 15px; color:antiquewhite;">Shiva Textiles Limited</h5>
      <p class="card-text" style="font-size: 12px;">4th Floor, Wood Stock Tower, B-35/958, Adarsh Nagar, Ferozpur Road, Opp Waves Mall, Ludhiana-141012, <br>Punjab</p>
      <div class="card text-bg-dark mb-3 con-us" style="max-width: 18rem;">
        </div></div>
  </div>
 
  <div style="max-width: 18rem;">
    <div class="card-header"style="border:2px solid white;">About us</div>
    <div class="card-body">
      <h5 class="card-title" style="font-size: 15px;color:antiquewhite;">Our Brand "Infinite Journey"</h5>
      <p class="card-text" style="font-size: 12px;">At Infinite Journey, we specialize in high-quality garments that combine style, comfort, and durability. As a leading garment manufacturer, we are dedicated to producing fashion-forward clothing for men, women, and children, all crafted with the finest fabrics and expert craftsmanship</p>
    </div>
  </div>

  <div style="max-width: 18rem;">
    <div class="card-header"style="border:2px solid white;">Privacy</div>
    <div class="card-body">
      <h5 class="card-title" style="font-size: 15px;color:antiquewhite;">We value your Privacy</h5>
      <p class="card-text style="style="font-size: 12px;">we value your privacy and are committed to protecting your personal information. We collect information such as your name, email address, and usage data to improve our services and user experience. We do not sell your personal data to third parties but may share it with service providers or as required by law. We implement security measures to safeguard your data, but no method of transmission is 100% secure.</p>
    </div>
  </div>

  <div style="max-width: 18rem;">
    <div class="card-header"style="border:2px solid white;">Terms & Condition</div>
    <div class="card-body">
      <h5 class="card-title" style="font-size: 15px; color: antiquewhite;">Interpretation and Definitions</h5>
      <p class="card-text" style="font-size: 12px;">you agree to comply with and be bound by the following terms and conditions. The content, services, and products provided on this website are for informational purposes only. You are responsible for maintaining the confidentiality of your account and for any activities under your account. We reserve the right to modify, suspend, or terminate access to the website at any time. We are not liable for any direct or indirect damages resulting from your use of this website.</p>
    </div>
  </div>
  <div style="max-width: 18rem;">
    <div class="card-header"style="border:2px solid white;">Contact us</div>
    <div class="card-body">
      <h5 class="card-title" style="font-size: 15px; color:antiquewhite">Working hrs: 09:30 am-06:00 pm</h5>
      <p class="card-text" style="font-size: 12px;">Email: support@shivagroup.info <br>Ph: 0161-5184000.</p>
    </div>
  </div>
</div>
<div id="footer">Copyright © 2024 Rudra ecovation, All rights reserved.</div>
</div><br>
</body>
</html>
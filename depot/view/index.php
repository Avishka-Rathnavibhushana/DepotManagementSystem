<?php


 ?>


<!DOCTYPE html>
<html lang="en">
<head>

<!-- 	<link rel="stylesheet" type="text/css" href="view/css/main.css"> -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/styles.css">

	<title>Welcome SLTB</title>
  <style>
    button{
      background-color: #0da772!important;
    }
    button:hover{
      background-color: #80b280!important;
    }
  </style>
</head>
<body style="display: grid;grid-template-rows: 73.6px 50px 1fr 171.200px;min-height: 100vh;">

  <header style="grid-row: 1;background: #6c757d!important;color: white;font-family: monospace;font-weight: bold;">
    <div class="p-3 mb-2 bg-secondary text-white" style="    margin-bottom: 0px!important;">


      <img style="float:left" src="../view/img/sltb_logo.jpg" width="80" height="45">
      <h2 style="text-align:center;margin-left:-8px;font-weight: bold;">Welcome to Horana Depot</h2>

      <!-- <a href="logout.php" style="float:right;margin-top: 40px;"><i class="fa fa-power-off" aria-hidden="true"></i>Log Out</a>
      <a href="profile.php" style="float:right;margin-top: 40px;"><i class="fa fa-user" aria-hidden="true"></i>My Profile</a>-->


    </div>
  </header>

<nav class="navbar navbar-inverse" style="border-radius: 0px;grid-row: 2;" >
  <div class="container-fluid">

    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li ><a href="todaytimetable.view.php">Today Time Table</a></li>
      <li ><a href="timetable.view.php">Find your way</a></li>
      <li><a href="contactus.php">Contact us</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>

  <main style="grid-row: 3;">

    <!-- Automatic slider -->

    <div class="slideshow-container">

    <div class="mySlides fade">
      <div class="text">1 / 3</div>
      <img class="slideImage" src="img/1.jpg" style="width:100%; height: 100vh;">
    </div>

    <div class="mySlides fade">
      <div class="text">2 / 3</div>
      <img class="slideImage" src="img/2.jpg" style="width:100%; height: 100vh;">
    </div>

    <div class="mySlides fade">
      <div class="text">3 / 3</div>
      <img class="slideImage" src="img/3.jpg" style="width:100%; height: 100vh;">
    </div>

    </div>
    <br>

    <div style="text-align:center">
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
    </div>
    <br>
    <br>
    <br>

    <script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
      setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
    </script>

    <div style="font-size: 20px;">
      <div style="margin: 22px 106.63px 60px 46.6px;">
        <div style="display: flex; background: azure; padding: 15px 30px 15px 30px; border: 1px solid #7a3737; box-shadow: -6px -3px 20px 0px #756a6a;">
          <div style="border-right: 2px solid #1f1f1f; padding: 0px 22px 0px 0px;">
            <p style="width: 600px; padding: 0px 43px; text-align: center;">In a time where people have lots of issues with public trasportation system and public services, our mission is to encourage our passengers to use public transport with our buses very easily with new technology. Anyone can find easily about all the busses and time table of the depot easily n our site.</p>
          </div>
          <div style="width: 100%; text-align: center; margin: auto;">
            <p style="font-size: 36px;">Our Mission</p>
          </div>
        </div>
      </div>

      <div style="margin: 22px 46.63px 25px 106.6px;">
        <div style="display: flex; background: azure; padding: 15px 30px 15px 30px; border: 1px solid #7a3737; box-shadow: -6px -3px 20px 0px #756a6a;">
          <div style="width: 100%; text-align: center; margin: auto;">
            <p style="font-size: 36px;">Our Services</p>
          </div>
          <div style="border-left: 2px solid #1f1f1f; padding: 0px 0px 0px 22px;">
            <p style="width: 500px; padding: 0px 43px; text-align: center;">We Horana depot ensures that people who seeks our sevices will get the services of our depot very easily. In this virtual platform of the Horana bus depot you can see sevices like daily time table and findind a bus time of your desired destination in a second. We are happy to say that you can get our services very easily from this platform.</p>
          </div>
        </div>
      </div>

      <div style="display:flex">
        <div style="margin: 0px 50px 35px 183.6px;    width: 50%;">
          <div style="display: block; background: azure; padding: 15px 30px 15px 30px; border: 1px solid #7a3737; box-shadow: -6px -3px 20px 0px #756a6a;">
            <div style="width: 100%; text-align: center; margin: auto;">
              <p style="font-size: 36px;">Daily Time Table</p>
            </div>
            <div >
              <img src="img/timetable.jpg" style="width:100%; height: 100%; border-top: 2px solid #1f1f1f; padding: 14px 0px 0px 0px;">
            </div>
            <div style="padding: 14px 0px 0px 0px;">
              <p style=" padding: 0px 43px; text-align: center;">Through this page you can find all the available bus destinations and departing times of each bus on the respective day. You can use this page to find any bus departing the depot daily.</p>
            </div>
            <center>
              <button id="btn1" class="btn btn-success">Daily Time Table</button>
            </center>
          </div>
        </div>
        <div style="margin: 0px 98.63px 35px 50px;    width: 50%;">
          <div style="display: block; background: azure; padding: 15px 30px 15px 30px; border: 1px solid #7a3737; box-shadow: -6px -3px 20px 0px #756a6a;">
            <div style="width: 100%; text-align: center; margin: auto;">
              <p style="font-size: 36px;">Find your way</p>
            </div>
            <div >
              <img src="img/search1.png" style="width:100%; height: 100%; border-top: 2px solid #1f1f1f; padding: 14px 0px 0px 0px;">
            </div>
            <div style="padding: 14px 0px 0px 0px;">
              <p style=" padding: 0px 43px; text-align: center;">This page will show you all the bus destinations which will depart from horana depot and their times. Find your way offers you the ability to search your destination and it will propt you all the respective deprting times of the bus related to a certain destination.</p>
            </div>
            <center>
              <button id="btn2" class="btn btn-success" type="submit">Find Your Way</button>
            </center>
          </div>
        </div>
      </div>

      <div style="margin: 22px 106.63px 60px 46.6px;">
        <div style="display: flex; background: azure; padding: 15px 30px 15px 30px; border: 1px solid #7a3737; box-shadow: -6px -3px 20px 0px #756a6a;">
          <div style="border-right: 2px solid #1f1f1f; padding: 0px 22px 0px 0px;">
            <p style="width: 500px; padding: 0px 43px; text-align: center;">There are many ways we can help you. And we are very pleased offer our best service for our passengers. Please leave a comment or if you have any complain please report it using our contact form section.</p>
            <center>
              <button id="btn3" class="btn btn-success" type="submit">Contact Us</button>
            </center>
          </div>
          <div style="width: 100%; text-align: center; margin: auto;">
            <p style="font-size: 36px;">Contact Us</p>
          </div>
        </div>
      </div>

    </div>


  </main>

  <script type="text/javascript">
      document.getElementById("btn1").onclick = function () {
          location.href = "todaytimetable.view.php";
      };
      document.getElementById("btn2").onclick = function () {
          location.href = "timetable.view.php";
      };
      document.getElementById("btn3").onclick = function () {
          location.href = "contactus.php";
      };
  </script>

  <footer style="grid-row: 4;background:#343a40!important;color: white;">
  <div style="position:relative;bottom:0px;width:100%;margin-bottom: 0px!important;" class="p-3 mb-2 bg-dark text-white">
  <div align="center">

  <p style="text-align:center">
  <h2>Sri Lanka Transport Board</h2>
  <h4>Depot of Horana</h4>
  Terms & Conditions<br>
  </p>
  </div>
  </footer>
</body>
</html>

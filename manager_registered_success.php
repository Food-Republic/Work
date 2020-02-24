<html>

  <head>
    <title> Manager Login | Food Republic </title>
  </head>
  <link rel="shortcut icon"  href="icon.png">
  <link rel="shortcut icon" href="images/icon.png">
  <link rel="stylesheet" type = "text/css" href ="css/manager_registered_success.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <body>

  
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
  
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Food Republic</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active" ><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up </a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login </a></li>
          </ul>
        </div>

      </div>
    </nav>

<?php

require 'connection.php';
$conn = Connect();

$fullname = $conn->real_escape_string($_POST['fullname']);
$username = $conn->real_escape_string($_POST['username']);
$email = $conn->real_escape_string($_POST['email']);
$contact = $conn->real_escape_string($_POST['contact']);
$address = $conn->real_escape_string($_POST['address']);
$password = $conn->real_escape_string($_POST['password']);

$query = "INSERT into MANAGER(fullname,username,email,contact,address,password) VALUES('" . $fullname . "','" . $username . "','" . $email . "','" . $contact . "','" . $address ."','" . $password ."')";
$success = $conn->query($query);

if (!$success){
	die("Couldnt enter data: ".$conn->error);
}

$conn->close();

?>


<div class="container">
	<div class="jumbotron" style="text-align: center;">
		<h2> <?php echo "Welcome $fullname!" ?> </h2>
		<h1>Your account has been created.</h1>
		<p>Login Now from <a href="managerlogin.php">HERE</a></p>
	</div>
</div>
<footer class="panel-footer">
    <div class="container">
      <div class="row">
        <section id="hours" class="col-sm-4">
          <span>Hours:</span><br>
          Sun-Thurs: 10:00am - 11:00pm<br>
          Fri: 11:15am - 10:30pm<br>
          Saturday Closed
          <hr class="visible-xs">
        </section>
        <section id="address" class="col-sm-4">
          <span>Address:</span><br>
          Academic Block 6
           Chandigarh University,<br>
           Punjab 140413
          <p>* Delivery area within 3-4 miles, with minimum order of 400 Rs plus 50 Rs charge for all deliveries.</p>
          <hr class="visible-xs">

        </section>
        
        <!-- code for map-->
        <a href="https://goo.gl/maps/Gv4SRaMP1oC1EB7W9" target="_blank">
          <div id="map-tile">
           <iframe class="mapframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3544.33206708391!2d76.573891815212!3d30.766977781625283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ffbe96fcb94fb%3A0x357f4e51ad656ed2!2sFOOD%20REPUBLIC%20(F%2FR)!5e1!3m2!1sen!2sin!4v1582541867467!5m2!1sen!2sin" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            
          </div>
        </a>
    <!--End map-->
    </div>
      </div>
      <div class="text-center">&copy; Copyright Food Republic 2020</div>
      
      <div class="text-center">Made with <span class="glyphicon glyphicon-heart red"></span> </div>
    </div>
  </footer>
    </body>
</html>
<?php
session_start();
?>

<html>

  <head>
    <title> About | Food Republic </title>
   
  </head>
  <link rel="shortcut icon"  href="icon.png">
  <link rel="shortcut icon" href="images/icon.png">
  <link rel="stylesheet" type = "text/css" href ="css/aboutus.css">
  
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 
 
  <body style="background-image: url(../images/background.jpg);
      
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;">

  
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
            <li><a href="index.php">Home</a></li>
            <li class="active"><a href="aboutus.php">About</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
          </ul>

<?php
if(isset($_SESSION['login_user1'])){

?>


          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="myrestaurant.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li><a href="foodlist.php"><span class="glyphicon glyphicon-cutlery"></span> Food Zone </a></li>
            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart 
            (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>)
            </a></li>
            <li><a href="logout_u.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
  <?php        
}
else {

  ?>

<ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Sign Up <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="customersignup.php"> User Sign-up</a></li>
              <li> <a href="managersignup.php"> Manager Sign-up</a></li>
          
            </ul>
            </li>

            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Login <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li> <a href="customerlogin.php"> User Login</a></li>
              <li> <a href="managerlogin.php"> Manager Login</a></li>

            </ul>
            </li>
          </ul>

<?php
}
?>
        </div>

      </div>
    </nav>

    <div class="wide" >

      <div class="headerabout"><h3 style="color: white;text-align: center;font-size: 4rem;">About the food culture in Food Republic</h3>
      </div>
      <h3 style="color: white;text-align: center;">Order food & beverages online from restaurants near & around you.</h3>
          
      <div class="container-aboutus" style="
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    width: 90vw;
    margin: 50px auto;
    flex-flow: row-reverse;
">
              
        <div class="para-aboutus1" style="
    padding: 1.2rem;
    font-size: 2.2rem;
    background-color: yellow;
    opacity:0.8;
    border-radius: 1.2rem;
    margin: 0 20px;
    /* width: 200px; */
">
         We deliver food from your neighborhood local joints, your favorite cafes, luxurious & elite restaurants in your area,
          and also from chains like Dominos, KFC, Burger King, Pizza Hut, FreshMenu, Mc Donald's, Subway,Cafe Coffee Day, Taco Bell, and more. Exciting bit?
          </div> <div class="para-aboutus2" style="
    padding: 1.2rem;
    font-size: 2.2rem;
    background-color: yellow;
    opacity:0.8;
    border-radius: 1.2rem;
    margin: 0 20px;
   
">We at the Food Republic strive to deliver fresh and hygienic delicacies to all the students and faculties who are a part of the Chandigarh University family.
          We work hard week in week out to ensure no stones are left unturned when a particular dish is prepared. Similarly, the developers of the FR website work hard to expand our services to
           all the students.</div>
    </div>
    <div>
    <h2 style="text-align:center">Thanks For Visiting Us!</h2></div>
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
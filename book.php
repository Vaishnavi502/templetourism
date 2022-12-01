<!-- Booking form page with fields to enter details of customized packages -->
<!-- This form calls book_form.php on successful submission -->

<!-- Connect to database via php and display drop down list of packages -->
<?php
   $connection = mysqli_connect('localhost','root','','packages_db');
   if(!$connection){
      die("Connection failed: ".mysqli_connect_error());
   }
   $query = "SELECT name FROM `packages`";

   $result = mysqli_query($connection,$query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">tour.</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/temple1-book.jpg) no-repeat">
   <h1>book now</h1>
</div>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">book your trip!</h1>

   <form action="book_form.php" method="post" class="book-form" onsubmit="return myFunction();">
      <!-- Store details in database and display confirmation window on successful booking -->
      <!-- All fields are required. Also shows customized error message when phone number length is not 10 digits -->      
     <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="name" required="required">
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email" required="required">
         </div>
         <div class="inputBox">
            <span>phone :</span>
            <input type="tel" placeholder="enter your number" name="phone" pattern="[1-9][0-9]{9}" required oninvalid="this.setCustomValidity('Length of phone number must be 10 digits')" oninput="this.setCustomValidity('')"/>
         </div>
         <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="enter your address" name="address" required="required" >
         </div>
         <div class="dropdown">
            <label for="package">Choose a package:</label>
            <select id="package" name="location" required="required">
               <!-- Display drop down menu by reading names of all packages available in database -->
               <?php 
               while($row = mysqli_fetch_row($result)){
               echo "<option value='{$row[0]}'>{$row[0]}</option>";
               }
               ?>
            </select>
         </div>
         <div class="inputBox">
            <span>how many :</span>
            <input type="number" placeholder="number of tourists" name="guests" required="required">
         </div>
         <div class="inputBox">
            <span>arrivals :</span>
            <input type="date" name="arrivals" required="required">
         </div>
         <div class="inputBox">
            <span>leaving :</span>
            <input type="date" name="leaving" required="required"">
         </div>
         <!-- Disables all dates shown in calendar which are prior to today's date -->
         <script>
            window.onload=function(){//from ww  w . j  a  va2s. c  o  m
            var today = new Date().toISOString().split('T')[0];
            document.getElementsByName("leaving")[0].setAttribute('min', today);
            document.getElementsByName("arrivals")[0].setAttribute('min', today);
            }
         </script>
      </div>

      <input type="submit" value="submit" class="btn" name="send">
      </form>
      <script>
         function myFunction(){
               confirm("Booking successful!");
         }
      </script>

</section>

<!-- booking section ends -->

















<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
         <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
         <a href="#"> <i class="fas fa-envelope"></i> templetourism@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> mumbai, india - 400104 </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit"> created by <span>Vandhana-Vaishnavi P-Vaishnavi Anand-Umashankar</span></div>

</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>

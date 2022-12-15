<?php
   // Obtain and store input from book.php into MySQL table 'book_db/book_form'
   // To send automated email, must configure settings of php.ini (C:\xampp\php) and sendmail.ini (C:\xampp\sendmail) on server side
   ini_set('SMTP','ssl://smtp.gmail.com');
   ini_set('smtp_port',587);
   ini_set("sendmail_from","xyz@gmail.com");
   $connection = mysqli_connect('localhost','root','','book_db');

   if(isset($_POST['send']))
   {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $location = $_POST['location'];
      $guests = $_POST['guests'];
      $arrivals = $_POST['arrivals'];
      $leaving = $_POST['leaving'];

      $request = " insert into book_form(name, email, phone, address, location, guests, arrivals, leaving) values('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving') ";
      mysqli_query($connection, $request);

      header('location:book.php');
      
      // Send email to client address with details entered in the form
      $mailto = $_POST['email'];
      $subject = "AUTOMATED MAIL FOR PACKAGE BOOKING CONFIRMATION";
      $body = "Hello {$_POST['name']}, the booking details for Package {$_POST['location']} is\nPhone: {$_POST['phone']}\nArrival date: {$_POST['arrivals']}\nDeparture date: {$_POST['leaving']}\n\nDo not reply to this email. This is auto-generated using SMTP and PHP.\nThank you for using the website created by Vaishnavi P, Vaishnavi Anand, Vandhana V and Umashankar";
      $headers = "From: xyz@gmail.com \nReply-To: ".$mailto."\nX-Mailer: PHP/".phpversion();
      if(mail($mailto,$subject,$body,$headers))
         echo '<p>Confirmation email sent successfully</p>';
      else
         echo '<p>Confirmation email failed</p>';
   }
   else{
      echo 'something went wrong please try again!';
   }

?>

<?php

   $connection = mysqli_connect('localhost','root','','vaccine_db');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $arrivals = $_POST['start'];
      $leaving = $_POST['end'];

      $request = " insert into vaccine_form(name, email, phone, address, start, end) values('$name','$email','$phone','$address', '$arrivals','$leaving') ";
      mysqli_query($connection, $request);

      header('location:get-vaccinated.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>
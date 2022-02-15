<?php

$servername="localhost";
$username="root";
$password="";
$dbname="web1";

$conn= mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
   die("connection faild".mysqli_connect_error());
}
else
{
   $FirstName= $_POST['FirstName'];
   $LastName = $_POST['LastName'];
   $nic = $_POST['nic'];
   $email =$_POST['email'];
   $password = $_POST['password'];
   $passwordRepeat = $_POST['passwordRepeat'];

   $sql ="INSERT INTO singup(FirstName,LastName,nic,email,password,passwordRepeat) VALUES ('$FirstName','$LastName','$nic','$email','$password','$passwordRepeat') ;";

  if(mysqli_query($conn,$sql)==TRUE)
  {
      echo '<script>alert("YOU ARE Register ")</script>';
  }
  else
  {
      echo '<script>alert("Error")</script>';
  }

}


?>
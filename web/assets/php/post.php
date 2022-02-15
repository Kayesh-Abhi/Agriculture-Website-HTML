

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
   $Name= $_POST['name'];
   $Product = $_POST['product'];
   $Price = $_POST['price'];
   $Message =$_POST['message'];
   $Address = $_POST['address'];
   $Pic = $_POST['pic'];

   $sql ="INSERT INTO Post(Name,product,price,message,address,pic) VALUES ('$Name','$Product','$Price','$Message','$Address','$Pic') ;";
   if(mysqli_query($conn,$sql)==TRUE)
   {
      
   }
   else
   {
       echo '<script>alert("Error")</script>';
   }
 


}



?>

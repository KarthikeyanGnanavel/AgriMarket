<?php


$errors = array();
$host='localhost';
	$username='root';
	$pass='';
	$db='amaclone';

	$conn=mysqli_connect($host,$username,$pass,$db);
 
//if(isset($_POST["cropname"])){ $cropname = $_POST["cropname"]; echo "HELLO";}

$cropname = $_POST['cropname'];
$quantity=$_POST['quantity'];
$mail=$_POST['mail'];
$cropprice=$_POST['cropprice'];
$mobile=$_POST['mobile'];
$address1=$_POST['address1'];
$address2=$_POST['address2'];

 //echo $cropname;
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($cropname)) { array_push($errors, "cropname is required"); }
  if (empty($quantity)) { array_push($errors, "quantity is required"); }
  if (empty($mail)) { array_push($errors, "mail is required"); }
  if (empty($cropprice)) { array_push($errors, "price is required"); }
   if (empty($mobile)) { array_push($errors, "mobile is required"); }
   if (empty($address1)) { array_push($errors, "address1 is required"); }
   if (empty($address2)) { array_push($errors, "address2 is required"); }
   
 
 
 $query = "INSERT INTO sell (cropname, quantity, mail, cropprice, mobile, address1, address2) 
  		  VALUES('$cropname','$quantity', '$mail', '$cropprice', '$mobile', '$address1', '$address2')";
	//$sql = "INSERT INTO crops (cropname, quantity, mail,price)
    //VALUES ('".$_POST["cropname"]."','".$_POST["quantity"]."','".$_POST["mail"]."','".$_POST["price"]."')";
  	mysqli_query($conn, $query);
	
	
 header('location: addcrop.html');
	 
?>
<?php


$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'sell');

  // receive all input values from the form
  $cropname = mysqli_real_escape_string($db, $_POST['cropname']);
  $quantity = mysqli_real_escape_string($db, $_POST['quantity']);
  $mail = mysqli_real_escape_string($db, $_POST['mail']);
  $price = mysqli_real_escape_string($db, $_POST['price']);
   $mobile = mysqli_real_escape_string($db, $_POST['mobile']);
    $address1 = mysqli_real_escape_string($db, $_POST['address1']);
	 $address2 = mysqli_real_escape_string($db, $_POST['address2']);
 //echo $cropname;
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($cropname)) { array_push($errors, "cropname is required"); }
  if (empty($quantity)) { array_push($errors, "quantity is required"); }
  if (empty($mail)) { array_push($errors, "mail is required"); }
  if (empty($price)) { array_push($errors, "price is required"); }
   if (empty($mobile)) { array_push($errors, "mobile is required"); }
   if (empty($address1)) { array_push($errors, "address1 is required"); }
   if (empty($address2)) { array_push($errors, "address2 is required"); }
   
 
 
 $query = "INSERT INTO crops (cropname, quantity, mail, price, mobile, address1, address2) 
  		  VALUES('$cropname','$quantity', '$mail', '$price', '$mobile', '$address1', '$address2')";
	//$sql = "INSERT INTO crops (cropname, quantity, mail,price)
    //VALUES ('".$_POST["cropname"]."','".$_POST["quantity"]."','".$_POST["mail"]."','".$_POST["price"]."')";
  	mysqli_query($db, $query);
	
	
  	header('location: ac.html');
	 
?>
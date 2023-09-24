<?php include'connect.php'; ?>

<?php

$user_name = $_POST['username'];
$user_passwd = $_POST['password'];
$sql = "SELECT * FROM table1 WHERE Username='$user_name' AND Password='$user_passwd' LIMIT 1";
 $result = mysqli_query($db,$sql);

 if(mysqli_num_rows($result) == 1){
 	echo "Logged In Successfully";
 	header('location: order.html');
 } else{
 	echo "User_Name or Password Didn't match";
 }
 ?>

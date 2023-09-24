<?php include'connect.php'; ?>

<?php
$user_name = $_POST['username'];
$user_passwd = $_POST['password'];

//Inserting Values 

mysqli_query($db,"INSERT INTO table1 (Username, Password) VALUES ('$user_name','$user_passwd')");

if(mysqli_affected_rows($db) > 0){
	echo "<p> Successfully Registered :)</p>";
	header('location: order.html');
} else{
	echo "Registration Failed :(";
	mysqli_error ($db);

}

?>

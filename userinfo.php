<?php

$con = mysqli_connect('localhost','root');

if($con){
	echo"connection successful";
}
else{
	echo"connection failure";
}
mysqli_select_db($con,'website');

$username = $_POST['username'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$query= " insert into userinfodata (username, email, mobile, comment )values('$username','$email','$mobile','$comment')";
echo "$query";
mysqli_query($con, $query);

header('location:index.php');

mysqli_close($con);
?>
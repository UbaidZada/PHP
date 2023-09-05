<?php  

inculde('connection.php');


if(isset($_POST('update'))){

 $id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$gender = $_POST['gender'];

$updaatequery = "UPDATE `user-records` SET username =  '$username' , email =  '$email' , gender =  '$gender' where  id = '$id' ";

$sql = mysqli_query($connection,$updatequery)

if(!$sql){
echo "query failed";

}else{

header('location:userdata.php');

}

}




?>
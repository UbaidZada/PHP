
<?php          

include('connection.php');

if (isset($_POST['submit'])){

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];


$query = "INSERT INTO `user-records` (`username`, `email`, `password`, `gender`) VALUES ('$username', '$email', '$password', '$gender')";


$result = mysqli_query($connection,$query);


if(!$result){

    echo "Query failed";

}



}


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User registeration</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>





</head>
<body>
    
<div class="container">
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method = "post" class = "form-group">

<label for="username"> Username</label>
<input type="text" name = "username" id = "" class = "form-control"> <br>

<label for="email"> Email</label>
<input type="email" name = "email" id = "" class = "form-control"> <br>

<label for="password"> Password</label>
<input type="password" name = "password" id = "" class = "form-control"> <br>

<label for="gender"> Gender</label>
<input type="text" name = "gender" id = "" class = "form-control"> <br>

<input class = " btn btn-success" type="submit" name = "submit" value = "Register">

    </form>
</div>

</body>
</html>
<?php

include('connection.php');

$user_id = $_GET['id'];

$data = "SELECT * from  `user-records`  where id = `$user_id`";


$result = mysqli_query($connection,$data);

if($result){

if(mysqli_num_rows($result) > 0 ){

    while($rows = mysqli_fetch_assoc($result)){  



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</head>
<body>

<div class="container">
    <form action=" updatedata.php " method = "post" class = "form-group">

<input type="hidden" name = "id" id = "" class = "form-control" value = "<?php echo $row['id'] ?>" > <br>

<label for="username"> Username</label>
<input type="text" name = "username" id = "" class = "form-control" value = "<?php echo $row['username'] ?>" > <br>

<label for="email"> Email</label>
<input type="email" name = "email" id = "" class = "form-control"  value = "<?php echo $row['email'] ?>"> <br>


<label for="gender"> Gender</label>
<input type="text" name = "gender" id = "" class = "form-control"  value = "<?php echo $row['gender'] ?>"> <br>

<input class = " btn btn-success" type="submit" name = "update" value = "Register">

    </form>
</div>



<?php

}

}

}

?>

</body>
</html>
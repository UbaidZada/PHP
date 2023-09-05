<?php

include('connection.php');

$fetchdata = "SELECT * from `user-records` ";

$result = mysqli_query($connection,$fetchdata);

if($result){

if(mysqli_num_rows($result) > 0){



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</head>
<body>
    



<div class="container">


<table class="table">
  <thead class = "table-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>

    </tr>
  </thead>
  <tbody>

  <?php while($rows = mysqli_fetch_assoc($result)){   ?>

    <tr>
      <th scope="row"><?php echo $rows ['id'];?></th>
      <td><?php echo $rows ['username'];?></td>
      <td><?php echo $rows ['email'];?></td>
      <td><?php echo $rows ['gender'];?></td>
      <td><a  class = "btn btn-danger" href="update.php?id=<?php echo $row['id'] ?> "> Update </a></td>
      <td><a class = "btn btn-primary" href="delete.php"> Delete </a></td>
      

    </tr>
   
    <?php

}
?>

  </tbody>
</table>

</div>

<?php


}

}

?>



</body>
</html>
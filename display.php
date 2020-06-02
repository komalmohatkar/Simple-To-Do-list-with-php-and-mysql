<?php include('conn.php');
$sql = " SELECT * FROM todo ";
$result = mysqli_query($conn, $sql);
while($res = mysqli_fetch_array($result)){
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Display Task</title>
  </head>
  <body>
<div class="container">
<center><h2 class="mb-3 mt-3">Display Task</h2></center>
<a href="index.php"><button class="btn btn-primary mb-4">Add Task</button></a>
<div class="table-responsive">
<table class="table table-striped col-lg-8 col-md-8 col-sm-12 col-12">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Task</th>
      <th scope="col">Details</th>
      <th scope="col" colspan='2'> <center>Action</center> </th>
    </tr>
  </thead>
  <tbody>
    <?php include('conn.php');
    $sql = " SELECT * FROM todo ";
    $result = mysqli_query($conn, $sql);
    $num = 0;
    while($res = mysqli_fetch_array($result)){
      $num++ ;
      ?>
      <tr>
      <th scope="row"><?php echo $num; ?></th>
      <td><?php echo $res['task']; ?></td>
      <td><?php echo $res['details']; ?></td>
      <td><a href="update.php/?ids=<?php echo $res['id']; ?>">Edit</a></td>
      <td><a href="delete.php/?ids=<?php echo $res['id']; ?>">Delete</a></td>
    </tr>
<?php
    }
    ?>
   
  </tbody>
</table>
</div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
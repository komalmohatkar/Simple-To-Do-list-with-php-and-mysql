<?php include('conn.php');
$id = $_GET['ids'];
if( isset( $_GET['ids'])) {
    $id = $_GET['ids']; 
} 
$sql = " SELECT * FROM todo WHERE id='$id' ";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
?>
<?php
if(isset($_POST['update'])){
 $task = $_POST['task'];
 $desc = $_POST['desc'];
   if(!empty($task)){
    $update = " UPDATE todo SET task='$task', details='$desc'";
    $results = mysqli_query($conn,$update);
    header("location: ../display.php");
    exit;
   }else{
    echo "<script>alert('please enter some text')</script>";
}
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

    <!-- Style Css  -->

    <link rel="stylesheet" type="text/css" href="http://localhost/git/todo/css/style.css"/>

    <title>Todo List in PHP</title>
  </head>
  <body>
<div>
    <div class="container">
        <div class="col-lg-7 col-lg-7 col-sm-12 col-12" id="todo">
            <h2>Update Task</h2>
            <form method="POST" action="index.php">
                <div class="form-group">
                  <label for="task">Task</label>
                  <input type="text" class="form-control" name="task" id="task"  value="<?php echo $row['task']; ?>">
                </div>
                <div class="form-group">
                    <label for="desc">Description</label>
                    <input type="text" class="form-control" name="desc" id="desc" value="<?php echo $row['details']; ?>">
                  </div>             
               
                <button type="submit" class="btn " name="update">Submit</button>
               <a href="../display.php"> <button type="button" class="btn ml-3">Back</button></a>
              </form>
        </div>
    </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
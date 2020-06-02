<?php include('conn.php'); ?>
<?php include('insert.php'); ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Style Css  -->

    <link rel="stylesheet" href="css/style.css">

    <title>Todo List in PHP</title>
  </head>
  <body>
<div>
    <div class="container">
        <div class="col-lg-7 col-lg-7 col-sm-12 col-12" id="todo">
            <h2>Add Task</h2>
            <form method="POST" action="index.php">
                <div class="form-group">
                  <label for="task">Task</label>
                  <input type="text" class="form-control" name="task" id="task" >
                </div>
                <div class="form-group">
                    <label for="desc">Description</label>
                    <input type="text" class="form-control" name="desc" id="desc">
                  </div>             
               
                <button type="submit" class="btn " name="submit">Submit</button>
               <a href="./display.php"> <button type="button" class="btn ml-3">Display Task</button></a>
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
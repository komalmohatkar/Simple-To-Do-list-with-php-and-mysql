<?php
if(isset($_POST['submit'])){
 $task = $_POST['task'];
 $desc = $_POST['desc'];
if(!empty($task)){
    $insert = "INSERT INTO todo (task, details) VALUES ( '$task', '$desc');";
    $result = mysqli_query($conn,$insert);
    header("location: index.php");
    exit;
}else{
    echo "<script>alert('please enter some text')</script>";
}
 
}
?>
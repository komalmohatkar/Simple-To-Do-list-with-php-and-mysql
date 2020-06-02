<?php 
include('conn.php');
$id = $_GET['ids'];
$delete = " DELETE FROM todo WHERE id=$id ";
$result = mysqli_query($conn,$delete);
header('location: ../display.php');
exit;
?>
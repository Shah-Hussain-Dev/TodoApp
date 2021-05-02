<?php

$con =mysqli_connect('localhost','root','','todo_list');
if(!$con){
  die("Not Connected:"+mysqli_error($con));
}
 $b_id = $_GET['id'];
 $query = mysqli_query($con, "DELETE FROM todo_table WHERE id = '$b_id'");

 if($query){
  $_SESSION['status'] = "Data Inserted Successfully";
  $_SESSION['status_code'] = "success";

     header("location:index.php");
 
 }else{
     echo"Not Deleted";
 }

?>



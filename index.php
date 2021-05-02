<?php

$con =mysqli_connect('localhost','root','','todo_list');
if(!$con){
  die("Not Connected:"+mysqli_error($con));
}
if(isset($_POST['add'])){
  $add = $_POST['todo'];
  $times = $_POST['time'];
  $sql = "INSERT INTO todo_table(todo ,tm)VALUES('$add','$times')";
  $query =mysqli_query($con,$sql);
  
  if($query){
   
      $_SESSION['status'] = "Data Inserted Successfully";
      $_SESSION['status_code'] = "success";
  }else{
      // echo"data not inserted"+mysqli_connect_erro($query);
      $_SESSION['status'] = "Data not Inserted ";
      $_SESSION['status_code'] = "error";
  }
  
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <title>ToDo List App in PHP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="images/notebook.svg" type="image/icon type">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
</head>
<body class="bg-light">
<div class="container-fluid header py-3 text-center shadow">
  <h1 style="color:gold; text-shadow: black !important; " class="animate__animated animate__headShake animate__slow animate__infinite w-100"> <span><img src="images/open-book.svg" height="30"></span> ToDo List App <span> <img src="images/open-book.svg" height="30"></span> </h1>
</div>
<div class="container  my-5">
<h1 class="text-center pb-3 w-100"> <img src="images/book.svg" height="30"></span> My ToDo List <img src="images/notebook.svg" height="30"></span>  </h1>
  <form action="" method="post" class="mx-auto" style="">
  <div class="input-group mb-3 mx-auto">
  <input type="text" id="input" class=" inp form-control  py-2"  placeholder="Your today's ToDo list" aria-label="Your today's ToDo list" aria-describedby="basic-addon2" name="todo" required>
  <div class="input-group-append bb">
    <input type="time" placeholder="Time" class="input-group-text px-4  text-white font-weight-bolder bg-success border-secondary" id="basic-addon2" name="time">
  </div>
  <div class="input-group-append ">
    <button class="input-group-text px-4 bb text-white font-weight-bolder bg-success border-secondary" id="basic-addon2" name="add"> Add <span class="ml-3"> <img src="images/add.svg" height="30"></span> </button>
  </div>
  
</div>

  </div>
  </form>
 

  
 
  <div class="container ">
  <table class="table ">
  <thead>
  <?php
  $sql ="SELECT * FROM todo_table";
  $q = mysqli_query($con,$sql);
  while($data = mysqli_fetch_assoc($q)){
    ?>


  
  
    <button type="button" class="btn  shadow result btn-block py-1" style=" background-color: #a40606 !important;
        background-image: linear-gradient(315deg, #a40606 0%, #d98324 74%)!important;">
    <!-- <span class="badge badge-light  badge-pill float-left mt-2 p-3 "><?php echo $data['id'];?> </span>-->
    
    
    <span class="float-left ml-3 py-2 mt-2 font-weight-bold" style="font-size:20px; color:gold;"><?php echo $data['todo'];?> </span>

  
    <a href="delete.php?id=<?php echo $data['id']; ?>" class="float-right ml-5 py-3" name="delete-data"><i class="fa fa-trash text-warning" style="font-size:30px;"></i>
   </a>
    <a href="update.php?id=<?php echo $data['id']; ?>" class="float-right ml-5 py-3" name="update"><i class="fa fa-edit text-warning" style="font-size:30px;"></i>
   </a>
   <span class="badge badge-light  badge-pill float-right mt-2 p-3 ">Time: <?php echo $data['tm'];?> </span>
</button>
   
 
</div>
      
    </tr>
  <?php }?>
  </tbody>
</table>
  </div>
</div>

<?php if(isset($passmsg)){echo $passmsg;}?>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php
    if(isset($_SESSION['status'])&& $_SESSION['status'] !=''){
?>

<script>
swal({
    title: "<?php echo $_SESSION['status'];?>",
    // text: "You clicked the button!",
    icon: "<?php echo $_SESSION['status_code'];?>",
    button: "Done!",
  });
</script>
<?php
    unset($_SESSION['status']);
    }
    
    ?>

</body>
</html>

<?php
session_start();
if($_SESSION['username']){
}
else{
  header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="This is Admin Panel"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
<link rel="stylesheet" href="assets/css/style.css">
<title>Dashboard</title>
</head>
<body>
<div class="container-fluid">
    <div class="bg-dark pt-3 my-3">
        
        <h1 class=" text-primary text-center"><i class="far fa-user my-50"></i> Dashboard</h1>
    </div>
    <div class="row">
        <div class="col-sm-2 text-primary">
            <p><b>Name</b></p>
          </div>
          <div class="col-sm-4 text-warning">
            <p><b><?php echo $_SESSION['username']?></b></p>
          </div>
          
    </div>
    <div class="row">
        <div class="col-sm-2 text-primary my-3">
        <form method="POST">
              <button name="addpatient" type="submit" class="btn btn-outline-primary btn-block">ADD YOUR USER</button>

          </form>
          </div>
          <div class="col-sm-2 text-primary my-3">
        <form method="POST">
              <button name="logoutbtn" type="submit" class="btn btn-outline-success btn-block">Log Out</button>

          </form>
          </div>
      <?php 
      if(isset($_POST["addpatient"])){
        header("location: add_user.php");
      }
      if(isset($_POST["logoutbtn"])){
        session_destroy();
        header("location: login.php");
        exit;
      }
      ?>
    </div>
    
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>
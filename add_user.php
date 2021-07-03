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
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>ADD USER</title>
</head>
<body>
<div class="container pd-3">
<h2 class="text-primary">Add Your User Name,<p class="text-danger"> @<?php echo $_SESSION['username'] ?></p></h2>
<form method="POST">
    <div class="form-group text-primary">
        <label for="my-input">User Name</label>
        <input id="my-input" class="form-control" type="text" name="pname">
    </div>
    <div class="form-group text-primary">
        <label for="my-input">Mobile Number</label>
        <input id="my-input" class="form-control" type="number" name="mobno">
    </div>
    <div class="column">
        <div class="form-group text-primary">
            <label for="my-input">Date Of Birth</label>
            <input id="my-input" class="form-control" min="1940s-01-02" type="date" name="dob">
        </div>
    </div>
<button type="submit" class="btn btn-outline-primary btn-block">ADD USER</button>
</form>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>
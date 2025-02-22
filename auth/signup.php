<?php
$showerror = false;
$setalert = false;
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  include "connection.php";
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $conpassword = $_POST['conpassword'];

  $existsql = "SELECT * FROM `signup` WHERE email = '$email'";
  $result = mysqli_query($conn , $existsql);
  $row = mysqli_num_rows($result);
  if($row>0){
    $showerror = "Username already exist";
    
  }
  elseif($password != $conpassword){
    $showerror = "Password doesn't matched";
  }
  else{
    if($password == $conpassword){
      $hash = password_hash($password ,PASSWORD_DEFAULT);
      $sql = "INSERT INTO `signup` (`name`, `email`, `password`, `date`) VALUES ('$name', '$email', '$hash', current_timestamp())";
      $result = mysqli_query($conn , $sql);
      if($result){
        $setalert = true;
        header("Location: signup.php?success=1");
        exit;
      }
      
    }
  }
}

$setalert = isset($_GET['success']) ? true : false;
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <?php include "../components/navbar.php" ?>
  <?php
  if($setalert){
    echo'
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Success!</strong> Your account is successfully created, Now you login.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    echo
        '<script>
          setTimeout(function(){
            window.location.href="signup.php";
          },3000)
        </script>';
    
  }

  if($showerror){
    echo'
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Error! </strong>' .$showerror.
      '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    echo
        '<script>
          setTimeout(function(){
            window.location.href="signup.php";
          },3000)
        </script>';
    
  }
  ?>
  <div class="container my-4">
        <h3 style="text-align:center">Fill form for Sign up</h3>
        <form  action="signup.php" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp">

            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3">
                <label for="conpassword" class="form-label">Conform Password</label>
                <input type="password" class="form-control" id="conpassword" name="conpassword">
                <div id="emailHelp" class="form-text">Make sure you password will same..</div>
            </div>
            <button type="submit" class="btn btn-primary">Sign up</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
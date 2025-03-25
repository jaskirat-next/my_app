<?php
$login = false;
$showerror = false;
if($_SERVER['REQUEST_METHOD'] == 'POST'){
   include "connection.php";
   $email = $_POST['email'];
   $password = $_POST['password'];

   $existsql = "SELECT * FROM `signup` WHERE email = '$email'";
   $result = mysqli_query($conn, $existsql);
   $num = mysqli_num_rows($result);
   if($num == 1){
    while($row=mysqli_fetch_assoc($result)){
      if(password_verify($password, $row['password'])){
          $login = true;
          session_start();
          $_SESSION['logedin'] = true;
          $_SESSION['username'] = $username;
          header("Location: ../index.php");
          exit;
      }
      else{
        $showerror = "Invalid password";
      }
    }
   }
   else{
    $showerror = "Invalid credencials";
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<?php include "../components/navbar.php" ?>
  <?php
  if($login){
    echo'
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are loged in.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    
    echo '<script>
            setTimeout(function(){
            window.location.href = "login.php";
            }, 3000)
          </script>';
  }

  if($showerror){
    echo'
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong>'. $showerror .
        '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    
    echo '<script>
            setTimeout(function(){
            window.location.href = "login.php";
            }, 3000)
          </script>';
  }
  ?>
  <div class="container my-4">
<form action = "login.php" method = "POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name = "email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name = "password" class="form-control" id="exampleInputPassword1">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous">
    </script>
</body>
</html>




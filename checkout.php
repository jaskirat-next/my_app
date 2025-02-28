

<!doctype html>
<html lang="en">

<head>
  <?php include "./components/navbar.php" ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="/my_app/sass/check_out.scss" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <div class="main my-5">
    <h3>My cart</h3>
    <div class="container">
      <table class="table">
        <thead class="text-center">
          <tr>
            <th scope="col">Serial No.</th>
            <th scope="col">Item Name</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody class="text-center">
          <?php
    $total=0;
    if(isset($_SESSION['cart'])){
    foreach($_SESSION['cart'] as $key => $value){
        $total=$total+$value['price'];
        $sr = $key+1;
        echo"
            <tr>
            <td>$sr</td>
            <th>$value[item_name]</th>
            <td>$value[price]</td>
            <td><input class='text-center' type='number' value='$value[quantity]' min='1' max='10'/></td>
            <td>
            <form action='manage_cart.php' method='POST'>
            <button class='btn btn-sm btn-outline-danger' name='removeItem'>REMOVE</button>
            <input type='hidden' name='item_Name' value='$value[item_name]' />
            </form>
            </td>
            </tr>
            ";

    }
    }
    ?>
        </tbody>
      </table>

      <div class="total col-lg-3">
        <div class="total_content">
          <h4>Total:</h4>
          <h5>
            <?php echo $total ?>
          </h5>
          <br>
          <form>
            <div class="radio">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
              <label class="form-check-label" for="flexRadioDefault1">
                Make Payment Online
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
              <label class="form-check-label" for="flexRadioDefault2">
                Cash on Delivery
              </label>
            </div>
            </div>
            <button class="btn btn-primary btn-block">Make Purchase</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>
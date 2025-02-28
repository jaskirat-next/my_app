<?php
session_start();
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['addCart'])){
        if(isset($_SESSION['cart'])){
            $anyitem = array_column($_SESSION['cart'],'item_name');
            if(in_array($_POST['product_title'],$anyitem)){
                echo "<script>
                        alert('Item already added');
                        window.location.href='productlist.php';
                      </script>";
            }
            else{
            $count = count($_SESSION['cart']);
            $_SESSION['cart'][$count]=array('item_name'=>$_POST['product_title'], 'price'=>$_POST['price'], 'quantity'=>1);
            echo "<script>
                        alert('Item added');
                        window.location.href='productlist.php';
                      </script>";
            }
        }
        else{
            $_SESSION['cart'][0]=array('item_name'=>$_POST['product_title'], 'price'=>$_POST['price'], 'quantity'=>1);
            echo "<script>
                        alert('Item added');
                        window.location.href='productlist.php';
                      </script>";
        }
    }
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (isset($_POST['removeItem'])) {
            foreach ($_SESSION['cart'] as $key => $value) {
                if ($value['item_name'] == $_POST['item_Name']) {
                    unset($_SESSION['cart'][$key]);
                    $_SESSION['cart'] = array_values($_SESSION['cart']); // Re-index array
                    echo "<script>
                            alert('Item Removed');
                            window.location.href='checkout.php';
                          </script>";
                    exit(); // Stop further execution
                }
            }
        }
    }
}
?>
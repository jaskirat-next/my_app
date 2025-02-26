<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Checkout</h2>
        
        <!-- Cart Summary -->
        <div class="card p-3 mb-3">
            <h4>Cart Summary</h4>
            <ul id="cart-items" class="list-group mb-3">
                <!-- Items will be added dynamically -->
            </ul>
            <h5>Total: Rs. <span id="total-price">0</span></h5>
        </div>
        
        <!-- Billing Details -->
        <div class="card p-3 mb-3">
            <h4>Billing Details</h4>
            <form id="checkout-form">
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <textarea class="form-control" id="address" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Proceed to Payment</button>
            </form>
        </div>
    </div>
    
    <script>
        let cart = [
            { name: "Product 1", price: 500 },
            { name: "Product 2", price: 300 }
        ];

        function displayCart() {
            let cartList = document.getElementById("cart-items");
            let totalPrice = document.getElementById("total-price");
            cartList.innerHTML = "";
            let total = 0;

            cart.forEach(item => {
                cartList.innerHTML += `<li class='list-group-item'>${item.name} - Rs. ${item.price}</li>`;
                total += item.price;
            });
            totalPrice.innerText = total;
        }
        
        document.getElementById("checkout-form").addEventListener("submit", function(event) {
            event.preventDefault();
            alert("Order placed successfully!");
        });
        
        displayCart();
    </script>
</body>
</html>

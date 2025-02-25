<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="/my_app/sass/product.scss">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php include  "./components/navbar.php" ?>
    <h2>Our Products</h2>
    <div class="container">
        <div class="filterbox">
            <h3>Categories</h3>

            <div class="categoryList">

            </div>
        </div>
        <div class="products">


        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
<script>
    let productDiv = document.querySelector('.products');
    let categoryDiv = document.querySelector('.categoryList');
    let alcat = [];
    let displayProduct = async (allchechkcat=[]) => {
        productDiv.innerHTML = '';
        categoryDiv.innerHTML = '';
        let product = await fetch('https://fakestoreapi.com/products');
        let finalProduct = await product.json();
        finalProduct.forEach(element => {
            if (!alcat.includes(element.category)) {
                categoryDiv.innerHTML += `<label for="">
                    <input type="checkbox" id="cat" onclick='categoryFliter()' value="${element.category}"> ${element.category}
                </label>`;
                alcat.push(element.category);
            }

            if(allchechkcat.length==0){
                allchechkcat=alcat;
            }
            if(allchechkcat.includes(element.category)){
            productDiv.innerHTML += `<div class="productItem">
                <div class="img_area">
                    <img src="${element.image}" alt="product">
                </div>
                <div class="content">
                    <h4>${element.category}</h4>
                    <p>Price Rs. ${element.price} | ${element.rating.rate}</p>
                    <h3>${element.title}</h3>
                </div>
            </div>`
            }
        });
    }

   
    let categoryFliter=()=>{
        let selectedCategories = [...document.querySelectorAll(".categoryCheckbox:checked")].map(cb => cb.value);
        displayProduct(selectedCategories);
}
displayProduct();
</script>

</html>
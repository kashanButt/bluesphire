<?php 
    $pageTitle = "Checkout";
    include "../components/header.php";
?>
    <div id="content">
        <div id="checkout">
            <div id="heading">
                <div class="product"></div>
                <div class="productQuantity">
                    <h3>Quantity</h3>
                </div>
                <div class="price">
                    <h3>Total</h3>
                </div>
            </div>
            <div id="productContent">
                <div class="product">
                    <img src="../img/01.HomeFlashDealsSliderDemoIMG.jpg" alt="">
                </div>
                <div class="productQuantity">
                    <div id="counterBtn">
                        <button class="remove">-</button>
                        <p class="counter">0</p>
                        <button class="add">+</button>
                    </div>
                </div>
                <div class="price">
                    <p>$<span id="price">25</span></p>
                </div>
            </div>
            <div id="total">
                <div class="content">
                    <p>$<span id="totalPrice">40</span></p>
                </div>
            </div>
        </div>
    </div>
<?php include "../components/footer.php"; ?>
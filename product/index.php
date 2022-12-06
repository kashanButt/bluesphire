<?php
    $pageTitle = "Product";
    include "../components/header.php";
?>
<!-- Sidebar -->
<div id="content">
    <div id="productDetails">
        <div id="productSlider">
            <div class="productMainSlider">
                
            </div>
            <div class="productSecondSlider">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <img src="../img/01.HomeFlashDealsSliderDemoIMG.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div id="productInfo">
            <h1>Product Name</h1>
            <h2>79$</h2>
            <div id="info">
                <div class="sku">
                    <div class="heading">
                        <p>SKU</p>
                    </div>
                    <div class="content">
                        <p>Demo SKU</p>
                    </div>
                </div>
                <div class="category">
                    <div class="heading">
                        <p>Category</p>
                    </div>
                    <div class="content">
                        <p>Demo Category</p>
                    </div>
                </div>
                <div class="tags">
                    <div class="heading">
                        <p>Tags</p>
                    </div>
                    <div class="content">
                        <p>Demo Tags</p>
                    </div>
                </div>
                <div class="size">
                    <div class="heading">
                        <p>Size</p>
                    </div>
                    <div class="content">
                        <p>Demo Size</p>
                    </div>
                </div>
                <div class="quantity">
                    <div class="heading">
                        <p>Quantity</p>
                    </div>
                    <div class="content">
                        <p>Demo Quantity</p>
                    </div>
                </div>
            </div>
            <div id="productBtns">
                <button>BUY NOW</button>
                <button><i class="fa-solid fa-cart-shopping"></i> ADD TO CART</button>
            </div>
        </div>
    </div>
    <div id="productDescription">
        <div class="heading">
            <p>Description</p>
        </div>
        <hr>
        <div class="content">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, architecto? Velit veritatis assumenda aut nulla. Alias, corrupti aliquid? Iusto dignissimos magni quia suscipit aperiam error corrupti ipsam sapiente tempora ad?</p>
        </div>
    </div>
</div>
<!-- Sidebar -->
<?php include "../components/footer.php"; ?>
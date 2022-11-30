<?php
    $pageTitle = "Collection";
    include "../components/header.php";
?>
<!-- Sidebar -->
<div id="collectionContent">
    <div id="sidebar">
        <h3>Sort By</h3>
        <h4>Price</h4>
        <input type="text" name="lowerPrice" id="lowerPrice" placeholder="From"><br>
        <input type="text" name="upperPrice" id="upperPrice" placeholder="To">

        <h4>Color</h4>
        <div class="colorOptions">
            <input type="radio" name="colorRed" id="colorRed"><span>Red</span><br>
            <input type="radio" name="colorBlack" id="colorBlack"><span>Black</span><br>
            <input type="radio" name="colorWhite" id="colorWhite"><span>White</span><br>
            <input type="radio" name="colorBlue" id="colorBlue"><span>Blue</span><br>
            <input type="radio" name="colorYellow" id="colorYellow"><span>Yellow</span><br>
            <input type="radio" name="colorGreen" id="colorGreen"><span>Green</span><br>
            <input type="radio" name="colorOrange" id="colorOrange"><span>Orange</span><br>
            <input type="radio" name="colorPurple" id="colorPurple"><span>Purple</span>
        </div>

        <h4>Size</h4>
        <div class="sizeOptions">
            <input type="radio" name="sizeXS" id="sizeXSmall"><span>XS</span><br>
            <input type="radio" name="sizeSmall" id="sizeSmall"><span>Small</span><br>
            <input type="radio" name="sizeMedium" id="sizeMedium"><span>Medium</span><br>
            <input type="radio" name="sizeLarge" id="sizeLarge"><span>Large</span><br>
            <input type="radio" name="colorXLarge" id="colorXLarge"><span>XL</span>
        </div>

        <input type="submit" value="Sort" name="sortFilter" id="sortFilter">
    </div>
    <div id="mainContent">
        <div id="pageHeading">
            <h4>PRODUCTS</h4>
        </div>
        <div id="products">
            <div class="item">
                <img src="../img/01.HomeFlashDealsSliderDemoIMG.jpg" alt="">
                <div class="productDetails">
                    <h4>Product Company</h4>
                    <h2>Product Name</h2>
                    <h3>Price</h3>
                </div>
            </div>
            <div class="item">
                <img src="../img/01.HomeFlashDealsSliderDemoIMG.jpg" alt="">
                <div class="productDetails">
                    <h4>Product Company</h4>
                    <h2>Product Name</h2>
                    <h3>Price</h3>
                </div>
            </div>
            <div class="item">
                <img src="../img/01.HomeFlashDealsSliderDemoIMG.jpg" alt="">
                <div class="productDetails">
                    <h4>Product Company</h4>
                    <h2>Product Name</h2>
                    <h3>Price</h3>
                </div>
            </div>
            <div class="item">
                <img src="../img/01.HomeFlashDealsSliderDemoIMG.jpg" alt="">
                <div class="productDetails">
                    <h4>Product Company</h4>
                    <h2>Product Name</h2>
                    <h3>Price</h3>
                </div>
            </div>
            <div class="item">
                <img src="../img/01.HomeFlashDealsSliderDemoIMG.jpg" alt="">
                <div class="productDetails">
                    <h4>Product Company</h4>
                    <h2>Product Name</h2>
                    <h3>Price</h3>
                </div>
            </div>
            <div class="item">
                <img src="../img/01.HomeFlashDealsSliderDemoIMG.jpg" alt="">
                <div class="productDetails">
                    <h4>Product Company</h4>
                    <h2>Product Name</h2>
                    <h3>Price</h3>
                </div>
            </div>
            <div class="item">
                <img src="../img/01.HomeFlashDealsSliderDemoIMG.jpg" alt="">
                <div class="productDetails">
                    <h4>Product Company</h4>
                    <h2>Product Name</h2>
                    <h3>Price</h3>
                </div>
            </div>
            <div class="item">
                <img src="../img/01.HomeFlashDealsSliderDemoIMG.jpg" alt="">
                <div class="productDetails">
                    <h4>Product Company</h4>
                    <h2>Product Name</h2>
                    <h3>Price</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sidebar -->
<?php include "../components/footer.php"; ?>
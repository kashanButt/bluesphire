<?php
    $pageTitle = "Product";
    include "../components/header.php";
    include "../database/database.php";

    $id = $_GET["id"];
    $database = new Database();
    $db = $database->connect();

    $query = "SELECT * FROM `products` WHERE id=$id";
    $res = $db->prepare($query);
    $res->execute();
    $row = $res->fetch(PDO::FETCH_ASSOC);
    extract($row);
?>
<style>
#trendSlider{
    position: relative;
    height:300px;
}
#trendSlider img{
    transition: opacity 1.5s;
    position: absolute;
    width: 565px;
    height: 300px;
    top: 0;
    left: 0;
    opacity: 0;
}
#trendSlider #img_01{
    width: 829px;
    height: 300px;
}
#trendSlider #img_02{
    width: 829px;
    height: 300px;
}
#trendSlider #img_03{
    width: 829px;
    height: 300px;
}
#trendSlider img.fadeIn {
    opacity: 1;
}
@media (min-width:900px) and (max-width:1000px) {
    #trendSlider #img_01,#trendSlider #img_02,#trendSlider #img_03{
        max-width: 777px;
    }
}
</style>
<!-- Sidebar -->
<div id="content">
    <div id="productDetails">
        <div id="productSlider">
            <div id="trendSlider">
                <?php
                    $quer = "SELECT * FROM `images` WHERE productID=$id";
                    $re = $db->prepare($quer);
                    $re->execute();
                    while($reqs = $re->fetch(PDO::FETCH_ASSOC)) {
                ?>
                <img src="../admin/images/<?php echo $reqs["imageName"]; ?>" id="img_01" style="width:570px;height:300px">
                <?php } ?>
            </div>
            <div class="productSecondSlider">
                <div class="owl-carousel owl-theme">
                    <?php
                        $q = "SELECT * FROM `images` WHERE productID=$id";
                        $que = $db->prepare($q);
                        $que->execute();
                        while($ans = $que->fetch(PDO::FETCH_ASSOC)){
                    ?>
                    <div class="item">
                        <img src="../admin/images/<?php echo $ans["imageName"]; ?>" alt="" style="width:140px;height:100px">
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div id="productInfo">
            <h1><?php echo $name;?></h1>
            <h2>$<?php echo $price;?></h2>
            <div id="info">
                <div class="sku">
                    <div class="heading">
                        <p>SKU</p>
                    </div>
                    <div class="content">
                        <p><?php echo $sku;?></p>
                    </div>
                </div>
                <div class="category">
                    <div class="heading">
                        <p>Category</p>
                    </div>
                    <div class="content">
                        <p><?php echo $category;?></p>
                    </div>
                </div>
                <div class="size">
                    <div class="heading">
                        <p>Size</p>
                    </div>
                    <div class="content">
                        <p><?php echo $size;?></p>
                    </div>
                </div>
                <div class="quantity">
                    <div class="heading">
                        <p>Quantity</p>
                    </div>
                    <div class="content">
                        <p><?php echo $quantity;?></p>
                    </div>
                </div>
            </div>
            <div id="productBtns">
                <a href="../checkout/index.php?id=<?php echo $id; ?>">
                    <button>BUY NOW</button>
                </a>
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
            <p><?php echo $description;?></p>
        </div>
    </div>
</div>
<!-- Sidebar -->
<?php include "../components/footer.php"; ?>
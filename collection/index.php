<?php
    $pageTitle = "Collection";
    include "../components/header.php";
    include "../database/database.php";

    $database = new Database();
    $db = $database->connect();   
?>
<!-- Sidebar -->
<div id="collectionContent">
    <div id="sidebar">
        <form method="POST">
        <h3>Sort By</h3>
        <h4>Price</h4>
        <input type="text" name="lowerPrice" id="lowerPrice" placeholder="From"><br>
        <input type="text" name="upperPrice" id="upperPrice" placeholder="To">

        <h4>Color</h4>
        <div class="colorOptions">
            <?php
                $query = "SELECT DISTINCT color FROM `products`";
                $res = $db->prepare($query);
                $res->execute();
                $list = array();
                $new_list;
                while($row = $res->fetch(PDO::FETCH_ASSOC)){
                    extract($row);
                    $ans = explode(",",$color);
                    foreach($ans as $items) {
                        array_push($list,$items);
                    }
                }
                $newlist = array_unique($list);
                foreach($newlist as $items) {
            ?>
            <input type="radio" name="color" id="colorRed"><span><?php echo ucwords($items)."<br>"; ?></span><br>
            <?php 
                }    
            ?>
        </div>

        <h4>Size</h4>
        <div class="sizeOptions">
            <?php
                $query = "SELECT DISTINCT size FROM `products`";
                $res = $db->prepare($query);
                $res->execute();
                $list = array();
                $new_list;
                while($row = $res->fetch(PDO::FETCH_ASSOC)){
                    extract($row);
                    $ans = explode(",",$size);
                    foreach($ans as $items) {
                        array_push($list,$items);
                    }
                }
                $newlist = array_unique($list);
                foreach($newlist as $items) {
            ?>
            <input type="radio" name="size" id="sizeXSmall"><span><?php echo ucwords($items); ?></span><br>
            <?php } ?>
        </div>

        <input type="submit" value="Filter" name="submit" id="sortFilter">
        </form>
    </div>
    <div id="mainContent">
        <div id="pageHeading">
            <h4>PRODUCTS</h4>
        </div>
        <div id="products">
            <?php
                if(isset($_POST["submit"])){
                    $lowerPrice = $_POST["lowerPrice"];
                    $upperPrice = $_POST["upperPrice"] + 100;
                    $color = $_POST["color"];
                    $size = $_POST["size"];

                    $query = "SELECT * FROM `products` WHERE price BETWEEN $lowerPrice AND $upperPrice AND color LIKE '%$color%' AND size LIKE '%$size%'";

                }else{
                    $query = "SELECT * FROM `products` ORDER BY id DESC";
                }
                    $res = $db->prepare($query);
                    $res->execute();
                
                    while($row = $res->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        $q = "SELECT * FROM `images` WHERE productID=$id LIMIT 1 ";
                        $que = $db->prepare($q);
                        $que->execute();
                        $ans = $que->fetch(PDO::FETCH_ASSOC);
            ?>
            <div class="item">
                <a href="../product/index.php?id=<?php echo $id ?>">
                    <img src="../admin/images/<?php echo $ans["imageName"]; ?>" alt="" style="width:300px;height:200px">
                    <div class="productDetails">
                        <h4><?php echo $company; ?></h4>
                        <h2><?php echo $name; ?></h2>
                        <h3><?php echo $price; ?></h3>
                    </div>
                </a>
            </div>
            <?php 
                }
            ?>
        </div>
    </div>
</div>
<!-- Sidebar -->
<?php include "../components/footer.php"; ?>
<?php 
    $pageTitle = "Checkout";
    include "../components/header.php";
    include "../database/database.php";

    $i = $_GET["id"];
    $database = new Database();
    $db = $database->connect();

    $query = "SELECT * FROM `products` WHERE id=$i";
    $res = $db->prepare($query);
    $res->execute();
    $a = $res->fetch(PDO::FETCH_ASSOC);
    extract($a);

    $q = "SELECT * FROM `images` WHERE productID = $id LIMIT 1";
    $ans = $db->prepare($q);
    $ans->execute();
    $b = $ans->fetch(PDO::FETCH_ASSOC);
    
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
                    <img src="../admin/images/<?php echo $b["imageName"]; ?>" alt="" style="width:200px;height:150px">
                </div>
                <div class="productQuantity">
                    <div id="counterBtn">
                        <button class="remove">-</button>
                        <p class="counter">0</p>
                        <button class="add">+</button>
                    </div>
                </div>
                <div class="price">
                    <p>$<span id="price"><?php echo $price; ?></span></p>
                </div>
            </div>
            <div id="total">
                <div class="content">
                    <p>$<span id="totalPrice"></span></p>
                </div>
            </div>
        </div>
        <div id="pay">
            <a href="../payment/index.php?id=<?php echo $id;?>">
                <button>Checkout</button>
            </a>
        </div>
        <script>
            arr = []
            res = document.querySelectorAll("#price")

            b = 0;
            for(i=0;i<res.length;i++) {
                a = res[i].innerText;
                b += Number(a)
            }
            document.querySelector("#totalPrice").innerText = b

            // for(i=0;i<a.length;i++) {
            //     console.log(a[i]);
            // }
        </script>
    </div>
<?php include "../components/footer.php"; ?>
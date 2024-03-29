<?php 
  include "./components/header.php";
  include "./database/database.php";

  $database = new Database();
  $db = $database->connect();
?>
<div class="main-content">
  <!-- content -->
  <div class="container-fluid content-top-gap">

    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb" class="mb-4">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Delete Products</li>
      </ol>
    </nav>
    <!-- //breadcrumbs -->

    <!-- pricing -->
    <section class="pricing">
      <div class="card card_border mb-5">
        <div class="cards__heading">
          <h3>Total Products -<span> 
            <?php
              $query = "SELECT COUNT(*) FROM `products`";
              $res = $db->prepare($query);
              $res->execute();
              $row = $res->fetch(PDO::FETCH_ASSOC);
              echo $row["COUNT(*)"];
            ?>
          </span></h3>
        </div>
        <div class="card-body">
          <!-- pricing version 1 -->

          <!--//BLOCK ROW END-->

          <section class="w3l-pricing1">
            <div class="row px-2">
              <div class="col-md-12 px-2">
                <div class="p-md-4" style="display:flex;">
                  <div class="card-header p-0 card-heading" id="productHeading">
                    <h5 class="mb-4" style="font-weight:900">S.no</h5>
                  </div>
                  <div class="card-header p-0 card-heading" id="productHeading">
                    <h5 class="mb-4" style="font-weight:900">Img</h5>
                  </div>
                  <div class="card-header p-0 card-heading" id="productHeading">
                    <h5 class="mb-4" style="font-weight:900">Name</h5>
                  </div>
                  <div class="card-header p-0 card-heading" id="productHeading">
                    <h5 class="mb-4" style="font-weight:900">Company</h5>
                  </div>
                  <div class="card-header p-0 card-heading" id="productHeading">
                    <h5 class="mb-4" style="font-weight:900">Color</h5>
                  </div>
                  <div class="card-header p-0 card-heading" id="productHeading">
                    <h5 class="mb-4" style="font-weight:900">SKU</h5>
                  </div>
                  <div class="card-header p-0 card-heading" id="productHeading">
                    <h5 class="mb-4" style="font-weight:900">Category</h5>
                  </div>
                  <div class="card-header p-0 card-heading" id="productHeading">
                    <h5 class="mb-4" style="font-weight:900">Size</h5>
                  </div>
                  <div class="card-header p-0 card-heading" id="productHeading">
                    <h5 class="mb-4" style="font-weight:900">Quantity</h5>
                  </div>
                  <div class="card-header p-0 card-heading" id="productHeading">
                    <h5 class="mb-4" style="font-weight:900">Price</h5>
                  </div>
                  <div class="card-header p-0 card-heading" id="productHeading">
                    <h5 class="mb-4" style="font-weight:900">Action</h5>
                  </div>
                </div>
              </div>
              <div class="col-md-12 px-2" >
                <?php
                  $query = "SELECT * FROM `products` ORDER BY id DESC;";
                  $res = $db->prepare($query);
                  $res->execute();
                  
                  $sno = 0;
                  while($row = $res->fetch(PDO::FETCH_ASSOC)){
                    extract($row);
                    $sno++;

                    $q = "SELECT * FROM `images` WHERE productID = $id LIMIT 1";
                    $pre = $db->prepare($q);
                    $pre->execute();

                    $ans = $pre->fetch(PDO::FETCH_ASSOC);
                ?>
                <div class="price-card price-card1 p-md-4" style="display:flex;">
                  <div class="card-header p-0 card-heading" id="productContent">
                    <h5 class="mb-4">
                      <?php
                        if($sno < 10 ){
                          echo "0".$sno.".";
                        }else{
                          echo $sno.".";
                        } 
                      ?>
                    </h5>
                  </div>
                  <div class="card-header p-0 card-heading" id="productContent">
                    <h5 class="mb-4">
                      <img src="./images/<?php echo $ans["imageName"];?>" alt="" style="margin-top:-12px;">
                    </h5>
                  </div>
                  <div class="card-header p-0 card-heading" id="productContent">
                    <h5 class="mb-4">
                      <?php echo $name; ?>
                    </h5>
                  </div>
                  <div class="card-header p-0 card-heading" id="productContent">
                    <h5 class="mb-4">
                      <?php echo $company; ?>
                    </h5>
                  </div>
                  <div class="card-header p-0 card-heading" id="productContent">
                    <h5 class="mb-4">
                      <?php echo $color; ?>
                    </h5>
                  </div>
                  <div class="card-header p-0 card-heading" id="productContent">
                    <h5 class="mb-4">
                      <?php echo $sku; ?>
                    </h5>
                  </div>
                  <div class="card-header p-0 card-heading" id="productContent">
                    <h5 class="mb-4">
                      <?php echo $category; ?>
                    </h5>
                  </div>
                  <div class="card-header p-0 card-heading" id="productContent">
                    <h5 class="mb-4">
                      <?php echo $size; ?>
                    </h5>
                  </div>
                  <div class="card-header p-0 card-heading" id="productContent">
                    <h5 class="mb-4">
                      <?php echo $quantity; ?>
                    </h5>
                  </div>
                  <div class="card-header p-0 card-heading" id="productContent">
                    <h5 class="mb-4">
                      <?php echo $price; ?>
                    </h5>
                  </div>
                  <div class="card-header p-0 card-heading" id="productContent">
                    <div class="d-flex align-items-center flex-wrap justify-content-between" style="position: relative;margin-top: -34px;margin-left: 38px;">
                    <a href="./delete.php?id=<?php echo $id;?>"><button type="submit" class="btn btn-danger btn-style mt-4">Delete</button></a>
                    </div>
                  </div>
                </div>
                <?php } ?>
              </div>
            </div>
        </div>
      </div>
    </section>
    <!-- //pricing -->

  </div>
  <!-- //content -->

</div>
<!-- main content end-->
</section>
<!--footer section start-->
<?php include "./components/footer.php" ?>
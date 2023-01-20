<?php 
  include "./components/header.php";
  include "./database/database.php";

  $id = $_GET["id"];

  $database = new Database();
  $db = $database->connect();

  $query = "SELECT * FROM `products` WHERE id=$id;";
  $res = $db->prepare($query);
  $res->execute();
  $row = $res->fetch(PDO::FETCH_ASSOC);
  extract($row);
?>
<div class="main-content">
  <!-- content -->
  <div class="container-fluid content-top-gap">

    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb" class="mb-4">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add Products</li>
      </ol>
    </nav>
    <!-- //breadcrumbs -->

    <!-- pricing -->
    <section class="pricing">
      <div class="card card_border mb-5">
        <div class="card-body">
          <!-- pricing version 1 -->

          <!--//BLOCK ROW END-->
          <form method="POST" enctype="multipart/form-data">
          <section class="w3l-pricing1">
            <div class="row px-2">
              <div class="col-md-12 px-2">
                <div class="p-md-4" style="display:flex;">
                  <div class="card-header p-0 card-heading" id="addProductContent">
                    <h5 class="mb-4" style="font-weight:900">Img</h5>
                  </div>
                  <div class="card-header p-0 card-heading" id="addProductContent">
                    <input type="file" name="images" id="File">
                  </div>
                </div>
              </div>
              <div class="col-md-12 px-2" >
                <div class="p-md-4" style="display:flex;height:75px">
                  <div class="card-header p-0 card-heading" id="addProductContent">
                  <h5 class="mb-4">Name</h5>
                  </div>
                  <div class="card-header p-0 card-heading" id="addProductContent">
                    <input type="text" class="form-control login_text_field_bg input-style" id="exampleInputName" aria-describedby="emailHelp" placeholder="<?php echo $name; ?>" autofocus name="productName">
                  </div>
                </div>
              </div>
              <div class="col-md-12 px-2" >
                <div class="p-md-4" style="display:flex;height:75px">
                  <div class="card-header p-0 card-heading" id="addProductContent">
                  <h5 class="mb-4">Company</h5>
                  </div>
                  <div class="card-header p-0 card-heading" id="addProductContent">
                    <input type="text" class="form-control login_text_field_bg input-style" id="exampleInputName" aria-describedby="emailHelp" placeholder="<?php echo $company; ?>" autofocus name="productCompany">
                  </div>
                </div>
              </div>
              <div class="col-md-12 px-2" >
                <div class="p-md-4" style="display:flex;height:75px">
                  <div class="card-header p-0 card-heading" id="addProductContent">
                  <h5 class="mb-4">Color</h5>
                  </div>
                  <div class="card-header p-0 card-heading" id="addProductContent">
                    <input type="text" class="form-control login_text_field_bg input-style" id="exampleInputName" aria-describedby="emailHelp" placeholder="<?php echo $color; ?>" autofocus name="productColor">
                  </div>
                </div>
              </div>
              <div class="col-md-12 px-2" >
                <div class="p-md-4" style="display:flex;height:75px">
                  <div class="card-header p-0 card-heading" id="addProductContent">
                  <h5 class="mb-4">SKU</h5>
                  </div>
                  <div class="card-header p-0 card-heading" id="addProductContent">
                    <input type="text" class="form-control login_text_field_bg input-style" id="exampleInputName" aria-describedby="emailHelp" placeholder="<?php echo $sku; ?>" autofocus name="productSku">
                  </div>
                </div>
              </div>
              <div class="col-md-12 px-2" >
                <div class="p-md-4" style="display:flex;height:75px">
                  <div class="card-header p-0 card-heading" id="addProductContent">
                  <h5 class="mb-4">Category</h5>
                  </div>
                  <div class="card-header p-0 card-heading" id="addProductContent">
                    <input type="text" class="form-control login_text_field_bg input-style" id="exampleInputName" aria-describedby="emailHelp" placeholder="<?php echo $category; ?>" autofocus name="productCategories">
                  </div>
                </div>
              </div>
              <div class="col-md-12 px-2" >
                <div class="p-md-4" style="display:flex;height:75px">
                  <div class="card-header p-0 card-heading" id="addProductContent">
                  <h5 class="mb-4">Size</h5>
                  </div>
                  <div class="card-header p-0 card-heading" id="addProductContent">
                    <input type="text" class="form-control login_text_field_bg input-style" id="exampleInputName" aria-describedby="emailHelp" placeholder="<?php echo $size; ?>" autofocus name="productSize">
                  </div>
                </div>
              </div>
              <div class="col-md-12 px-2" >
                <div class="p-md-4" style="display:flex;height:75px">
                  <div class="card-header p-0 card-heading" id="addProductContent">
                  <h5 class="mb-4">Quantity</h5>
                  </div>
                  <div class="card-header p-0 card-heading" id="addProductContent">
                    <input type="text" class="form-control login_text_field_bg input-style" id="exampleInputName" aria-describedby="emailHelp" placeholder="<?php echo $quantity; ?>" autofocus name="productQuantity"> 
                  </div>
                </div>
              </div>
              <div class="col-md-12 px-2" >
                <div class="p-md-4" style="display:flex;height:75px">
                  <div class="card-header p-0 card-heading" id="addProductContent">
                  <h5 class="mb-4">Price</h5>
                  </div>
                  <div class="card-header p-0 card-heading" id="addProductContent">
                    <input type="text" class="form-control login_text_field_bg input-style" id="exampleInputName" aria-describedby="emailHelp" placeholder="<?php echo $price; ?>" autofocus name="productPrice"> 
                  </div>
                </div>
              </div>
              <div class="col-md-12 px-2" >
                <div class="p-md-4" style="display:flex;height:75px">
                  <div class="card-header p-0 card-heading" id="addProd uctContent">
                    <h5 class="mb-4"></h5>
                  </div>
                  <div class="d-flex align-items-center flex-wrap justify-content-between" style="position: relative;margin-top: -20px;">
                    <input type="submit" class="btn btn-primary btn-style mt-4" name="submit" value="Update Product">
                  </div>
                </div>
              </div>
            </div>
          </form>
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
<?php
  include "./components/footer.php";


  if(isset($_POST["submit"])){
    $name = $_POST['productName'];
    $sku = $_POST['productSku'];
    $categories = $_POST['productCategories'];
    $size = $_POST['productSize'];
    $quantity = $_POST['productQuantity'];
    $price = $_POST['productPrice'];
    $price = $_POST['productPrice'];
    $company = $_POST['productCompany'];
    $color = $_POST['productColor'];

    $query = "UPDATE `products` SET `name`='$name',`sku`='$sku',`category`='$categories',`size`='$quantity',`quantity`='$quantity',`price`='$price', `company`='$company', `color`='$color' WHERE id=$id ";
    $res = $db->prepare($query);
    $res->execute();
  }
?>
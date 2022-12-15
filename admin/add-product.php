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
                    <input type="text" class="form-control login_text_field_bg input-style" id="exampleInputName" aria-describedby="emailHelp" placeholder="" required="" autofocus name="productName">
                  </div>
                </div>
              </div>
              <div class="col-md-12 px-2" >
                <div class="p-md-4" style="display:flex;height:75px">
                  <div class="card-header p-0 card-heading" id="addProductContent">
                  <h5 class="mb-4">SKU</h5>
                  </div>
                  <div class="card-header p-0 card-heading" id="addProductContent">
                    <input type="text" class="form-control login_text_field_bg input-style" id="exampleInputName" aria-describedby="emailHelp" placeholder="" required="" autofocus name="productSku">
                  </div>
                </div>
              </div>
              <div class="col-md-12 px-2" >
                <div class="p-md-4" style="display:flex;height:75px">
                  <div class="card-header p-0 card-heading" id="addProductContent">
                  <h5 class="mb-4">Category</h5>
                  </div>
                  <div class="card-header p-0 card-heading" id="addProductContent">
                    <input type="text" class="form-control login_text_field_bg input-style" id="exampleInputName" aria-describedby="emailHelp" placeholder="" required="" autofocus name="productCategories">
                  </div>
                </div>
              </div>
              <div class="col-md-12 px-2" >
                <div class="p-md-4" style="display:flex;height:75px">
                  <div class="card-header p-0 card-heading" id="addProductContent">
                  <h5 class="mb-4">Size</h5>
                  </div>
                  <div class="card-header p-0 card-heading" id="addProductContent">
                    <input type="text" class="form-control login_text_field_bg input-style" id="exampleInputName" aria-describedby="emailHelp" placeholder="" required="" autofocus name="productSize">
                  </div>
                </div>
              </div>
              <div class="col-md-12 px-2" >
                <div class="p-md-4" style="display:flex;height:75px">
                  <div class="card-header p-0 card-heading" id="addProductContent">
                  <h5 class="mb-4">Quantity</h5>
                  </div>
                  <div class="card-header p-0 card-heading" id="addProductContent">
                    <input type="text" class="form-control login_text_field_bg input-style" id="exampleInputName" aria-describedby="emailHelp" placeholder="" required="" autofocus name="productQuantity"> 
                  </div>
                </div>
              </div>
              <div class="col-md-12 px-2" >
                <div class="p-md-4" style="display:flex;height:75px">
                  <div class="card-header p-0 card-heading" id="addProductContent">
                  <h5 class="mb-4">Price</h5>
                  </div>
                  <div class="card-header p-0 card-heading" id="addProductContent">
                    <input type="text" class="form-control login_text_field_bg input-style" id="exampleInputName" aria-describedby="emailHelp" placeholder="" required="" autofocus name="productPrice"> 
                  </div>
                </div>
              </div>
              <div class="col-md-12 px-2" >
                <div class="p-md-4" style="display:flex;height:75px">
                  <div class="card-header p-0 card-heading" id="addProductContent">
                    <h5 class="mb-4"></h5>
                  </div>
                  <div class="d-flex align-items-center flex-wrap justify-content-between" style="position: relative;margin-top: -20px;">
                    <input type="submit" class="btn btn-primary btn-style mt-4" name="submit" value="Add Product">
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

  $res = $db->lastInsertId();
  echo $res;

  if (isset($_POST['upload'])) {
 
    $filename = $_FILES["images"]["name"];
    $tempname = $_FILES["images"]["tmp_name"];
    $folder = "./images/" . $filename;
 
    $sql = "INSERT INTO `images`(`productID`, `imageName`) VALUES ('3','$filename')";
    mysqli_query($db, $sql);
    if (move_uploaded_file($tempname, $folder)) {
        echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
  }

  if(isset($_POST["submit"])){
    $name = $_POST['productName'];
    $sku = $_POST['productSku'];
    $categories = $_POST['productCategories'];
    $size = $_POST['productSize'];
    $quantity = $_POST['productQuantity'];
    $price = $_POST['productPrice'];
    $price = $_POST['productPrice'];

    $query = "INSERT INTO `products`(`name`, `sku`, `category`, `size`, `quantity`, `price`) VALUES ('$name','$sku','$categories','$size','$quantity','$price')";
    $res = $db->prepare($query);
    $res->execute();
  }
?>
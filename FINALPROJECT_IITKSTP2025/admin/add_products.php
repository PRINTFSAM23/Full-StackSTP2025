
<?php
    $msg ="";
        if(isset($_POST['addproduct'])){
        //boolean move_uploaded_file($sourcePath,$destination_path)
        if($_FILES['myfile']['error']==0){
        $sourcePath = $_FILES['myfile']['tmp_name'];
        $destinationPath = $_SERVER['DOCUMENT_ROOT']."/STP25/final_project/product_img/".$_FILES['myfile']['name'];
        if(move_uploaded_file($sourcePath,$destinationPath))
            $msg2= "File Uploaded successfuly!!!";
        else
            $msg2= "Error in Uploading";
                                                
        }
        else{
            $msg2= "File is corrupted";
        }
    }

        if (isset($_POST['addproduct'])) {

            if ($_FILES['myfile']['error'] == 0) {
                $relativePath = "product_img/" . $_FILES['myfile']['name'];
            }
        }
    if(isset($_POST['addproduct'])){
        $Pname= $_POST['txtname'];
        $event_type= $_POST['event_type'];
        $price= $_POST['pricetxt'];
        $description= $_POST['txtdesc'];
        $path = $relativePath;

        $con = mysqli_connect("localhost","root","","florifydb");
        $qry = "insert into products(product_name,product_price,product_description,product_image,product_type) values('$Pname',$price,'$description','$path','$event_type')";
        mysqli_query($con,$qry);
        $i=mysqli_affected_rows($con);
        if($i>0){
            $msg = "<font color ='green'>Registration Successfull</font>";
        }
        else{
            $msg= "<font color ='red'>Error in registration. Try again</font>";
            echo mysqli_error($con);
        }
        mysqli_close($con);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Products-Florify</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap\css\bootstrap.min.css">
    <script src="bootstrap\js\jquery.min.js"></script>
    <script src="bootstrap\js\bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

</head>
<?php include_once("header.php"); ?>
<body style="background-color: #f5f5f5;">

    <div class="text-center" style="padding-top: 60px; padding-bottom: 30px;">
        <img src="images/logo.png" alt="Florify Logo" style="width: 80px; height: 80px; border-radius: 50%; object-fit: cover; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
    </div>



  <div class="container mt-3" style="max-width: 1100px; background: white; padding: 30px; border-radius: 20px; box-shadow: 0 0 20px rgba(0,0,0,0.05); border: 1px solid #e3e3e3;">

    <h2 class="mb-4 text-center" style="font-weight: 600;">Add New Product</h2>

    <form method="post" enctype="multipart/form-data">
      <div class="row">


        <div class="col-md-8">
          <div class="card p-4 mb-4 shadow-sm" style="border-radius: 12px; border: 1px solid #eee;">
            <h5>General Information</h5>
            <div class="form-group mt-3">
              <label><strong>Product Name</strong></label>
              <input type="text" name="txtname" class="form-control" placeholder="Enter product name" />
            </div>

            <div class="form-group mt-3">
              <label><strong>Product Description</strong></label>
              <textarea class="form-control" name="txtdesc" rows="4" placeholder="Enter description..."></textarea>
            </div>

            <div class="form-row mt-4">
              <div class="form-group col-md-6">
                <label><strong>Product Price</strong></label>
                <input type="number" name="pricetxt" class="form-control" placeholder="₹ Price" />
              </div>

              <div class="form-group col-md-6">
                <label><strong>Product Type</strong></label>
                <select class="form-control" name="event_type">
                  <option disabled selected>Choose type</option>
                  <option>Birthday</option>
                  <option>Anniversary</option>
                  <option>Events</option>
                </select>
              </div>
            </div>
          </div>
        </div>


        <div class="col-md-4">
          <div class="card p-3 mb-4 shadow-sm" style="border-radius: 12px; border: 1px solid #eee;">
            <h6><strong>Upload Image</strong></h6>
            <input type="file" name="myfile" class="form-control mt-2" />
            <small class="text-muted mt-2">Upload high-quality product image</small>
          </div>

          <div class="card p-3 shadow-sm" style="border-radius: 12px; border: 1px solid #eee;">
            <h6><strong>Category</strong></h6>
            <p class="mb-2"><i class="fas fa-tag"></i> <strong>Selected:</strong> 
              <span id="cat-name">
                <?php echo isset($_POST['event_type']) ? $_POST['event_type'] : '-'; ?>
              </span>
            </p>
            <button type="button" class="btn btn-outline-success btn-sm" disabled>Add Category</button>
          </div>
        </div>
      </div>


      <div class="text-center mt-4">
        <?php echo $msg . "<br>"; ?>
        <input type="submit" value="Add" name="addproduct" class="btn btn-success px-4 py-2" style="font-weight: 500;" />
      </div>
    </form>

  </div>
</body>

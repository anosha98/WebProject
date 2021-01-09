<?php
include('header.php');
$user_id=$_GET['id'];
include('conection.php');
$user_data=mysqli_fetch_array(mysqli_query($db, "SELECT * FROM products where productID='".$user_id."'"));

if(isset($_POST['upload']))
{

    //update the user
    $image = $_FILES['file']['name'];
    $pname = $_POST['pname'];
    $pprice = $_POST['pprice'];
    $pcode = $_POST['pcode'];
    $pdiscount = $_POST['pdiscount'];
    $psize = $_POST['psize'];
    $pstock = $_POST['pstock'];

    $target="uploads/".basename($image);
    move_uploaded_file($_FILES['file']['tmp_name'], $target);

    $sqlu="UPDATE products SET image = '$image', productName='$pname', 
        productPrice='$pprice', productCode='$pcode', prodcutDiscount='$pdiscount',
        productSize='$psize', productInStock='$pstock' WHERE productID = '$user_id'";
    if ($db->query($sqlu) === TRUE) {
  header('Location:details.php?message=Updated Successfully');
} else {
  echo "Error: " . $sqlu . "<br>" . $db->error;
}
}
?>
<div class="container my-5 mx-auto w-50">
    <form method="POST" enctype="multipart/form-data" action="">
        <div class="form">
            <div class="form-group">
            </div>
            <div class="form-group">
                <label for="name">Product Name</label>
                <input type="text" value="<?php echo $user_data['productName']; ?>" name="pname" class="form-control" id="name" placeholder="Name">
            </div>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" class="form-control" value="<?php echo $user_data['productPrice']; ?>" name="pprice" id="price" placeholder="Price">
        </div>
        <div class="form-group">
            <label for="code">Code</label>
            <input type="text" class="form-control" value="<?php echo $user_data['productCode']; ?>" name="pcode" id="code"placeholder="Code">
        </div>
        <div class="form-group">
                <label for="stock">In-Stock</label><br>
                <input type="radio" id="stock" name="pstock" value="1" value="<?php echo $user_data['productInStock']; ?>">
                <label for="male">Yes</label><br>
                <input type="radio" id="stock" name="pstock" value="0"value="<?php echo $user_data['productInStock']; ?>">
                <label for="male">No</label><br>
            </div>
        <div class="form">
            <div class="form-group">
                <label for="stock">Discount</label>
                <input type="text" class="form-control" value="<?php echo $user_data['prodcutDiscount']; ?>" name="pdiscount" id="discount" placeholder="%">
            </div>
            <div class="form-group">
                <label for="size">Product Size</label>
                <select id="size" name="psize" class="form-control">
                    <option selected>Large</option>
                    <option>Medium</option>
                    <option>Small</option>
                </select>
            </div>
            <div class="form-group">
                <label for="Details">Product Details</label>
                <input type="text" class="form-control" value="<?php echo $user_data['productDetails']; ?>" name="pdetails" id="details" placeholder="About the Product">
            </div>
            <br>

            <div class="custom-file">
                <input type="file" name="file" class="custom-file-input" value="./uploads/<?php echo $res['image'] ?>" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                <img src="./uploads/<?php echo $res['image'] ?>" style="width:50px">
            </div>
        </div>
        <br><input type="submit" class="btn btn-primary" name="upload" value="Update">
</div>
</div>
</div>

</form>
</div>

<?php
include('footer.php');
?>
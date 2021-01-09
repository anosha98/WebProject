<?php  

include('conection.php');  

$sql = "SELECT * FROM products";
$result = $db->query($sql);
//die();
include('header.php');
?>
<!DOCTYPE html>

<head>
  <title>Product Details</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
  
  <div class="container-fluid">
     <h1 style="text-align: center; color: red;">Admin Panel</h1>
     <h2>Product Details</h2>
  <br>
    <div class="pull-right">
      <button class="btn btn-primary"><a href="form.php" style="color:white">Add New</a></button>
    </div> <br>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Product ID</th>
        <th>Product Name</th>
        <th>Product Price</th>
        <th>Product Code</th>
        <th>Product In Stock</th>
        <th>Product Size</th>
        <th>Product Discount</th>
        <th>Product Details</th>
        <th>Product Image</th>
      </tr>
    </thead>
    <tbody>
     <?php while($res = mysqli_fetch_array($result)){ ?>
      <tr>
        <td><?php echo $res['productID'] ?></td>
        <td><?php echo $res['productName'] ?></td>
        <td><?php echo $res['productPrice']?></td>
        <td><?php echo $res['productCode'] ?></td>
        <td><?php echo $res['productInStock'] ?></td>
        <td><?php echo $res['productSize'] ?></td>
        <td><?php echo $res['prodcutDiscount'] ?></td>
        <td><?php echo $res['productDetails'] ?></td>
        <td><img src="./uploads/<?php echo $res['image'] ?>" style="width:50px"></td>
        <td><button class="btn btn-warning"><a href="update.php?id=<?php echo
        $res['productID']?>" style="color:white">Update</a></button>
          <button class="btn btn-danger" onclick="delete_row(<?php  echo $res['productID']   ?>)">Delete</button></td>
        </tr>
      <?php }?>
    </tbody>
  </table>
</div>
<script>
  function delete_row(id)
  {

    if(confirm("Are you sure you want to delete?"))
    {
      window.location.href="delete.php?id="+id+"";
    }
  }
</script>
<div class="container">
  <div class="pull-right">
    <div class="btn btn-primary">
      <a href="content.php" style="color: white">Show Products</a>
    </div>
  </div>
  </div>
</body>
</html>
<?php include('footer.php') ?>

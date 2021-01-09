<?php 
  include ('header.php');
  include('conection.php');  

$sql = "SELECT * FROM products";
$result = $db->query($sql);
 ?>


  <div class="container">
    <h1 style="text-align: left;"><i><u>Our Products</u></i></h1>
    <div class="row my-5">

      <?php while($res = mysqli_fetch_array($result)){ ?>
      <div class="col-sm-4">
        <div class="card">
        <img src="./uploads/<?php echo $res['image'] ?>" width="100%" height="330px" alt="Hoodie">
        <div class="card-body text-center">
          <h3 ><?php echo $res['productName']?></h3>
          <div class="card-footer">
            <p>Price :<?php echo $res['productPrice']?>Rs</p>
            <p><?php echo $res['productDetails']?></p>
          <a href="p1.html" class="btn btn-dark" >More Details</a>
          </div>
        </div>  
        </div>
      </div>
      <?php }?>

    </div>
  </div>
<?php 
  include ('footer.php');
 ?>

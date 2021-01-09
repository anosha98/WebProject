<?php
	
	include('header.php');
?>
<div class="container my-5 mx-auto w-50">
<form method="POST" enctype="multipart/form-data" action="uploadfile.php">
  <div class="form">
    <div class="form-group">
    </div>
    <div class="form-group">
      <label for="name">Product Name</label>
      <input type="text" name="pname" class="form-control" id="name" placeholder="Name">
    </div>
  </div>
  <div class="form-group">
    <label for="price">Price</label>
    <input type="text" class="form-control" name="pprice" id="price" placeholder="Price">
  </div>
  <div class="form-group">
    <label for="code">Code</label>
    <input type="text" class="form-control" name="pcode" id="code"placeholder="Code">
  </div>
  <div class="form-group">
    <label for="stock">In-Stock</label><br>
    <input type="radio" id="stock" name="pstock" value="1">
    <label for="male">Yes</label><br>
    <input type="radio" id="stock" name="pstock" value="0">
    <label for="male">No</label><br>
  </div>
  <div class="form">
    <div class="form-group">
      <label for="stock">Discount</label>
      <input type="text" class="form-control" name="pdiscount" id="discount" placeholder="%">
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
      <input type="text" class="form-control" name="pdetails" id="details" placeholder="About the Product">
    </div>
    <br>
    
  <div class="custom-file">
    <input type="file" name="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
  </div>
  </div>
  <br><input type="submit" class="btn btn-primary" name="upload" value="Add">
</div>
</div>
</div>

</form>
</div>

<?php 
	include('footer.php');
	 ?>
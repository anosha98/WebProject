
  <?php
	include('conection.php');
	if(isset($_POST['upload'])){
		$image = $_FILES['file']['name'];
		$pname = $_POST['pname'];
		$pprice = $_POST['pprice'];
		$pcode = $_POST['pcode'];
		$pdiscount = $_POST['pdiscount'];
		$psize = $_POST['psize'];
		$pdetails = $_POST['pdetails'];
		$pstock = $_POST['pstock'];

		$target = "uploads/".basename($image);
		 $query = "insert into products (image,productName,productPrice,productCode,prodcutDiscount,productSize,productDetails,productInStock) values ('$image','$pname','$pprice','$pcode','$pdiscount','$psize','$pdetails','$pstock')";
		 if(mysqli_query($db,$query)){
		 	echo "  ";
		 }
		 else{
		 	echo "Error ",$query."<br>".$db->error;
		 }

		if(move_uploaded_file($_FILES['file']['tmp_name'],$target)){
			header('Location: details.php?message="Added successfully!"');
		}
		else{
			header('Location: details.php?message="Added successfully!(ImageNotUploaded)"');
		}
	}
	?>
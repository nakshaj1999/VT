<?php
//insert.php
	$connect = mysqli_connect("localhost:3000", "root", "", "testing");
	if(isset($_POST["item_name"]))
	{
		 $item_name = $_POST["item_name"];
		 $item_code = $_POST["item_code"];
		 $item_desc = $_POST["item_desc"];
		 $item_price = $_POST["item_price"];
		 $query = '';

			  $item_name_clean = mysqli_real_escape_string($connect, $item_name[$count]);
			  $item_code_clean = mysqli_real_escape_string($connect, $item_code[$count]);
			  $item_desc_clean = mysqli_real_escape_string($connect, $item_desc[$count]);
			  $item_price_clean = mysqli_real_escape_string($connect, $item_price[$count]);
		  if($item_name_clean != '' && $item_code_clean != '' && $item_desc_clean != '' && $item_price_clean != '')
		  {
			   $query .= 'INSERT INTO item(item_name, item_code, item_description, item_price) VALUES("'.$item_name_clean.'", "'.$item_code_clean.'", "'.$item_desc_clean.'", "'.$item_price_clean.'"); 
			   ';
		  }
		 
		 if($query != '')
		 {
			  if(mysqli_multi_query($connect, $query))
			  {
			   	echo 'Item Data Inserted';
			  }
			  else
			  {
			   	echo 'Error';
			  }
		 }
		 else
		 {
		  	echo 'All Fields are Required';
		 }
	}
?>

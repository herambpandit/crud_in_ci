<!DOCTYPE html>
<html>
<head>
	<title>Edit product</title>
</head>
<body>
	<h1> UPDATE PRODUCT</h1>
	<form method="post" action="<?php echo  base_url().'index.php/products/edit/'.$product['id'];?>">
		<label> Enter Title :</label>
		<input type="text" name="title" value="<?php echo set_value('title',$product['title']);?>">
		<?php echo form_error('title');?>
		<brr><br>
	    <label> Enter Description :</label>
		<input type="text" name="description" value="<?php echo set_value('description',$product['description']);?>">
		<?php echo form_error('description');?>
		<br><br>
		<input type="submit" name="createproduct" value="UPDATE">
		<button>
			<a href="<?php echo base_url().'index.php/products/index'?>">CANCEL</a>
		</button>

	</form>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Create product</title>
</head>
<body>
	<h1>ADD PRODUCT</h1>
	<form method="post" action="<?php echo  base_url().'index.php/products/create';?>">
		<label> Enter Title :</label>
		<input type="text" name="title" value="<?php echo set_value('title');?>">
		<?php echo form_error('title');?>
		<brr><br>
	    <label> Enter Description :</label>
		<input type="text" name="description" value="<?php echo set_value('description');?>">
		<?php echo form_error('description');?>
		<br><br>
		<input type="submit" name="createproduct" value="CREATE">
		<button>
			<a href="<?php echo base_url().'index.php/products/index'?>">CANCEL</a>
		</button>

	</form>

</body>
</html>
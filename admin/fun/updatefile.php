<!DOCTYPE html>
<html>
<head>
	<title>Add File</title>
</head>
<body>
	<?php
	$id =  $_GET['id'];
include ('../../connect.php');
$query = "SELECT * FROM addfile WHERE fid = '$id' ";
$result = $conn->query($query);
$row = $result->fetch_assoc();

?>
<form method="POST"   action="processaddfile.php" enctype="multipart/form-data">
	<label>type of transaction </label>
	<br>
	<select name="type" value='<?php echo $row['type'];?>'>
	<option>Import</option>
	<option>Export</option>	
	</select>
<br>

	<label>adress</label>
	<br>
	<input type="" name="address" value="<?php echo $row['address'];?>">
<br>

<label>subject</label>
<br>
<textarea  name='subject' ><?php echo $row['subject'];?></textarea>
<br>

<input type="file" name="file" value="">

<br>
<input type="submit" name="submit">

</form>
</body>
</html>
















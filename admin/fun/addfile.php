<!DOCTYPE html>
<html>
<head>
	<title>Add File</title>
</head>
<body>
<form method="POST"   action="processaddfile.php" enctype="multipart/form-data">
	<label>type of transaction </label>
	<br>
	<select name="type">
	<option>Import</option>
	<option>Export</option>	
	</select>
<br>

	<label>adress</label>
	<br>
	<input type="" name="address">
<br>

<label>subject</label>
<br>
<textarea  name='subject'></textarea>
<br>

<input type="file" name="file">

<br>
<input type="submit" name="submit">

</form>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title>form</title>
</head>
<body>
<form action="submit" method="post" enctype="multipart/form-data">
	@csrf
	<input type="text" name="product" placeholder="product"><br>
	<input type="text" name="detail" placeholder="detail"><br>
	<input type="file" name="image" placeholder="image"><br>
	<input type="text" name="price" placeholder="price"><br>
	<button type="submit">submit</button>
</form>
</body>
</html>
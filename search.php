<?php

include 'connect.php';

if(isset($_POST['submit']))
{
	
	
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form method="post">
<div>
<label>Name:</label>
<input type="text" name="search" value="" placeholder="search" />
</div>

<div>
<button type="submit" name="submit">submit</button>
</div>
</form>

</body>
</html>
<?php
include 'connect.php';

$id=$_GET['updateid'];

$sql="select * from `crud` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];

if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$password=$_POST['password'];
	
	$sql="update `crud` set id=$id,name='$name',email='$email',mobile='$mobile',password='$password' where id=$id";
	$result=mysqli_query($con,$sql);
	
	if($result)
	{
		header('location:display.php');
	}
	else
	{
		die(mysqli_error($con));
		
}

}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>crud operation</title>
  </head>
  <body>
    <div class="container my-5">
    <div class="md-3">
   <center> <h2> User Details </h2></center>
    </div>
    <form method="post">
  <div class="mb-3">
    <label><h3>Name</h3></label>
    <input type="text" class="form-control" placeholder="enter ur name" name="name" autocomplete="off"  value=<?php echo $name;?>>
  </div>
  
  <div class="mb-3">
    <label><h3>Email</h3></label>
    <input type="email" class="form-control" placeholder="enter ur email" name="email" autocomplete="off" value=<?php echo $email;?>>
  </div>
  
  <div class="mb-3">
    <label><h3>Mobile</h3></label>
    <input type='text' class="form-control" placeholder=" enter ur mobile" name="mobile" autocomplete="off" value=<?php echo $mobile;?>>
  </div>
  
  <div class="mb-3">
    <label><h3>Password</h3></label>
    <input type="text" class="form-control" placeholder="enter ur password" name="password" autocomplete="off" value=<?php echo $password;?>>
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>

    
    </div>

    
  </body>
</html>
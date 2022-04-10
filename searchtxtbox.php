<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>search txt boxt</title>
<style>

body{
	background-color: whitesmoke;
	}
input{
	width: 40%;
	height: 5%;
	border: 1px;
	border-radius: 5px;
	padding: 8px 15px 8px 15px;
	margin: 10px 8px 15px 8px;
	box-shadow: 1px,1px,2px,1px gray;
	
}
</style>
</head>

<body>
     <center>
     <h1>Search Data from Data Box</h1>
             <form action="" method="post">
             
             <input type="text" name="id" value="" placeholder="enter here"/>
             <br/>
             <input type="submit" name="search" value="Submit" />
             </form>
       
       <?php
	   
	   $connection = mysqli_connect("localhost","root","");
	   $db=mysqli_select_db($connection,'crudoperation');
	   
	   if(isset($_POST['search']))
	   {
		   $id=$_POST['id'];
		   
		   $query="select * from crud where name='$id'";
		   
		   $query_run=mysqli_query($connection,$query);
		   
		   while($row = mysqli_fetch_array($query_run))
		 { ?> 
         <form action="" method="post">
         
         <input type="text" name="id" value="<?php echo $row['id']; ?>"/><br/>
         <input type="name" name="name" value="<?php echo $row['name']; ?>"/><br/>
         <input type="email" name="email" value="<?php echo $row['email']; ?>"/><br/>
         <input type="mobile" name="mobile" value="<?php echo $row['mobile']; ?>"/><br/>
         <input type="password" name="password" value="<?php echo $row['password']; ?>"/><br/>
         
         </form>
   
	   <?php
		 }}
	   ?>
     </center>
</body>
</html>
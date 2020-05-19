<?php
	include ('union.php');

	$con=new union();

	$usuario=$_POST['usuario'];
	$password=$_POST['password'];

	$query="SELECT * FROM `usuario` WHERE user='$usuario' AND password='$password'";
	$user=$con->query($query);
	$con->close();
	

	if($user->num_rows==1)
	{
	    ("location:ventas.php");
	}
	else 
	{
		("location:index.html");
    }


?>

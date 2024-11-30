<?php include("connect.php");


$uname=$_POST['uname'];
$password=$_POST['password'];
$utype=$_POST['utype'];

// $query="select * from user_registration where user_email='$uname' and user_password='$password' ";

	
if($utype=="admin")
{
	$q_admin="select * from admin_login where admin_username='$uname' and admin_password='$password' ";
	$res_admin=mysqli_query($cn,$q_admin);
	
	if(mysqli_affected_rows($cn))
	{
		session_start();
		$_SESSION['auname']=$uname;

		header("location:ahome.php");
	}
	else
	{
	?>
	<script language="javascript">
	alert("invalid username or password");
	window.location="login.php";</script>
	</script>
	
	<?php 
	
	}
}
	
elseif($utype=="selectUser")
	{
		$q_selectUser="select *from user_registration where user_email='$uname' and user_password='$password'";
		$res_selectUser=mysqli_query($cn,$q_selectUser);
		if(mysqli_affected_rows($cn))
		{
			if(mysqli_affected_rows($cn))
	{
		session_start();
		$_SESSION['uname']=$uname;

		header("location:aheader.php");
	}
	
			header("location:user_registration.php");
		}	
		else
		{
			?>
			<script language="javascript"> 
			alert("Invalid username or password");
			window.location="login.php";</script>
			<?php
		}
	}
	elseif($utype=="user")
	{
		$q_user="select *from user_registration where user_email='$uname' and user_password='$password'";
		$res_user=mysqli_query($cn,$q_user);
			

		if(mysqli_affected_rows($cn))
		{			while($row1=mysqli_fetch_array($res_user))
		{
			session_start();
			$_SESSION['uname']=$uname;
			$_SESSION['user_id']=$row1['user_id'];

			header("location:rindex.php");
		}
		}
	
		else
		{
		?>
		<script language="javascript">
		alert("invalid username or password");
		window.location="login.php";</script>
		</script>
		
		<?php 
		}
	}
	else
	{
		?>
		<script language="javascript">
		alert("Provide appropriate values");
		window.location="login.php";</script>
		<?php	
	}
	

?>

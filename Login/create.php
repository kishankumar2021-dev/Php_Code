<?
include 'connection.php';
if(isset($_POST['submit']))
{
	
	$name=$_POST['uname'];
	$email=$_POST['email'];
	$password=$_POST['pass'];
	$insert="insert into detail(Username,Email,Password) VALUES ('$name','$email','$password')";
	if(mysqli_query($con,$insert))
	{
		echo "insert successfully";
	}
}

?>
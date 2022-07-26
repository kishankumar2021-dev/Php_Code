<?php
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
<html>
    <head>
        <style>
            
            

        </style>
        <link href="kishan.css" rel="stylesheet"/>
    </head>
    <body>
	<form method="post" action="create.php">
        <div class="container">
            <div class="outer">
                <div class="inner">
                    <h1>Login form</h1>
					
                    Username:<input type="text" name="uname" placeholder="Enter username"/></br></br></br>
                    Email:<input type="email" placeholder="Entar your email"name="email"/></br></br></br>
                    Password:<input type="password" name="pass"></br></br></br>
                    <button name="submit">login</button>
                   
                </div>
            </div>
        </div>
		 </form>
    </body>
</html>

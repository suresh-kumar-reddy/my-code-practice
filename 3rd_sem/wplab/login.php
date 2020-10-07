<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
	</head>
	<body>		
        <center>
		<div>
			<h1> Login</h1>
			<div>
            <?php
		session_start();
                $db=new mysqli("localhost","root","","login");
                if(!$db)
                {
                    echo "failed";
                }
            
				if(isset($_POST["log"]))
				{
					$sql="select * from users where username='{$_POST["username"]}' and password='{$_POST["password"]}'";
					$res=$db->query($sql);
					if($res->num_rows>0)
					{
						$ro=$res->fetch_assoc();
						$_SESSION["username"]=$ro["username"];
						echo "<script>window.open('home.php','_self');</script>";
					}
					else
					{
						echo "<div>Invalid Username or Password</div>";
					}
					
				}
				
			?>
		
			<form method="post">
			    User Name<br>
			    <input type="text" name="username" required><br><br>
				Password<br>
				<input type="password" name="password" required><br>
				<br>
				<button type="submit" name="log">Login Here</button>
			    
				&nbsp<a href="register.php">Sign Up?</a>
			</form>
			</div>
        	</div>
            </center>
	</body>
</html>
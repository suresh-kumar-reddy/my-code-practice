<html>
    <head>
        <title>
            Sign up
        </title>
    </head>
        <center>
     <h2> Sign Up </h2>
        <form method="post">
            Username
            <input type="text" name="username" required> 
            <br><br>
            E-mail 
            &nbsp&nbsp&nbsp&nbsp&nbsp<input type="mail" name="email" required> 
            <br><br>
            Password
            <input type="password" name="password" required> 
            <br><br>

            <button type ="submit" name="reg">Sign up</button>
            <a href="login.php">login?</a>
            <br><br>
        </form>
        <?php
            $db=new mysqli("localhost","root","","login");
            if(!$db)
            {
                echo "failed";
            }
            if(isset($_POST["reg"]))
            {
                $sq="insert into users (username,email,password) values ('{$_POST["username"]}','{$_POST["email"]}','{$_POST["password"]}')";
                $res=$db->query($sq);
                echo "<script>alert('{$_POST["username"]}, Sign up Success');</script>";
                echo "<script>window.open('login.php');</script>";
            }
        ?>
        </center>

    </body>
<?php

session_start();

    include("classes/connect.php");
    include("classes/login.php");
  
    $email = "";
    $password = "";

    if($_SERVER['REQUEST_METHOD'] == 'POST') 
    {


        $login = new Login();
        $result = $login->evaluate($_POST);

        if($result != "")
        {

            echo "<div style='text-align:center;font-size:12px;color:white;background-color:grey;'>";
            echo "The following errors occured:  <br>";
            echo $result;
            echo "</div>";
        }else
        {

            header("Location: Home.php");
            die;
        }
        
        $email = $_POST['email'];
        $password = $_POST['password'];

    }
    


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/Style2.css">
    <title>TMV | Log in</title>
</head>

<body style="font-family: Tahoma; background-image: url(images/login_bkg2.jpg);	background-repeat: no-repeat;background-size: cover;margin: 0%;">
    <div class="navigation">
        
        <div class="links">
            
            <div class="link">
                <a href="Home.php">Home</a>
            </div>

            <div class="link">
                <a href="about.php">About</a>  
            </div>

            <div class="link">
                <a href="share.php"> Share</a>
            </div>

        </div>

        <div class="TMV"> 
            The Mothers Voice
        </div>

        <div class="message">
            Read...Share...Grow
        </div>

        <div class="regs">


            <div class="reg">
                <a href="signup.php">Sign up</a>
            </div>
        </div>

        <div class="brand">
            <img src="images/TMV-Header-Logo.png">
        </div>
        
    </div>

    <div id="login_box">
         <form method="post" action="">
			<h1>Log in to The Mothers Voice</h1>
			<input name="email" value="<?php echo $email ?>"  type="text" id="text" placeholder="Email">
			<br><br>
			<input name="password" value="<?php echo $password ?>" type="password" id="text" placeholder="Password">
			<br><br>
			<input type="submit" id="button" value="Log in">
        </form>
			
	</div>
</body>
</html>

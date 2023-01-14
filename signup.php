<?php

    include("classes/connect.php");
    include("classes/signup.php");

    $first_name = "";   
    $last_name = "";
    $email = "";

    if($_SERVER['REQUEST_METHOD'] == 'POST') 
    {



        $signup = new Signup();
        $result = $signup->evaluate($_POST);

        if($result != "")
        {

            echo "<div style='text-align:center;font-size:12px;color:white;background-color:grey;'>";
            echo "The following errors occured:  <br>";
            echo $result;
            echo "</div>";
        }else
        {
            header("Location: login.php");
            die;
        }
        

        $first_name = $_POST['first_name']; 
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/Style2.css">
    <title>TMV | Sign Up</title>
</head>

<body style=" font-family: Tahoma;background-color: #FCC5e2;margin: 0%;background-image: url(images/signupbkg.jpg);">
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
                <a href="login.php">Log In</a>
            </div>
        </div>

        <div class="brand">
            <img src="images/TMV-Header-Logo.png">
        </div>
        
    </div>
    <div id="signup_box">
            <h1>Sign up to The Mothers Voice</h1>

            <form method="post" action="">
                <input value="<?php echo $first_name ?>" name="first_name" type="text" id="signup_text" placeholder="First Name">
                <br><br>
                <input value="<?php echo $last_name ?>" name="last_name" type="text" id="signup_text" placeholder="Last Name">
                <br><br>
                <input value="<?php echo $email ?>" name="email" type="text" id="signup_text" placeholder="Email">
                <br><br>
                <input name="password" type="password" id="signup_text" placeholder="Password">
                <br><br>
                <input name="password2" type="password" id="signup_text" placeholder="Retype Password">
                <br><br>
                <input type="submit" id="signup_button" value="Create">
            </form>

            
        </div>



</body>

</html>
<?php
session_start();


include("classes/connect.php");
include("classes/login.php");
include("classes/user.php");

    if(isset($_SESSION['TMV_user_id']) && is_numeric($_SESSION['TMV_user_id']))
    {

        $id = $_SESSION['TMV_user_id'];
        $login = new Login();

        $result = $login->check_login($id);

        if ($result) 
        {
            $user = new User();
            $user_data = $user->get_data($id);

            if(!$user_data)
            {
                header("Location: login.php");
                die;
            }

        }else
        {
            header("Location: login.php");
            die;
        }
        
    }else
    {
        header("Location: login.php");
        die;
    }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/Style2.css">
    <title>TMV | Home</title>
</head>

<body class="homepage_body">
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

    

        <div class="greet">
                <?php echo "Welcome ".$user_data['first_name'] ?>
        </div>    

        <div class="brand">
            <img src="images/TMV-Header-Logo.png">
        </div>
        
    </div>

    <div class="coming_soon">
        <H1>Social feed coming soon...<br>
             Share your story and connect with other moms.</H1>
    </div>
</body>
</html>
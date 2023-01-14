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

<body style="background-color:whitesmoke;margin: 0%;">
    <div class="navigation">
        
        <div class="links">
            
            <div class="link">
                <a href="Home.php">Home</a>
            </div>

            <div class="link">
                <a href="About.php">About</a>  
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
                <a href="signup.php">Sign Up</a>
            </div>

            <div class="reg">
                <a href="signup.php">Log In</a>
            </div>
        </div>

        <div class="brand">
            <img src="images/TMV-Header-Logo.png">
        </div>
        
    </div>

    <div class="content">

        <div class="home_left_img1">
            <img src="images/img1.jpg">
        </div>

        <div class="home_right_txt1">
            <div class="items">
                <div class="item">
                    <div class="txtbox1">
                        <h1>Our purpose</h1>
                        <p>I created this website to give my wife a platform to share her experince with PostPartum Depression(PPD). openly disscussing PPD allows women to connect and identify the problem as earlier as possible. Sharing your story with others who may be exprincing something similar creates a community that can remove any stigma around PostPartum. My wife constantly showed me Moms on social media who seemed to only share the positive side of being new to parenthood. Being a new parent provides you with many challenges. It's okay to struggle. Your not alone! If your feeling down seek help from your doctor. The challenging times are part of the experince and you can grow through them.</p>    
                    </div>
                    <div class="bkg_img" style="background-image: url(images/hometxtbkg.jpg);">
                      
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="home_pgbk">
        <h1>Mom of the Week</h1>
    </div>

    <div class="content2">
        <div class="left-side">
            <div class="mow">
                <div class="mow_img">
                    <img src="images/img6.jpg">
                </div>
                <div class="mow_name" style="background-image: url(images/giphy.gif);">
                    Mikayla Lindler
                </div>
                
            </div>
        </div>

        <div class="right-side">
            <div class="mow_text_box">
                <p>Mikayla is a rockstar! She constantly seeks to help others. From the moment she wakes up she conqures the day supporting her family. Mikayla makes sure to provide her family with endless laughs and has an ability to find her way to a Target daily. She is a kind, compassionate, and involved mother who seeks to ensure Jax learns something new everyday. As her husband I am thankful everyday for all she does!</p>
            </div>
            <div class="submit_mow">
                <button type="submit"> Submit a Mom</button>
            </div>
            
        </div>
    </div>

</body>

</html>
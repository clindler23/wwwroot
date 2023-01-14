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

<body style="background-color: whitesmoke; margin: 0%;">
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

        </div>

        <div class="brand">
            <img src="images/TMV-Header-Logo.png">
        </div>
        
    </div>
    <div class="mikayla-story">
    <p id="p">I moved to Southern California when I was 19 years old, it was the first time I had ever been away from family and it was a total shock to me to not live in the south anymore. I adjusted pretty quickly and my husband and I really enjoyed Southern California. One of our favorite things to do was to hike Torrey pines, go to the beach, Disneyland, and hanging out with our friends who felt like family to us. In December of 2018, I got my first positive pregnancy test. It was such a shock because my husband and I were not trying. I was extremely nervous but so very excited as well. Being a mom is everything I’ve dreamed about since I was a little girl, having children of my own was truly a dream come true. We flew home that Christmas and told everyone our exciting news, some of our family even bought us our very first baby outfits as part of our Christmas gifts that year. Once we flew back to California after the holidays, I had my very first ultrasound scheduled sometime in the beginning of January. I have never felt more excited to hear my baby’s heartbeat, i waited almost 12 weeks to hear it and the day had finally come. The nurse put the Fetal Doppler over my abdomen, and the silence was deafening. I had never been more confused in my entire life, I prayed over this baby, I prayed over myself, and I prayed over this specific appointment. “You’ve had a silent miscarriage, I’m sorry there is no heartbeat”, the nurse said to me like it was a normal conversation you just speak out to someone on a daily basis, the words came off of her tongue with no hesitation or empathy. I had never heard of a silent miscarriage before it happened to me, I had always been told that I would know if I’m having a miscarriage, there would be signs present. But I had nothing. </p>
        <div class="mikayla-story-img">
            <img src="images/img1.jpg" alt=""> 
        </div>

<p id="p"> We moved across country 2 days after I had a D&C procedure. Quantico, Virginia became our new residence. We had only lived in a new state for about two months, and I got my second positive pregnancy test. 
I can’t describe how excited I felt, but how every thought of mine consisted of anxious thoughts that I was going to loose this baby too. I couldn’t just relax and let myself enjoy this pregnancy. Looking back, I don’t think I ever let myself grieve my first baby. I was constantly anxious and afraid something bad was going to happen, or scared I would miscarry again. I made it 37 weeks with Jax, he was born via emergency C-section due to him being breech and the umbilical cord was wrapped around his neck twice, causing him to loose oxygen. 
When he was born, I felt on cloud nine. It was all I ever wanted, a dream come true. I had never been more happy and full of joy in my entire life. I felt so complete and whole after grieving my whole pregnancy. I felt pure baby bliss for the first 3 days of my sons life, the anxiety had left me, the fear was gone, and I finally had in my arms what I had been praying for my whole life. </p>

        <div class="mikayla-story-img">
            <img src="images/img2.jpg" alt=""> 
        </div>

<p id="p">As soon as I got home from the hospital, it hit me hard and fast. I couldn’t stop crying, and had no idea why. I couldn’t explain it to my husband why I was so sad. I had struggled with anxiety throughout pregnancy, but all in all. I was a happy person, had an awesome husband/marriage, and was proud to be a mom. I knew I was sleep deprived and needed more rest, but even when the baby was sleeping I couldn’t sleep. The intense fear returned that I would loose my baby. I was in such a deep dark hole and I thought I would never get out of it. I reached out to a close family member about what I was feeling, I told them that I couldn’t sleep, I cried all day long literally without reason, and I had every anxious/fearful thought you could think of about my baby. I just didn’t feel good enough for my baby. I was told it was baby blues and it should go away in about 2 weeks or so. So I had hope and just held on until two weeks came, and I was still crying, still couldn’t sleep, still was very anxious and fearful that something bad would happen to my baby. After many google searches and months later, I came to the realization that I was experiencing postpartum depression and anxiety, and I felt like I was drowning and was trying to keep my head above water. I still hadn’t gotten any sleep, still cried a lot, and still was very afraid about every little thing that revolved around my baby. At my 6 week check up, I had even lied to my doctor about being depressed. I told them I was fine because I didn’t want to believe I was depressed. After all, I felt so much joy to be a mom and was so happy to have my baby. But still so depressed and lonely at the same time. Nothing ever prepares you for the 4th trimester, the lovely roller coaster of hormones and emotions, sleep deprivation, and the challenges that come with taking care of a newborn. It’s a battle that comes with you’re exhausted no matter how much sleep you get, you wonder if your baby is eating enough, sleeping enough, if you’re producing enough milk, or if you should supplement with formula. You wonder if ever little sound your newborn makes is normal. Nobody explains that you can feel an intense and strong amount of joy over having a child but also be consumed with anxiety and depression. This was my experience and I want all mothers to know that if they experience it too, they are not alone in the slightest. This too shall pass, and it will get better. Never be afraid to talk to someone, tell your doctor how you’re feeling, talk to a therapist, however you can get help. Ask for it. </p>

        <div class="mikayla-story-img">
            <img src="images/img5.jpg" alt=""> 
        </div>
</div>
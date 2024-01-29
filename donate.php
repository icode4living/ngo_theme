<?php
require __DIR__. '/vendor/autoload.php';
?>
<!DOCTYPE html> 
<html lang="en">
    <head>
        <meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.compat.css"
  />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="css/donate.css">  
      
        <title>Donate</title>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" 
        referrerpolicy="no-referrer"></script>
    </head>

    <body>
        <header class="header" id="header">
<img src="./logo/0.75x/Asset 2ldpi.png" alt="..">
        </header>
<div class="hero">
<!--Two column container for flexbox-->
    <div class="flex-container">
<div class="flex-item">
<div class="hero-text">
    <div class="fade-text">
        <span class="sm-title"><small>Help to give hope </small></span>
      <h1>  Give a helping hand to those Who need </h1>
    </div>
    <div class="fade-text">
        <span class="sm-title"><small>Support the sickle cell </small></span>
        <h1> Your donation can help save a life today</h1>
    </div>

    <div class="fade-text">
        <span class="sm-title"><small>Nothing is too small</small></span>
       <h1>Even the smallest of donations
        can help change a life
        </h1>
    </div>
    <a href="#donate" class="donate-btn">Donate now</a>

</div>

</div>

    </div>
</div>
<div class="mission">
    <div class="wow bounceInUp">
<!--<h2 class="title-center">Our Activities</h2>
<p> Our primary objective is to uplift the underprivileged 
    and bring joy to their lives</p>-->
    <section class="img-grid">
        <div class="img-round">
<img src="./donate/food-basket.png" alt="">
<h2>1,500 + </h2>
<p>Food donation</p>
        </div>
        <div class="img-round">
            <img src="./donate/education-32.png" alt="">
            <h2>300 + </h2>
            <p>Scholarship</p>
                    </div>
                    <div class="img-round">
                        <img src="./donate/empower.png" alt="">
                        <h2>1000 + </h2>
                        <p>Empowerment</p>
                                </div>
                                <div class="img-round">
                                    <img src="./donate/heart.png" alt="">
                                    <h2>200 + </h2>
                                    <p>Free Healthcare</p>
                                            </div>
    </section>
</div>
</div>
<div class="review-container">
<section class="review-text wow bounceInUp">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit
        ipsum dolor sit amet, consectetur adipisicing elit
        ipsum dolor sit amet consectetur adipisicing elitipsum dolor sit amet, consectetur adipisicing elit</p>
</section>
<section class="review-img wow bounceInUp">
<img src="./donate/medium-shot.jpg" alt="">
</section>
<span id="next"><i class="fa-solid fa-angle-left"></i></span>
<span id="prev"><i class="fa-solid fa-angle-right"></i></span>
</div>
</div>
<div class="main">

    <h1 class="title-center">Ongoing charity programs</h1>
    <div class="grid-container wow bounceIn" data-wow-duration="2s">
<div class="grid-item">
    <img src="./donate/portrait-little.jpg" alt="">

    <div class="content-box">

        <h2>Widow Empowerment</h2>
        

        <p>We are raising up 100,000,000 Naira to 
            empower 100 widows 
        </p>
        <div class="value">
            <span class="--left"><small>Raised: 800,000 NGN </small></span>
            <span class="--right"><small>Goal: 2,000,000 NGN </small></span>    
            <progress value="40" max="100">
            </progress>
    
            </div>
            <button class="pay-btn">Make a donation</button>

    </div>
</div>
<!--

-->

<div class="grid-item">
    <img src="./donate/portrait-little.jpg" alt="">
    <div class="content-box">
        <h2>Widow Empowerment</h2>
        

        <p>We are raising up 100,000,000 Naira to 
            empower 100 widows 
        </p>
       <div class="value">
        <span class="--left"><small>Raised: 700,000 NGN </small></span>
        <span class="--right"><small>Goal: 1000,0000 NGN </small></span>
        <progress value="70" max="100">
        </progress>
    </div>
    <button class="pay-btn">Make a donation </button>

    </div>
</div>
<!--

-->

<div class="grid-item">
    <img src="./donate/portrait-little.jpg" alt="">
    <div class="content-box">
        <h2>Widow Empowerment</h2>
        
        <p>We are raising up 100,000,000 Naira to 
            empower 100 widows 
        </p>
       <!-- <button class="pay-btn">Donate</button>-->
       <div class="value">
        <span class="--left"><small>Raised: 400,000 NGN </small></span>
        <span class="--right"><small>Goal: 800,000 NGN </small></span>
        <progress value="50" max="100">
        </progress>
    </div>
    <button class="pay-btn">Make a donation</button>

    </div>
</div>
    </div>

    <div class="donation-form" id="donate">
        <div class="donate-item">
    <span class="sm-title"><small>Make a donation</small></span>
<h1> Your donation will help change lives and 
    Bring huge smiles
</h1>
<form class="payment" id="paymentForm">
    <div class="input-group">
        <span>
            <input type="radio" name="pay-type"  value="one-off">

        <label for="one-off" >one-off donation</label>
    </span>
    <span>
        <input type="radio" name="pay-type" value="monthly">

        <label for="monthly">Monthly donation</label>
    </span>
    </div>
    <div class="inline-form">
    <div class="input-group">
        <label for="donation" class="block-label"> I want to Donate for</label>
            <select name="donation" id="description" required>
                <option value="" selected hidden> Select a program</option>
                <option value="sickle-cell donation">Free drugs program for Sickle cell</option>
                <option value="widow-empowerment donation">Widow Empowerment</option>
                <option value="children-education donation">Children Education</option>

            </select>
        </div>
        <div class="input-group">
            <label for="currency" class="block-label"> Currency </label>
                <select name="currency" required id="currency">
                    <option value="" selected hidden> I would donate in</option>
                    <option value="NGN">Nigerian Naira (&#8358;)</option>
                    <option value="USD">US Dollars (&#36;)</option>
                    <option value="GBP">Great Britain Pound (&#163;)</option>
                    <option value="Euro">Euro (&#8364;)</option>

                </select>
            </div>
    </div>
    <div class="ïnline-form">
    <div class="input-group">
    <label for="name" class="block-label">Names</label>
    <input type="text" name="name" placeholder="Enter your fullname"
    aria-placeholder="Fullname" aria-autocomplete="fullname" id="name">
        </div>
        <div class="input-group">
            <label for="email" class="block-label">Email</label>
            <input type="email" name="email" placeholder="someone@exmple.com" 
            aria-autocomplete="email" aria-placeholder="email" id="email">
                
        </div>
    </div>
    <div class="ïnline-form">
    <div class="input-group">
    <label for="phone" class="block-label">Mobile Number</label>
    <input type="tel" name="phone" placeholder="Enter your mobile number" 
            aria-autocomplete="phone" aria-placeholder="Enter your mobile number" id="phone">
    </div>
    <div class= "input-group">
    <label for="amount" class="block-label">How much do you want to donate?</label>
        <input type="text" name="amount" placeholder="Enter amount"
        inputmode="numeric" pattern="[0-9]*" class="amount" id="amount" required>
</div>
    </div>
    <!--<div class= "input-group">
        <h3> How much do you want to donate?</h3>
        <input type="text" name="amount" placeholder="Enter amount"
        inputmode="numeric" pattern="[0-9]*" class="amount" id="amount" required>
</div>-->
<button class="submit-payment" type="submit">Send donation</button>
</form>
        </div>
    </div>
</div>
     
    </body>
    <script src="js/donate_slide.js"></script>
    <script src="wow.js/dist/WOW.js"></script>
    <script>
        new WOW().init();
    </script>
     <script src="js/paymaster.js" type="module"></script>
    <script src="https://checkout.flutterwave.com/v3.js"></script>
</html>
<?
?>

    
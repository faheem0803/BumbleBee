<?php

require "config/constants.php";

?>
  
  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style1.css">
  <title>My Website</title>
</head>
<body>
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#hero"><h1><span>B</span>umble <span>b</span>ee</h1></a>
        </div>
        <div class="nav-list">
          <div class="hamburger"><div class="bar"></div></div>
          <ul>
            <li><a href="#hero" data-after="Home">Home</a></li>
            <li><a href="#services" data-after="Service">Services</a></li>
            <li><a href="#about" data-after="About">About</a></li>
            <li><a href="#contact" data-after="Contact">Contact</a></li>
            <li><a href="../RoyalEnfieldsign/login_form.php" data-after="Create Account">Sign In</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->


  <!-- Hero Section  -->
  <section id="hero">
    <div class="hero container">
      <div>
        <h1>We will  , <span></span></h1>
        <h1>not let <span></span></h1>
        <h1>you down BumbleBee <span></span></h1>
        <a href="../RoyalEnfieldsign/login_form.php" type="button" class="cta">Register</a>
      </div>
    </div>
  </section>
  <!-- End Hero Section  -->

  

  <!-- Service Section -->
  <section id="services">
    <div class="services container">
      <div class="service-top">
        <h1 class="section-title">Loan<span>Servi</span>ces</h1>
        <p>Loan Services 
           Service Perfection.Book your appointment and we'll come to you.Its that easy!How it Works register now.
        </p>
      </div>
      <div class="service-bottom">
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png"/></div>
          <h2>Contact US 24hr</h2>
          <p>The Tools enable the administration to track the time in order to purchase the bike.   It saves time and also increases the oppounirty.  </p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png"/></div>
          <h2>Dream Loan</h2>
          <p>You to  move quickly, focus on the Amount  ,and build a your dreams to reality , where your dreams  leads to better decisions and to your life . </p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png"/></div>
          <h2>Become Loyalty Member</h2>
          <p>•	Privacy & Security – Internet  privacy is the privacy and security level of personal data published via the internet . It is a broad term that refers to a variety of factors, techniques and technologies used to protect  customer details. </p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png"/></div>
          <h2>Feedback</h2>
          <p>Generation of reports which can view  for the staff members “if there is any bad service from the BumbleBee workers or any problem from the system.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- End Service Section -->


  
  <!-- About Section -->
  <section id="about">
    <div class="about container">
      <div class="col-left">
        <div class="about-img">
          <img src="./img/img-2.png" alt="img">
        </div>
      </div>
      <div class="col-right">
        <h1 class="section-title">About <span>Us</span></h1>
        <h2>BumbleBee Journey Since </h2>
        <p>We Believe everyone deserves to have a there dream or Purchasing there needs .Our Goal is to give customers there dreams come true ,We're excited to help you on your journey! </p>
        <a href="#" class="cta">Register</a>
      </div>
    </div>
  </section>
  <!-- End About Section -->

  <!-- Contact Section -->
  <section id="contact">
    <div class="contact container">
      <div><h1 class="section-title">Contact <span>info</span></h1></div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png"/></div>
          <div class="contact-info">
            <h1>Phone</h1>
            <h2>0771588289</h2>
            <h2>0112322220</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png"/></div>
          <div class="contact-info">
            <h1>Email</h1>
            <h2>faheem0803@gmail.com</h2>
            <h2>ICBT@edu.lk.com</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png"/></div>
          <div class="contact-info">
            <h1>Address</h1>
            <h2>Sri lanka, Colombo-14,Grandpass</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->

  <!-- Footer -->
  <section id="footer">
    <div class="footer container">
      <div class="brand"><h1><span>B</span>umble <span>B</span>ee</h1></div>
      <h2>Become the Member of BumbleBee</h2>
      <div class="social-icon">
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png"/></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png"/></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/twitter.png"/></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/behance.png"/></a>
        </div>
      </div>
      <p> ICBT © 2021 BUMBLEBEE. All rights reserved</p>
    </div>
  </section>
  <!-- End Footer -->
  <script src="./app.js"></script>
</body>
</html>
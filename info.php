<?php
$title = "Info | Kashan Abedin";
include('header.php') ?>


<!-- back home start -->
<div class="main-container back_home">
  <p><a href="index.php">HOME</a></p>
</div>
<!-- back home end -->

<!-- info content start -->
<div class="section">
  <div class="main-container align-center hideA">
    <h1 class="project-link-title" style="font-size: 40px;cursor: unset;text-align: center;">Kashan orchestrate astonishing animation and VFX projects that captivate global audiences. With almost 2 decades of industry expertise and a sharp eye on brand dynamics , he fuse creativity with strategic insight to craft compelling narratives that elevate brands to new heights.<br /></h1>
  </div>
</div>

<div class="section no-padding">
  <div class="main-container"><img src="assets/images/new_img/Kashan-Abedin-Profile.jpg" loading="lazy" sizes="(max-width: 479px) 92vw, (max-width: 767px) 90vw, (max-width: 991px) 92vw, 99vw" alt="" class="image tilt-left" />
    <br>
    <a href="index.php" target="_blank" class="button">Resumé</a>
  </div>
</div>

<div class="section">
  <div class="main-container align-center">
    <h1 class="heading-7">Chief Creative Officer at Torq Labs / Animation & Vfx Producer / Brand Consultant
      <br />‍<br />I am Kashan Abedin, a seasoned Multidiscipline Creative Director at Torq Labs. With a career spanning over 18 years, I have established myself as a leading expert in 3D animation, VFX, and a passionate advocate for VR/AR technologies. Additionally, I bring my expertise to the role of a Brand Consultant, offering valuable insights and solutions to clients seeking to elevate their brand's presence and impact.
      <br />‍<br />I pride myself on being a highly focused and action-oriented individual. With extensive experience in project management and a strong ability to build and lead teams, I am dedicated to driving projects to success. Having worked inside the GCC and consistently with both Global brands for more than 15 years, I have gained a profound understanding of market dynamics, client needs, and project requirements.
      <br />‍<br />As a VFX & Animation Director, I have been at the forefront of creating captivating and immersive visual experiences. My commitment to pushing creative boundaries has lead Torq Labs to an astonishing clientele of Global & Multinational brands including: Disney, Disney Plus, Burger King, Samsung, Toyota, STC, Mc Donald , Du, Enoc, Tasjeel, TFM Express, Carrefour, Cheetos etc.
      <br /><br />
    </h1>
  </div>
</div>

<div class="section no-padding">
  <div class="main-container"></div>
</div>

<span class="divider">
  <hr>
</span>

<div class="section">
  <div class="main-container">
    <div class="project-link-title minor_change" style="font-size: 40px;cursor: unset;">Interested in working together? Click the button below to connect. I&#x27;ll bet we&#x27;re a good fit. I can just feel it.</div>
  </div>
</div>
<!-- info content end -->

<!-- info btn's start -->
<div class="section contact-section">
  <div class="main-container">
    <a href="tel:+971506709250" class="button contact-button">
      <i class="fa-solid fa-phone"></i> Dubai
    </a>
    <a href="tel:+966547905851" class="button contact-button">
      <i class="fa-solid fa-phone"></i> Riyadh
    </a>
    <a href="mailto:info@kashanabedin.com" class="button contact-button">
      <i class="fa-solid fa-envelope"></i> info@kashanabedin.com
    </a>
  </div>
</div>

<style>
/* Base Styling */
.contact-section {
  padding: 20px;
  text-align: center; /* Center align buttons */
}

.contact-section .main-container {
  display: flex;
  flex-wrap: wrap; /* Allow buttons to wrap on smaller screens */
  justify-content: center; /* Center buttons horizontally */
  gap: 15px; /* Spacing between buttons */
}

.contact-button {
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 12px 20px;
  font-size: 16px;
  font-weight: 500;
  text-decoration: none;
  color: #fff;
  background-color: black;
  border-radius: 5px;
  transition: background-color 0.3s ease, transform 0.2s ease;
  flex: 1 1 calc(33.33% - 30px); /* Take 1/3 of container space minus gap */
  max-width: 250px; /* Limit button width */
  min-width: 150px; /* Set a minimum button width */
  text-align: center;
}

.contact-button i {
  margin-right: 8px;
  font-size: 18px;
}

.contact-button:hover,
.contact-button:focus {
  background-color: gray;
  transform: scale(1.05);
}

/* Responsive Design */
@media (max-width: 768px) {
  .contact-button {
    flex: 1 1 45%; /* Take 45% of container width */
  }
}

@media (max-width: 480px) {
  .contact-button {
    flex: 1 1 100%; /* Full width on very small screens */
    font-size: 14px;
  }

  .contact-button i {
    font-size: 16px;
    margin-right: 5px; /* Adjust spacing for smaller screens */
  }
}
</style>

<!-- info btn's end -->

<!-- logo img start -->
<div class="main-container last_img"><a href="index.php"><img src="assets/images/LOGO-Dark.svg" loading="lazy" alt="" class="logo" /></a></div>
<!-- logo img end -->

<!-- gotop btn start -->
<div class="gotop_click">
  <button type="button" class="btn btn-primary for_top_click" onclick="scrollToTop()" style="background-color: black;color:white;">^</button>
</div>
<!-- gotop btn end -->

<?php include('footer.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo isset($title) ? $title : "Home | Kashan Abedin"; ?></title>
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="Favicon.svg" type="image/x-icon" />

</head>
<body>
  
  <?php
  $title = "Home | Kashan Abedin";
  include('header.php') ?>
  
  <!-- logo img start -->
  <div class="main-container"><a href="index.php"><img src="assets/images/LOGO-Dark.svg" loading="lazy" alt="" class="logo" /></a></div>
  <!-- logo img end -->
  
  <!-- main slider start -->
  <div class="section">
    <div class="main-container">
      <div class="section-title">Selected Visuals from various projects</div>
    </div>
  
    <div class="owl-carousel owl-theme mine_slide">
      <?php for ($i = 1; $i <= 10; $i++) : ?>
        <div class="item">
          <img class="slider-image homepg_slider" src="assets/images/Main-Slider/Slider-0<?php echo $i; ?>.jpg" alt="Slide <?php echo $i; ?>" style="height: 100%;object-fit: cover;">
        </div>
      <?php endfor; ?>
    </div>
  </div>
  <!-- main slider end -->
  
  <!-- feature section start -->
  <div class="section feature_sec">
    <div class="main-container mobile">
      <div class="section-title">Featured Work</div>
      <div class="projects w-dyn-list">
        <div role="list" class="w-dyn-items">
          <?php
          $projects = [
            "Wizards of Warna Walk" => "B0APtUVf3Z0",
            "Toss" => "rTk0G0B8p3Y",
            "Wooper" => "E4Uw2s4yXfA",
            "Dilnawaz" => "qJf0BpeV8eU",
            "Oye Hoe" => "abmp3VLQrzE",
            "SAGA" => "PCO8gIRtvKs",
            "TFM" => "yH1_Ph224lQ",
            "Sky Garden" => "KWCjEnCTNnE",
            "Haier" => "2y-_Rl0U72Q",
            "Popular" => "J2xw5GERUmk",
            "Mountain Dew" => "u8Prn34G8-Y",
            "Slanty" => "yw9lfv-kiwU"
          ];
          foreach ($projects as $title => $videoId) : ?>
            <div role="listitem" class="collection-item w-dyn-item">
              <div class="project-link-title" data-modal-id="modal-<?php echo $title; ?>" style="font-size: 60px;"><?php echo $title; ?></div>
              <div class="separator"> <span class="dot">•</span></div>
            </div>
          <?php endforeach; ?>
  
          <!-- Modal code -->
          <?php foreach ($projects as $title => $videoId) : ?>
            <div id="modal-<?php echo $title; ?>" class="modal">
              <div class="modal-content youtube_video">
                <span class="close">&times;</span>
                <iframe width="850" height="500" src="https://www.youtube.com/embed/<?php echo $videoId; ?>" title="<?php echo $title; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div>
            </div>
          <?php endforeach; ?>
          <!-- End Modal code -->
        </div>
      </div>
    </div>
  </div>
  <!-- feature section start -->
  
  <!-- visuals section start -->
  <style>
  /* General Section Styling */
  .section {
    padding: 50px 20px;
    background-color: #f9f9f9;
    text-align: center;
  }
  
  .section-title {
    font-size: 32px;
    color: #333;
    margin-bottom: 30px;
    font-weight: bold;
  }
  
  /* Grid Styling */
  .w-layout-grid.grid.tooimgs {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
    justify-content: center;
    align-items: center;
  }
  
  /* Image Styling */
  .project-img {
    width: 100%;
    height: auto;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.8s ease, box-shadow 0.8s ease; /* Smooth transition */
  }
  
  /* Hover Effect */
  .project-img:hover {
    transform: scale(1.1); /* Zoom on hover */
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2); /* Enhanced shadow on hover */
  }
  
  /* Animation */
  @keyframes fadeIn {
    from {
      opacity: 0;
      transform: translateY(20px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }
  
  .project-img {
    animation: fadeIn 0.8s ease-in-out;
  }
  
  /* Responsive Styling */
  @media (max-width: 768px) {
    .section {
      padding: 30px 10px;
    }
  
    .section-title {
      font-size: 1.5rem;
    }
  
    .w-layout-grid.grid.tooimgs {
      grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
      gap: 10px;
    }
  }
  
  @media (max-width: 480px) {
    .section-title {
      font-size: 1.2rem;
    }
  
    .w-layout-grid.grid.tooimgs {
      grid-template-columns: 1fr;
      gap: 8px;
    }
  }
  /* Style for dots */
  .dot {
    color: gray; /* Gray color for dots */
    font-weight: bold;
    font-size: 50px;
    /* Optional: Make the dot bold */
  }
  
  /* General styling for slashes (optional) */
  .project-link-title span {
    color: gray; /* Default color for slashes */
  }
  
  /* end dot */
  </style>
  
  <div class="section">
    <div class="main-container">
      <div class="section-title">Selected project key visuals</div>
    </div>
    <div class="w-layout-grid grid tooimgs">
      <?php for ($i = 1; $i <= 24; $i++) : ?>
        <img class="project-img" src="assets/images/Visuals/Visuals-<?php echo sprintf('%02d', $i); ?>.jpg" loading="lazy" alt="Project Pic" />
      <?php endfor; ?>
    </div>
  </div>
  
  <!-- visuals section end -->
  
  <!-- collaborators section start -->
  <div class="section">
    <div class="main-container">
      <div class="section-title">Selected client collaborators</div>
      <div class="w-layout-grid grid-3">
        <?php
        $clients = [
          "01-Client-Disney+",
          "02-Client-HBO",
          "03-Client-Burger-King",
          "04-Client-ENOC",
          "05-Client-Lotte",
          "06-Client-Maersk",
          "07-Client-Gulf-Business-Machine",
          "08-Client-STC",
          "09-Client-Du-Telecom",
          "10-Client-Vodafone",
          "11-Client-Zurich",
          "12-Client-Haier",
          "13-Client-Unilever",
          "14-Client-Novo-Nordisk",
          "15-Client-Horlicks",
          "16-Client-Isuzu",
          "17-Client-Mountain-Dew",
          "18-Client-Candyland",
          "19-Client-McDonalds",
          "20-Client-Carrefour",
          "21-Client-Oye-Hoye-Six-Flavors",
          "22-Client-Mobilink",
          "23-Client-Cheetos",
          "24-Client-NowHealth",
          "25-Client-Monster-Energy",
          "26-Client-Toyota",
          "27-Client-Samsung",
          "28-Client-Freefire",
        ];
  
        foreach ($clients as $client) : ?>
          <img src="assets/images/Clients/<?php echo htmlspecialchars($client); ?>.png" loading="lazy" />
        <?php endforeach; ?>
      </div>
    </div>
  </div>
  <!-- collaborators section end -->
  
  <!-- agency content start -->
  <div class="section">
    <div class="main-container">
      <div class="section-title">Selected agency collaborators</div>
      <h1 class="project-link-title" style="cursor: unset;font-size: 60px;">
        Mollen Lowe <span class="dot">•</span> Creative Stew <span class="dot">•</span> Alsayegh <span class="dot">•</span> 
        Leo Burnette <span class="dot">•</span> FP7 <span class="dot">•</span> Ogilvy <span class="dot">•</span> EURO RSCG 
        <span class="dot">•</span> International Nomads <span class="dot">•</span> Tonnit Design <span class="dot">•</span> 
        Red Dot Moving Pictures <span class="dot">•</span> Azad Films <span class="dot">•</span> Post Office 
        <span class="dot">•</span> Geometry Global <span class="dot">•</span> Bulls Eye <span class="dot">•</span> Bionic Films 
        <span class="dot">•</span> Stimulus <span class="dot">•</span> Al Montage <span class="dot">•</span> DMP
      </h1>
    </div>
  </div>
  
  <span class="divider">
    <hr>
  </span>
  
  <div class="section">
    <div class="main-container">
      <div class="project-link-title minor_change" style="cursor: unset;font-size: 40px;">Interested in collaborating? Click the button below to connect. Let&#x27;s make
        great things.</div>
    </div>
  </div>
  <!-- agency content end -->
  
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
  color: white;
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
  <!-- gotop btn start -->
   <script>
    // go top start
  window.onscroll = function () {
      const button = document.querySelector('.gotop_click');
      if (document.documentElement.scrollTop > 100) {
          button.style.display = "block";
      } else {
          button.style.display = "none";
      }
  };
  
  function scrollToTop() {
      window.scrollTo({
          top: 0,
          behavior: 'smooth'
      });
  }
  // go top end
  </script>
  <div class="gotop_click">
    <button type="button" class="btn btn-primary for_top_click" onclick="scrollToTop()">^</button>
  </div>
  <!-- gotop btn end -->
  
  <style>
       .gotop_click {
  position: fixed;
  bottom: 20px;
  right: 20px;
  z-index: 1000;
  display: none;
}

.for_top_click {
  background-color: black;
  color: white;
  border: none;
  border-radius: 300px;
  cursor: pointer;
  height: 50px;
  width: 50px;
  font-size: 25px;
}

.for_top_click:hover {
  background-color: gray;
}
  </style>
  <?php include('footer.php') ?>
</body>
</html>
<?php
// Include the database connection file
include './db.php';

// Enable error reporting for debugging (optional)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Fetch data from the database
$sql = "SELECT img, title, parh FROM blog";
$result = $conn->query($sql);

if ($result === false) {
    // Log and handle query error
    error_log("Error fetching data: " . $conn->error);
    die("An error occurred while fetching blog data.");
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Top Bike Repair Services in Jehanabad | Expert Motorcycle Repair | Hero, Honda, TVS, Bajaj authorize Bike Service Center in Jehanabad</title>
  <meta name="description" content="Looking for the best bike repair in Jehanabad? Our expert team provides top-notch motorcycle repair services, and speacially we provide companies bike repair like Hero, Honda, TVS, Bajaj authorize Bike Service Center in Jehanabad. Whether you need routine maintenance, emergency repairs, or reliable scooty repair, we ensure your bike runs smoothly. Trust us for professional bike repair in Jehanabad and experience exceptional service for your two-wheeler." />
  <meta name="keywords" content="Bike repair in Jehanabad, Motorcycle repair Jehanabad, Expert bike repair services, Reliable bike repair Jehanabad, Two-wheeler repair Jehanabad, Hero, Honda, TVS, Bajaj Bike Service Center in Jehanabad" />
  <meta name="author" content="nazimtech" />
  <link rel="canonical" href="https://bikerepairservices.in/" />
  <meta name="robots" content="index, follow" />
  <meta name="googlebot" content="index, follow" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "Bike Repair in Jehanabad",
  "url": "https://bikerepairservices.in/",
  "logo": "https://bikerepairservices.in/frontend/assets/logo.jpg",
  "description": "Expert bike repair services in Jehanabad offering comprehensive motorcycle repair. Our skilled technicians provide reliable maintenance and Hero, Honda, TVS, Bajaj Bike authorized Service Center in Jehanabad, repair for all types of two-wheelers. Visit us for top-quality bike repair and exceptional service.",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Jehanabad",
    "addressLocality": "Jehanabad",
    "addressRegion": "Bihar",
    "postalCode": "804408",
    "addressCountry": "IN"
  },
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+91-8233961473",
    "contactType": "Customer Service"
  },
  "sameAs": [
    "https://www.facebook.com/YourFacebookPage",
    "https://twitter.com/YourTwitterPage",
    "https://www.linkedin.com/company/YourLinkedInPage"
  ]
}
</script>


<link rel="stylesheet" href="./frontend/frontcss.php">
<link rel="stylesheet" href="./frontend/responsive.php">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


<link rel="icon" href="../assets/logo2.jpg" type="image/x-icon">


</head>


<body>
    

<div class='subheader'>

   <a href="tel:+918233961473">
      Call us: +91 8233961473
</a>
   </div>
  
   
   <header>
      <div class='child_header'>
        <div class='logo_box'>
          <img src="./frontend/assets/logo.jpg" alt='header logo' />
        </div>

        <i class="fa-solid fa-bars menu_icon" onClick="navbar()"></i>
        <nav class="navbar_list" id="navbar">

        <i class="fa-solid fa-xmark xmark" onClick="cut()"></i>
<ul>


          <li><a  href="" target="_blank">home</a></li>
          <li><a href="./frontend/Service.php" target="_top">services</a></li>
          <li><a href="./frontend/Gallery.php" target="_top">gallery</a></li>
          <li><a href="./frontend/Contact.php" target="_top">contact us</a></li>

         

</ul>
        </nav>
      </div>
    </header>



    

    <div class='hero_section'>
        
    <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">

  <div class="carousel-inner">



  <div class="carousel-item active">
      <img src="https://i.pinimg.com/originals/ac/5d/d9/ac5dd9fe4afdc1c69bc0f1f7edaa4713.jpg" class="d-block w-100" alt="bike repair in jehanabad">
    </div>


  <div class="carousel-item ">
      <img src="https://www.themanual.com/wp-content/uploads/sites/9/2017/03/Generic-Man-Working-on-Motorcycle.jpg?p=1" class="d-block w-100" alt="scooty repair in jehenabad">
    </div>


    <div class="carousel-item">
      <img src="./frontend/assets/h4.jpg" class="d-block w-100" alt="honda bike repair">
    </div>
   
    <div class="carousel-item">
      <img src="./frontend/assets/h3.jpg" class="d-block w-100" alt="...">
    </div>
  

    <div class="carousel-item">
      <img src="./frontend/assets/h5.jpg" class="d-block w-100" alt="...">
    </div>

    <div class="carousel-item">
      <img src="./frontend/assets/h6.jpg" class="d-block w-100" alt="...">
    </div>

  
    <div class="carousel-item">
      <img src="./frontend/assets/img1.jpg" class="d-block w-100" alt="...">
    </div>

    <div class="carousel-item">
      <img src="./frontend/assets/img2.jpg" class="d-block w-100" alt="...">
    </div>

    <div class="carousel-item">
      <img src="./frontend/assets/g6.jpg" class="d-block w-100" alt="...">
    </div>

   





  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>

</div>



      </div>


      <section class='service_section'>

        <div class='service_section_child'>
        <h2>Two-Wheeler Service Center in Jehanabad: Bike Repair, Motorcycle Servicing, and Scooter Repair at Hero, Honda, TVS, Bajaj Bike authorize Services Center</h2>

<p>If you are searching for the best motorcycle services in Jehanabad, look no further. Our expert team offers comprehensive solutions for all your bike repair needs throughout Jehanabad, including Hero, Honda, TVS, and Bajaj authorize bikes. From routine maintenance to major repairs, we pride ourselves on providing reliable and professional bike repair services tailored to your specific needs. With extensive experience, we ensure your motorcycle receives the highest quality care and attention. Our reputation for professional bike repair in Jehanabad is built on a commitment to excellence and customer satisfaction. We handle every aspect of bike repair with precision, using the latest tools and techniques to ensure optimal performance and safety. Additionally, if you need reliable scooty repair in Jehanabad, we are here to help. Our team specializes in efficient repairs for all scooty models, including engine tuning, brake adjustments, and electrical system repairs. We understand the unique needs of scooties and provide targeted solutions to keep them running smoothly. Conveniently located, we are the top choice for nearby bike repair in Jehanabad and local scooty repair services across the city. Our facility is equipped to handle a wide range of repairs and maintenance tasks, including for Hero, Honda, TVS, and Bajaj bikes, ensuring quick turnaround times. Whether you are looking for minor fixes or major overhauls, our team is dedicated to delivering exceptional service with a focus on quality and reliability. Trust us to keep your bike or scooty in excellent condition. Contact us today to schedule your repair or maintenance appointment and experience the difference of our professional and friendly service. We are committed to exceeding your expectations and ensuring your satisfaction with every visit.</p>


                <div class='service_section_child_content'>
  <div class='service_card'>
    <img src="https://repairs24.in/assets/img/home/bike1.jpg" alt="Bike repair in Jehanabad - Flat tire repair service" />
    <p>Flat tire repair</p>
  </div>

  <div class='service_card'>
    <img src="https://i.pinimg.com/originals/ac/5d/d9/ac5dd9fe4afdc1c69bc0f1f7edaa4713.jpg" alt="Professional bike repair services - Brake adjustments in Jehanabad" />
    <p>Brake adjustments</p>
  </div>

  <div class='service_card'>
    <img src="https://okcredit-blog-images-prod.storage.googleapis.com/2021/05/bikerepair1.jpg" alt="Motercycle servicing in Jehanabad - Gear tuning" />
    <p>Gear tuning</p>
  </div>

  <div class='service_card'>
    <img src="https://media.istockphoto.com/photos/cropped-view-of-mechanic-using-a-wrench-on-a-motorcycle-picture-id1036010442?b=1&k=20&m=1036010442&s=170667a&w=0&h=428criDhVK1HnS-SoB3ED70bcHeBzPASdVAzv53rYcA=" alt="Local scooty repair services in Jehanabad - Chain replacement" />
    <p>Chain replacement</p>
  </div>

  <div class='service_card'>
    <img src="./frontend/assets/img5.jpg" alt="Reliable scooty repair in Jehanabad - Bearing service" />
    <p>Bearing service</p>
  </div>

  <div class='service_card'>
    <img src="./frontend/assets/img6.jpg" alt="Two-wheeler service center in Jehanabad - Frame alignment" />
    <p>Frame alignment</p>
  </div>

  <div>
  </div>
</div>


        </div>

      </section>




      <section class='banner_section'>


<div class="overlay1">

              </div>

        <div class='banner_section_child'>

        <h3>Best Bike Repair in Jehanabad: Expert Motorcycle Servicing and Reliable Scooty Repair at Hero, Honda, TVS, Bajaj Bike authorize Services Center</h3>

<p>Looking for motorcycle servicing in Jehanabad? Our premier two-wheeler service center, including Hero, Honda, TVS, and Bajaj bike service center, is dedicated to providing expert repair and maintenance for all your bike and scooty needs. From routine maintenance to major repairs, our experienced team offers professional bike repair services to ensure your motorcycle receives the best care. Additionally, we specialize in reliable scooty repair in Jehanabad, handling everything from engine tuning to brake adjustments. As the top choice for nearby bike repair in Jehanabad, we guarantee quick and dependable service for all your two-wheeler repair needs. Contact us today to schedule your appointment and discover why we are the trusted choice for both motorcycle and scooty repair in Jehanabad.</p>





        </div>


      </section>





      <section class='believe_section'>


        <div class='overlay2'>


        </div>
        <div class='believe_section_child'>


          <div class='believe_section_child_left'>

            <img src="https://wallpaperaccess.com/full/2056609.jpg" alt="" />
          </div>

          <div class='believe_section_child_right'>


            <div class='believe_section_child_right_content'>
            <h3>Why Bike Maintenance is Necessary for Your Two-Wheeler</h3>

<p>Bike maintenance is essential for keeping your two-wheeler in optimal condition. Regular motorcycle servicing helps prevent small issues from becoming major problems and identifies potential risks early. Key maintenance tasks include cleaning and lubricating the chain, and checking brakes and tyres. If you prefer professional help, our premier two-wheeler service center in Jehanabad offers expert bike repair services, including Hero, Honda, TVS, and Bajaj bikes, reliable scooty repair, and comprehensive motorcycle servicing. For local and efficient bike repair in Jehanabad, visit us to ensure your bike or scooty remains in excellent shape.</p>




            </div>


          </div>

        </div>
      </section>


      <section class='beauty_section'>

        <div class='beauty_section_beauty_child'>


          <div class='beauty_section_beauty_child_left'>
          <h3>Why Our Bike Repair Services Stands Out in Jehanabad</h3>

<p>Experience the best motorcycle services in Jehanabad at our top-rated two-wheeler service center, including Hero, Honda, TVS, and Bajaj bike service centers. We offer a wide range of bike repair services, from professional bike repair in Jehanabad to reliable scooty repair. Our expert team provides comprehensive motorcycle servicing in Jehanabad, including routine maintenance and major repairs. Whether you need local scooty repair services or nearby bike repair, we are your go-to choice for all two-wheeler repair needs. Discover why our professional bike repair services are renowned for quality and reliability. Visit us to ensure your bike or scooty remains in excellent condition.</p>




          </div>


          <div class='beauty_section_beauty_child_right'>
    <div class='beauty_section_beauty_child_right_card'>
        <img src="https://i.ytimg.com/vi/Xc8w9xjA2mw/hqdefault.jpg" alt="Pedal replacement at hrefp bike repair service in Jehanabad" />
        <p>Pedal replacement</p>
    </div>

    <div class='beauty_section_beauty_child_right_card'>
        <img src="./frontend/assets/g7.jpg" alt="Tubeless tire setup by professional bike repair services in Jehanabad" />
        <p>Tubeless tire setup</p>
    </div>

    <div class='beauty_section_beauty_child_right_card'>
        <img src="./frontend/assets/g9.jpg" alt="Cushrefm bike fitting at local scooty repair services in Jehanabad" />
        <p>Cushrefm bike fitting</p>
    </div>

    <div class='beauty_section_beauty_child_right_card'>
        <img src="./frontend/assets/img6.jpg" alt="Headset adjustment or replacement at nearby bike repair in Jehanabad" />
        <p>Headset adjustment or replacement</p>
    </div>
</div>

        </div>


      </section>


     



              <!-- blog page -->

              <div class="blog_box">
    <h2>Our Blogs & news</h2>
        <div class="slider-container">
            <?php
            // Assuming $result is your MySQLi result object
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="blog_card">';
                    echo '<img src="./uploads/' . htmlspecialchars($row["img"]) . '" alt="Blog Image" />';
                    echo '<div class="blog_card_content">';
                    echo '<h4>' . htmlspecialchars($row["title"]) . '</h4>';
                    echo '<p>' . htmlspecialchars($row["parh"]) . '</p>'; // Ensure 'parh' is the correct column name
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo '<p>No blogs available.</p>';
            }
            ?>
        </div>
</div>





      <section class='form_section'>



        <div class='form_section'>
          <h3>get in touch</h3>

        </div>

        <form class='form_section_child' id="contact_form">




          <div class='user_box'>
            <label htmlFor="">name</label>
            <input type="text" placeholder='enter the name' class="name" />
          </div>

          <div class='user_box'>
            <label htmlFor="">contact number</label>
            <input type="text" placeholder='enter the contact number' class="number" />
          </div>

          <div class='user_box'>
            <label htmlFor="">write your bike problem</label>
            <input type="text" placeholder='select the design' class="problem"/>
          </div>

          <div class='user_box'>
            <label htmlFor=""> date</label>
            <input type="date" placeholder='select the price' class="date" />
          </div>


          <div class=' form_button'>
          <input type="submit" value='submit' />
        </div>

        </form>

        

      </section>



          <!--footer section -->

          <footer class='footer_section'>


<div class='footer_section_child'>


<div class='footer_section_child_card footer_section_child_card1'>
<img src="./frontend/assets/logo.jpg" alt="bike rapair logo" />

<p>

Address: Shiv Shanker Cinema Hall, Bihar 804408
</p>

</div>

<div class='footer_section_child_card'>
<h3>get more feature</h3>

<ul>

<li><a  href="/" target="_blank">home</a></li>
          <li><a href="./frontend/Service.php" target="_top">services</a></li>
          <li><a href="./frontend/Gallery.php" target="_top">gallery</a></li>
          <li><a href="./frontend/Contact.php" target="_top">contact us</a></li>
          <li><a href="login.php" target="_top">admin</a></li>


</ul>
</div>

<div class='footer_section_child_card social_box'>
<h3>social link</h3>

<div class='icon_box'>

<a href="https://www.facebook.com/profile.php?id=100065014002333&mibextid=kFxxJD">

<i class="fa-brands fa-facebook social_icon"></i>
  </a>



<a href="https://wa.me/8233961473">
<i class="fa-brands fa-square-whatsapp social_icon"></i>
  </a>




</div>



</div>

</div>

</footer>

<section class='subfooter_section'>

<p> @ 2024 copyright reserved. designed and developed by <a href="https://www.nazimtech.cloud/" target="_blank">NTcodex systems</a> </p>

</section>

<script src="script.js"></script>


</body>
</html>



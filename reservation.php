<?php

include 'connection.php';

  if(isset($_POST['submit'])) {

    $fullname = $_POST['fullname'];
    $number = $_POST['number'];
    $guest = $_POST['guest'];
    $date = $_POST['date'];
    $destination = $_POST['destination']; 
  
    
  // echo $fullname . "<br>";
  // echo $number . "<br>";
  // echo $guest . "<br>";
  // echo $date . "<br>";
  // echo $destination . "<br>";
  

  
        $sql = "insert into `travelagency` . `booking registration`
        (fullname,number,guest,date,destination)
        values('$fullname','$number','$guest','$date','$destination')";
        
        $result = mysqli_query($connection, $sql);
  }
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>WoOx Travel Reservation Page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-woox-travel.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 580 Woox Travel

https://templatemo.com/tm-580-woox-travel

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <img src="assets/images/logo.png" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="deals.html">Deals</a></li>
                        <li><a href="reservation.html" class="active">Reservation</a></li>
                        <li><a href="reservation.html">Book Yours</a></li>
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="second-page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h4>Book Prefered Deal Here</h4>
          <h2>Make Your Reservation</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt uttersi labore et dolore magna aliqua is ipsum suspendisse ultrices gravida</p>
          <div class="main-button"><a href="about.html">Discover More</a></div>
        </div>
      </div>
    </div>
  </div>

  <div class="more-info reservation-info">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-6">
          <div class="info-item">
            <i class="fa fa-phone"></i>
            <h4>Make a Phone Call</h4>
            <a href="#">+123 456 789 (0)</a>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="info-item">
            <i class="fa fa-envelope"></i>
            <h4>Contact Us via Email</h4>
            <a href="#">company@email.com</a>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="info-item">
            <i class="fa fa-map-marker"></i>
            <h4>Visit Our Offices</h4>
            <a href="#">24th Street North Avenue London, UK</a>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="reservation-form">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12469.776493332698!2d-80.14036379941481!3d25.907788681148624!2m3!1f357.26927939317244!2f20.870722720054623!3f0!3m2!1i1024!2i768!4f35!3m3!1m2!1s0x88d9add4b4ac788f%3A0xe77469d09480fcdb!2sSunny%20Isles%20Beach!5e1!3m2!1sen!2sth!4v1642869952544!5m2!1sen!2sth" width="100%" height="450px" frameborder="0" style="border:0; border-top-left-radius: 23px; border-top-right-radius: 23px;" allowfullscreen=""></iframe>
          </div>
        </div>
        <div class="col-lg-12">
          <form id="reservation-form" name="gs" method="post" role="search">
            <div class="row">
              <div class="col-lg-12">
                <h4>Make Your <em>Reservation</em> Through This <em>Form</em></h4>
              </div>
              <div class="col-lg-6">
                  <fieldset>
                      <label for="Name" class="form-label">Your Name</label>
                      <input type="text" name="fullname" class="Name" placeholder="Enter Full Name" autocomplete="on" >
                  </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                    <label for="Number" class="form-label">Your Phone Number</label>
                    <input type="text" name="number" class="Number" placeholder="Ex. 03xx xxxxxxx" autocomplete="on" >
                </fieldset>
              </div>
              <div class="col-lg-6">
                  <fieldset>
                      <label for="chooseGuests" class="form-label">Number Of Guests</label>
                      <select name="guest" class="form-select" aria-label="Default select example" id="chooseGuests" onChange="this.form.click()">
                          <option selected>ex. 3 or 4 or 5</option>
                          <option type="checkbox" name="option1" value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4+">4+</option>
                      </select>
                  </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                    <label for="Number" class="form-label">Check In Date</label>
                    <input type="date" name="date" class="date">
                </fieldset>
              </div>
              <div class="col-lg-12">
                  <fieldset>
                      <label for="chooseDestination" class="form-label">Choose Your Destination</label>
                      <select name="destination" class="form-select" aria-label="Default select example" id="chooseCategory" onChange="this.form.click()">
                          <option selected>ex. Hunza</option>
                          <option value="Islamabad">Islamabad</option>
                          <option value="Sakardu">Sakardu</option>
                          <option value="Naran Kagan">Naran Kagan</option>
                          <option value="Sawat">Sawat</option>
                      </select>
                  </fieldset>
              </div>
              <div class="col-lg-12">                        
                  <fieldset>
                      <button class="main-button" type="submit" name="submit">Make Your Reservation Now</button>
                  </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2036 <a href="#">WoOx Travel</a> Company. All rights reserved. 
          <br>Design: <a href="https://templatemo.com" target="_blank" title="free CSS templates">TemplateMo</a></p>
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/wow.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>

<script>
    $(".option").click(function(){
      $(".option").removeClass("active");
      $(this).addClass("active"); 
    });


document.getElementById("reservation-form").addEventListener("submit", function(e) {
    let isValid = true;

    // Clear previous error messages
    const errorMessages = document.querySelectorAll('.error-message');
    errorMessages.forEach(el => el.remove());

    // Helper function to show error
    function showError(inputElement, message) {
        const error = document.createElement('div');
        error.className = 'error-message';
        error.style.color = 'red';
        error.style.fontSize = '0.9em';
        error.style.marginTop = '5px';
        error.innerText = message;
        inputElement.parentNode.appendChild(error);
        isValid = false;
    }

    // Get form fields
    const nameField = document.querySelector('input[name="fullname"]');
    const phoneField = document.querySelector('input[name="number"]');
    const guestField = document.querySelector('select[name="guest"]');
    const dateField = document.querySelector('input[name="date"]');
    const destinationField = document.querySelector('select[name="destination"]');

    // Validate each
    if (nameField.value.trim() === "") {
        showError(nameField, "Name is required.");
    }

    if (phoneField.value.trim() === "") {
        showError(phoneField, "Phone number is required.");
    }

    if (guestField.value === "ex. 3 or 4 or 5") {
        showError(guestField, "Please select number of guests.");
    }

    if (dateField.value === "") {
        showError(dateField, "Check-in date is required.");
    }

    if (destinationField.value === "ex. Kashmir") {
        showError(destinationField, "Please select a destination.");
    }

    if (!isValid) {
        e.preventDefault(); // Stop form submission if validation fails
    }
});
</script>



  

  
 </body>

</html>

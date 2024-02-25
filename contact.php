<?php
include 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];
 

  // Insert data into the database
  $sql = "INSERT INTO contact (Name, Email, Subject, Message)
          VALUES ('$name', '$email', '$subject', '$message')";

  if ($conn->query($sql) === TRUE) {
    echo '<script>alert("Thanks for contacting us!")</script>';  
    //  echo 'alert ("Registration successful!")';
  } else {
    //  echo 'alert ("Error: " . $sql . "<br>" . $conn->error)';
    echo '<script>alert("Try again later!!")</script>';  
 
  }}
?>
<?php
    include 'header.php';
?>

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2 style="margin-top:50px;">Contact</h2>
          <p>Need Help? <span>Contact Us</span></p>
        </div>
<!-- 
        <div class="mb-3">
          <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
        </div>End Google Maps -->

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-map flex-shrink-0"></i>
              <div>
                <h3>Our Address</h3>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>contact@example.com</p>

              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-share flex-shrink-0"></i>
              <div>
                <h3>Opening Hours</h3>
                <div><strong>Mon-Sat:</strong> 11AM - 23PM;
                  <strong>Sunday:</strong> Closed
                </div>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>

        <form action="contact.php" method="post"  style="padding: 40px;background-color: #f5f5f5;margin-top:20px">

              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
           
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required style="margin-top:20px">
         
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required style="margin-top:20px">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required style="margin-top:20px"></textarea>
          <input type="submit"  value="Send Message" style="margin-top:20px;background-color: #ce1212;border:none;color:white;padding:10px">
        </form>
        <!--End Contact Form -->

      </div>
    </section><!-- End Contact Section -->

    <?php 
     include 'footer.php';
     ?>

</body> 
</html>


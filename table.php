
<?php 
include 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $name=$_POST['name'];
 $mail=$_POST['email'];
 $phone=$_POST['phone'];
 $date=$_POST['date'];
 $time = $_POST['time'];
 $people = $_POST['people'];
 $message = $_POST['message'];

  // Insert data into the database
  $sql = "INSERT INTO book_table (Name, Email, Phone, Date, Time, People, Message)
          VALUES ('$name', '$mail', '$phone', '$date', '$time', '$people', '$message')";

  if ($conn->query($sql) === TRUE) {
    echo '<script>alert("Your table has been booked!")</script>';  
  } else {
    echo '<script>alert("Try again later!!")</script>';  
 
  }
    



}

?>

<?php
include 'header.php';
?>
<body>
<!-- ======= Book A Table Section ======= -->
<section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2 style="margin-top:50px;">Book A Table</h2>
          <p>Book <span>Your Stay</span> With Us</p>
        </div>

        <div class="row g-0">
<!-- 
          <div class="col-lg-4 reservation-img" style="background-image: url(assets/img/reservation.jpg);" data-aos="zoom-out" data-aos-delay="200"></div> -->

            <form action="table.php" method="post"  style="padding: 40px;background-color: #f5f5f5;margin-top:20px">

                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" required style="margin-top:20px">

                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"  required style="margin-top:20px">

                  <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone"  required style="margin-top:20px">
                  
                  <input type="text" name="date" class="form-control" id="date" placeholder="Date" required style="margin-top:20px">
                
                  <input type="text" class="form-control" name="time" id="time" placeholder="Time" required style="margin-top:20px">
                 
                  <input type="number" class="form-control" name="people" id="people" placeholder="# of people" required style="margin-top:20px">

                <textarea class="form-control" name="message" rows="5" placeholder="Message" style="margin-top:20px"></textarea>

                <input type="submit"  value="Send Message" style="margin-top:20px;background-color: #ce1212;border:none;color:white;padding:10px">
            </form>
          </div><!-- End Reservation Form -->


      </div>
    </section><!-- End Book A Table Section -->
   <!-- footer section  -->
   <?php 
  include 'footer.php';
?>

<!-- -------  -->
    
</body>
</html>
<?php
error_reporting(0);
$conn = mysqli_connect("localhost", "root","", "cafe");
if(isset($_POST['submit']))
{
 $mail=$_POST['mail'];
 $phone=$_POST['phone'];
 $q_score = $_POST['quality'];
 $feedback_txt = $_POST['suggestion'];
 mysqli_query($conn,"INSERT INTO
contact(email,phone,quality_score,feedback)VALUES('$mail','$phone','$q_score',
'$feedback_txt')");

 echo '<script>alert ("Thank you for your feedback. We\'ll appreciate!”) </script>';
}
else
echo'<script>alert ("Something wrong happened. Please try again!! “) </script>';
?>
<html>
<head>
 <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<style>
*{box-sizing:border-box;}
body{font-family: 'Open Sans', sans-serif; color:#333; font-size:14px; backgroundcolor:#dadada; padding:100px;
}
.form_box{width:450px; padding:30px;margin-left:350px; background-color:white;}
input{padding:6px; margin-bottom:0px;border:2px solid black; border-radius:3px;}
input[type="submit"]{border:none; outline:none;margin-left:140px; backgroundcolor:#679f1b; color:white;cursor:pointer;}
.heading{background-color:#ac1219; color:white; height:40px; width:100%; lineheight:40px; text-align:center;}
.shadow{
 -webkit-box-shadow: 0px 0px 17px 1px rgba(0,0,0,0.43);
-moz-box-shadow: 0px 0px 17px 1px rgba(0,0,0,0.43);
box-shadow: 0px 0px 17px 1px rgba(0,0,0,0.43);}
.pic{text-align:center; width:33%; float:left;}
#area{width:380px;}
input[type="radio"]{cursor:pointer;}
#mail{ margin-left:40px;width:72%;}
#phone{margin-left:9px;width:72%;
}
</style>
<body>
<div class="form_box shadow">
<form method="post" action="feedback.php">
<div class="heading">
 Feedback Form in PHP
</div>
<br/>
<div class="contact">
 <label for="Email"> Email:</label>
<input type="email" name="mail" id="mail" placeholder="Enter your email"
required><br><br>
<label for="Mobile">Mobile No:</label>
<input type="number" name="phone" id="phone" placeholder="Enter contact number"
required>
</div>
<h4>What do you want to rate us?</h4>
<div>
 <div class="pic">
 <input type="radio" name="quality" value="Bad" required> Bad
 </div>
 <div class="pic">

 <input type="radio" name="quality" value="Average" required> Average
 </div>
 <div class="pic">
 <input type="radio" name="quality" value="Good" required> Good
 </div>
</div>
<br>
<h4><danger>Do you have any suggestion for us?</danger> </h4>
<textarea id="area" name="suggestion" rows="8" cols="40" required></textarea>
<br><br>
 <input type="submit" name="submit" value="Submit Feedback">
</form>
</div>
</body>
</html>
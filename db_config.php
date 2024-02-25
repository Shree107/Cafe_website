<?php
$server='localhost';
$username='root';
$pass='@Shree07';
$db_name='cafe';

$conn=mysqli_connect($server,$username,$pass,$db_name);
if(!$conn){
  die ("Connection error!!".mysqli_connect_error());
}
// else echo"connection success";

?>
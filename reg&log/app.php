<?php
$name ='';
$email='';
$pass = '';
$gender = '';
//coonecting data base
session_start();
  $conn = new mysqli('localhost','root','','CRUD2') or die(mysqli_error($conn));
// saving record
if (isset($_POST['save'])){
  $name = $_POST['name'];
  $email=$_POST['email'];
  $pass = $_POST['pass'];
  $gender = $_POST['gender'];
  $conn ->query("INSERT INTO DATA (name, email, password, gender) VALUES ('$name','$email','$pass','$gender')") or die ($conn(error));
  $_SESSION['message']='seccess fully registred';
  $_SESSION['msg_type']="success";
  header("location: index.php");
}
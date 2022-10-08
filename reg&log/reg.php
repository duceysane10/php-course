<?php
include('config.php');
session_start();
if (isset($_POST['save'])){
  $name = $_POST['name'];
  $email=$_POST['email'];
  $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
  $gender = $_POST['gender'];
    //This code is for email validation
    $getEmail = "SELECT * FROM `data` WHERE email='$email'";
    $runQ = mysqli_query($conn, $getEmail);
    $findEmail = mysqli_fetch_array($runQ);
    $uEmail = $findEmail['email'];
    
    if (!$uEmail == $email) {
        $insertData ="INSERT INTO `data` ( `name`, `email`, `password`, `gender`) VALUES ('$name','$email','$pass','$gender')";
        $runQuery = mysqli_query($conn, $insertData);
        if ($runQuery) {
          $_SESSION['message']='seccess fully registred';
          $_SESSION['msg_type']="success";
          header("location: index.php");
        } else {
          $_SESSION['message']='not registered';
          $_SESSION['msg_type']="danger";
          header("location: index.php");
        }
    } else {
        $_SESSION['message']='user already exists';
          $_SESSION['msg_type']="info";
          header("location: index.php");
    }
}

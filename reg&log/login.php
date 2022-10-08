<?php
include('config.php');
session_start();
if (isset($_POST['login'])) {
    $email = $_POST['email1'];
    $password = $_POST['pass1'];
   //find email and password for login page
   $allData = "SELECT * FROM `data` WHERE email='$email' && password='$password'";
   $runQ = mysqli_query($conn,$allData);
   $row = mysqli_fetch_array($runQ);
   $myName = $row['name'];
   if($row){
    echo '<script>alert("Welcome my Dashboard")</script>';
    echo '<script>window.location.href="welcome.php"</script>';
    $_SESSION['username'] = $myName;
   }else{
    $_SESSION['message']='not incroct user or pass';
          $_SESSION['msg_type']="danger";
          header("location: index.php");
   }
    
}
<?php
session_start();
$update = false;
$id = 0;
$name = "";
$location = "";
$mysqli = new mysqli('localhost','root','','CRUD') or die(mysqli_error($mysqli));
// creating insertion funtion
if (isset($_POST['save'])){
    $name = $_POST['name'];
    $location = $_POST['location'];
    $mysqli->query("INSERT INTO Data (name,location) values ('$name','$location')") or die(mysqli->error);
    $_SESSION['message']="Record has been saved!";
    $_SESSION['msg_type']="success";
    header("location: index.php");
}

//delete function
if (isset($_GET['delete'])){
    $id =$_GET['delete'];
    $mysqli->query("DELETE FROM data WHERE id = $id") or die($mysqli->error());
    $_SESSION['message']="Record has been deleted!";
    $_SESSION['msg_type']="danger";
    header("location: index.php");
}
// update
if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $result=$mysqli->query("select * from data where id =$id") or die($mysqli->error());
    $row = $result->fetch_array();
    $name = $row['name'];
    $location = $row['location'];
    $update = True;
}

// update function
if (isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $location = $_POST['location'];
    $mysqli->query("UPDATE  Data SET name='$name',location= '$location' WHERE id= $id") or die(mysqli->error);
    $_SESSION['message']="Record has been update!";
    $_SESSION['msg_type']="warning";
    header("location: index.php");
}
?>
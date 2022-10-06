<?php
//coonecting data base
session_start();
  $conn = new mysqli('localhost','root','','CRUD2') or die(mysqli_error($conn));
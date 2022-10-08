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
<<<<<<< HEAD
if(isset($_POST['log'])) {
  if ( !isset($_POST['email1'], $_POST['pass1']) ) {
    // Could not get the data that should have been sent.
    exit('Please fill both the username and password fields!');
  }


if ($stmt = $conn->prepare('SELECT id, password FROM data WHERE email = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('s', $_POST['email1']);
	$stmt->execute();
	// Store the result so we can check if the account exists in the database.
	$stmt->store_result();
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password);
        $stmt->fetch();
        // Account exists, now we verify the password.
        // Note: remember to use password_hash in your registration file to store the hashed passwords.
        if (password_verify($_POST['pass1'], $password)) {
            // Verification success! User has logged-in!
            // Create sessions, so we know the user is logged in, they basically act like cookies but remember the data on the server.
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['email1'] = $_POST['email1'];
            $_SESSION['id'] = $id;
            echo 'Welcome ' . $_SESSION['name'] . '!';
        } else {
            // Incorrect password
            $_SESSION['message']='Incorrect username and/or password!';
              $_SESSION['msg_type']="success";
              header("location: index.php");
        }
    } else {
        // Incorrect username
          $_SESSION['message']='Incorrect username and/or password!';
              $_SESSION['msg_type']="success";
              header("location: .php");
    }

	$stmt->close();
}
}
=======
>>>>>>> 73a13fe ( compleate log and reg)

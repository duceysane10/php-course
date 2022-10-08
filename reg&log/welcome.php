<div class="welcome">
     <h2>Welcome to <?php echo $_SESSION['name']; ?></h2>
     <a class="btn" href="logout.php">Logout</a>
    </div>
//For Logout Page --logout.php
<?php
session_start();
if(session_destroy()){
    echo '<script>alert("logout")</script>';
    echo '<script>window.location.href="login.php"</script>';
}
?>
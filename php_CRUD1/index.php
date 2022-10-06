<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP CRUD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php require_once('process.php'); ?>
    <?php if (isset($_SESSION['message'])):?>
    <div class="container">
    <div class="row">
    <div class="col-md-4 col-md-offset-6">
    <div class ="alert alert-<?=$_SESSION['msg_type']; ?>">
    <?php echo $_SESSION['message'];
    unset($_SESSION['message']);
    ?>
    </div>
    </div>
    </div>
    <?php endif;?>
  
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-6">
        <h2>PHP CRUD</h2> 
        <form action="process.php" method="POST" class="form">
            <div class="form-group">
            <input type="hidden" name="id" class="form-control" value="<?php echo $id ?>">
                <lapel>name</lapel>
                <input type="text" name="name" class="form-control" placeholder="Enter Your name" value="<?php echo $name ?>">
            </div>
            <div class="form-group">
                <label>location</label>
                <input type="text" name="location" class="form-control" placeholder="Enter your location" value="<?php echo $location ?>">
            </div>
            <div class="form-group">
            <?php if ($update == true):
            ?>
            <button type="submit" class="btn btn-info" name="update">update</button>
            <?php else: ?>
                <button type="submit" class="btn btn-primary" name="save">save</button>
            <?php endif; ?>
            </div>
            
        </form>
    </div>
</div>
</div>


<?php 
    $mysqli = new mysqli('localhost','root','','CRUD') or die(mysqli_error($mysqli));
    $result = $mysqli->query('SELECT * FROM Data') or die($mysqli->mysqli_error);
    //print_r($result);
    ?>
    <div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-6">
        <h2>All Data</h2> 
        <table class="table">
            <thead>
            <tr>
            <th>Name</th>
            <th>Location</th>
            <th colspan="2">Action</th>
            </tr>
            </thead>
        <?php 
            while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['location'];?></td>
                <td><a href="index.php?edit=<?php echo $row['id'];?>" class="btn btn-info">Edit</a>
                <a href="process.php?delete=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a></td>
            </tr>
            <?php endwhile;?>            
        </table>
    </div>
    <?php 
    function pre_r($result){
        echo '<pre>';
        print_r($result);
        echo '</pre>';
    }
    ?>
    </div>
</div>
</div>
</body>
</html>
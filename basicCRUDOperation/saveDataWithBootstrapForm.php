<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Employee form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h3>Please enter your details.</h3>
        <form action="<?php $_PHP_SELF ?>" method="POST">
        <div class="mb-3">
              <label for="name" class="form-label">name</label>
              <input type="text" class="form-control" id="name" name="name">
             </div>
            <div class="mb-3">
              <label for="rule" class="form-label">rule </label>
              <input type="text" class="form-control" id="rule" name="rule">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          <?php 
          if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST["name"];
            $rule = $_POST["rule"];
            // Connecting to the Database
            $servername = "localhost";
$username = "root";
$password = "";
$dbName = "shuvos_emp";
      // Create a connection
$conn = mysqli_connect($servername, $username, $password, $dbName);
      // Die if connection was not successful
if (!$conn) {
    die("fail to connect to the database! " . mysqli_connect_error());
}
else {
            // Submit these to a database
            $sql = "INSERT INTO `emp`(`id`, `name`, `rule`, `date`) VALUES ('','$name','$rule', current_timestamp())";
            $result = mysqli_query($conn, $sql);
if ($result) {
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Your record has been submited successfully!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
else {
    // echo "the table is not created because of this error " . mysqli_error($conn);
    echo '<div class="alert alert-danger  alert-dismissible fade show" role="alert">
    <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  
}

}

          }
          ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>

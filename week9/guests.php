<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="asset/src/style.css">
    <link rel="icon" href="asset/img/icon.png" type="image/icon type">
    <title>Eli - Junior Full-stack Dev</title>
  </head>
  <body>

<?php include("./asset/inc/header.php"); ?>


<?php
  $nameErr = $emailErr = "";
  $name = $email = $message = "";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameErr = "Name is required";
    } else {
      $name = test_input($_POST["name"]);
      if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
        $nameErr = "Only letters and white space allowed";
      }
    }

    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
    } else {
      $email = test_input($_POST["email"]);
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
      }
    }
    if (empty($_POST["message"])) {
      $comment = "";
    } else {
      $comment = test_input($_POST["message"]);
    }
  }
  function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>
<?php
  if (isset($_POST['insert'])) {
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "myguests";

    // $name = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $con = mysqli_connect($hostname, $username, $password, $database);

    $q = "INSERT INTO `tbl_myguests`(`id`,`name`, `email`, `message`) VALUES ('$id','$name','$email','$message')";
    $result = mysqli_query($con, $q);
    if ($result) {
    } else {
      echo 'Data Not Inserted';
    }
    mysqli_close($con);
  }
?>
<!-- test -->
<?php

echo "<br>";
echo "<br>";

?>

<main>
  <section style="padding-bottom: 100px;" class="mt-lg-5">
  <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "myguests";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT id, name, email, message FROM tbl_myguests";
        $result = $conn->query($sql);

        echo "<h1>My Guests</h1>";
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            
            echo "<br>";
            echo "id: " . $row["id"]. " - " . $row["name"]. " " . $row["email"] ;
        }
        } else {
        echo "0 results";
        }
        $conn->close();
        ?>

  </section>
</main>

<?php include("asset/inc/footer.php"); ?>
<script>
  var i = 0,
    text;
  text = " Elizabeth Abania"

  function typing() {
    if (i < text.length) {
      document.getElementById("text").innerHTML += text.charAt(i);
      i++;
      setTimeout(typing, 100);
    }
  }
  typing();
</script>
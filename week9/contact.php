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
    $username = "webprogmi212";
    $password = "webprogmi212";
    $database = "webprogmi212";

    // $name = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $con = mysqli_connect($hostname, $username, $password, $database);

    $q = "INSERT INTO `emabania_myguests`(`id`,`name`, `email`, `message`) VALUES ('$id','$name','$email','$message')";
    $result = mysqli_query($con, $q);
    if ($result) {
    } else {
      echo 'Data Not Inserted';
    }
    mysqli_close($con);
  }
?>
<!-- test -->
<main>
  <section style="padding-bottom: 100px;" class="mt-lg-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="row text-center mt-5 mb-5">
          <h6 data-aos="fade-down"><span>Contact </span></h6>
          <h4 data-aos="fade-down">Wanna Say Something?</h4>
          <p data-aos="fade-right">Feel free to ask</p>
        </div>
        <div class="col-lg-6">
          <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            <p id="demo" class="text-black"></p>
          </div>
          <iframe class="frame" id="mymap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15449.097360368622!2d121.04093402526051!3d14.526294058613376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c8c8c683603d%3A0xe71e5f3cd00d6813!2sPinagsama%2C%20Taguig%2C%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1646354666141!5m2!1sen!2sph" width="300" height="400" style="border:0;" allowfullscreen="" loading="lazy">
          </iframe>
        </div>


        <div class="col-lg-4 offset-lg-1">
          <form action="contact.php" method="POST">
            <div class="mb-lg-3">
              <small>Name</small>
              <input type="text" class="form-control" name="name" required>
            </div>
            <div class="mb-lg-3">
              <small>Email</small>
              <input type="email" class="form-control" name="email" required>
            </div>
            <div class="mb-lg-3 mt-lg-4">
              <div class="form-floating">
                <small>Message</small>
                <textarea class="form-control" name="message" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px" required></textarea>
              </div>
            </div>
            <input type="submit" name="insert" class="text-white" value="Submit" style="background-color: red; border-radius: 5px;">
          </form>

          <div class="container mt-lg-4 shadow p-3 mb-5 bg-body-tertiary rounded" style="border-radius: 5px; background-color: var(--section)">
            <?php
            echo $name;
            echo "<br>";
            echo $email;
            echo "<br>";
            echo $message;
            ?>
          </div>
        </div>
      </div>
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
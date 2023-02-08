    <?php include("./asset/inc/header.php"); ?>
   
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
              <form action="./db.php" method="POST">
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
                    <textarea class="form-control" name="message" placeholder="Leave a comment here" id="floatingTextarea"  style="height: 100px" required></textarea>
                  </div>
                </div>
                <input type="submit" name="insert" value="Submit">
              </form>
            </div>
          </div>
      </section>
    </main>

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

    <?php include("asset/inc/footer.php"); ?>

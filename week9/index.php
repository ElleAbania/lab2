
  <?php include("./asset/inc/header.php"); ?>
  <main>
    <section class="home my-5 mt-lg-5 mt-md-5 " id="home">
      <div class="container text-center mt-5 my-5">
        <div class="row">
          <div class="col-md-7 col-sm-12">
            <h6><span>Hello</span> there,</h6>
            <h3 id="text ">I am </h3>
            <p> A 20-years old self-taught programmer, Junior Full-stack Developer</p>
          </div>
          <div class="col-md-5 mt-lg-5 pe-lg-5"><img class="home__img" src="asset/img/home1.png" style="height: 80% !important; border-radius: 500px;" width="80%" /></div>
        </div>
      </div>
    </section>

    <section class="home mt-lg-5 mt-md-5 " style="background-color: var(--section)">
      <div class="container text-center mt-5 my-5">
        <div class="row">
          <div class="col-md-6 pr-md-5 text-center mt-5">
            <img src="asset/img/home.png" width="80%" style="border-radius: 1%; object-fit: contain; opacity: 0.9;">
          </div>
          <div class="col-md-6 pl-md-4 mt-4 mb-5 col-auto">
            <h6 class="mb-3 mt-lg-5 mt-md-5"><span>Hello there! </span></h6>
            <p>Welcome to my personal blog. My name is Elizabeth Abania and I am ecstatic to share
              of what my blog has to share with you! The quantity of ideas whirling around in my thoughts is about to
              spill out.</p>
            <hr>
            <h6 class="mt-lg-3 mt-md-5"><span>An Open letter to myself</span></h6>
            <h6 class="mb-3"><span>Dear Self,</span></h6>
            <p>
              Life has peaks and valleys. Challenges you've encountered and will encounter may break you. It makes you
              question your worth, frailty, and failure. It's like a black cloud of bad thoughts that grows darker every
              time you look up for hope.
              Recently, I'm sorry I wasn't good enough to inspire, encourage, or appreciate you.
            </p>
            <p>
              I apologize for letting you hold your head low. I wasn't listening. I failed you.
              But if you can just
              blow away these clouds, you'll find a dazzling blue sky waiting for you.
            </p>
            <p>In the same way, you learn something about yourself when you search for answers to
              these challenges: ultimately, you are the only person who can help you.
              I hope you have more courage to face challenges. Stop comparing yourself to others. Accept your life's
              imperfections. Self-interest prevails. Always love and appreciate yourself before seeking others'
              approval.
              Your life isn't completely worked out as of the time I'm writing this letter. You are unsure of your
              long-term goals. Too fast. Future worries keep you up at night. In two or three years, when you read this
              letter, I hope you will be proud of your path, which helped you understand yourself.
              Surprise me with your plans.
            </p>
            <figure class="mt-lg-5">
              <figcaption class="blockquote-footer">
                Love, <cite title="Source Title">Elizabeth</cite>
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
    </section>

    <script>
      var i = 0,
        text;
      text = "Elizabeth Abania"
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
  </main>
<!-- add header - start -->
<?php require("directives/header.php"); ?>
<!-- add menu bar -->
<?php require("directives/nav_bar.php"); ?>

<div id="content-container">

<!-- template for sign up page -->
<section id="contact" class="contact-section content-section text-center">
  <div class="container">
    <div class="col-lg-8 mx-auto">
      <h2>Members Signup</h2>
        <div class="container-contact1-form-btn">
          <p>If you would like to start following photographers, sign up with a followers account. If you are a photographer or would like to start building your own portfolio, create a photographers account!</p>
          <div class="row">
            <div class="col-md-6 content-row">
              <form action="follower_signup.php">
                <button class="btn btn-default btn-sm btn-anim-i" href="follower_signup.php">
                  <span>
                    Followers Sign Up
                  </span>
                </button>
              </form>

            </div>
            <div class="col-md-6 content-row">
              <form action="photographer_signup.php">
                <button class="btn btn-default btn-sm btn-anim-i" href="photographer_signup.php">
                  <span>
                    Photographer Sign Up
                  </span>
                </button>
              </form>
            </div>
          </div>

          <br />

        </div>

    </div>


  </div>
</section>
</div>

<!-- add footer - close  -->
<?php require("directives/footer.php"); ?>

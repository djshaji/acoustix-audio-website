<?php include "header.php" ?>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<style>
  textarea {
  padding: 10px;
  max-width: 100%;
  line-height: 1.5;
  border-radius: 5px;
  border: 1px solid #ccc;
  box-shadow: 1px 1px 1px #999;
  font-size: 0.8rem;
  letter-spacing: 1px;
  -webkit-box-sizing: border-box;
       -moz-box-sizing: border-box;
            box-sizing: border-box;

}

</style>
<section class="m-3 p-3">
  <h1 class="display-3 fw-bold logo ">
    Acoustix Audio
  </h1>
  <h3 class="fw-normal text-muted">Open Source Engineering</h3>
  <hr>

  <h2>Contact us</h2>

  <?php
  // var_dump ($_POST);
  if ($_POST ['g-recaptcha-response'] != null) {
    unset ($_POST ['g-recaptcha-response']);
    file_put_contents("msgs", print_r($_POST, true) . "\n", FILE_APPEND);
    ?>
    <div class="alert alert-info shadow round">
      Your message has been sent.
    </div>
    <?php
  } else {
  ?>

  <h4 class="lead alert alert-info shadow round">Send me something nice or funny</h4>
  <form action="?" method="POST">
    <span class="lead">Your email</span>
    <input name="email" type="email" class="form-control">
    <span class="lead">Your message</span>
    <textarea name="msg" rows="5" cols="33" class="form-control"></textarea>
    <div class="mt-3 g-recaptcha" data-sitekey="6LfczO4qAAAAAOIX_uADMP0oF-Qr5Q2UdQeRFGCC"></div>
      <!-- <input type="submit" value="Submit"> -->

    <button type="submit" class="mt-2 p-2 btn-lg btn btn-primary">
      <i class="me-2 fa-solid fa-paper-plane-top"></i>
      Send
    </button>
  </form>
  <?php } ?>
</section>
<?php include "footer.php" ?>
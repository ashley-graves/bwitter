<?php include_once "inc/main.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<?php include "inc/head.php"; ?>

<body class="sessions" id="new">
  <link rel="stylesheet" href="/assets/arg.css?<?=time()?>">
  <style type="text/css">
    body {
      background: #9ae4e8 url(/images/bg.gif) fixed no-repeat top left;
      text-align: center;
      font: 0.75em/1.5 Helvetica, Arial, sans-serif;
      color: #333;
    }
  </style>

  <div id="container" class="subpage">
    <?php include "inc/header.php"; ?>
    <div id="content">
      <div class="wrapper">
        <div class="glitch gl-1">
          <h1 style="margin: 0;">Page not found.</h1>
        </div>
        <div class="glitch gl-2">
          <h2 style="margin: 0;">Unable to find the requested page.</h2>
        </div>
        <div class="glitch gl-5">
          <sup>Try again later or contact a site adminstrator if you believe this is a bug.</sup>
        </div>
        <script>document.querySelectorAll(".glitch").forEach(e => {e.children[0].dataset.text = e.innerText;});</script>
        <img style="display: block;" src="data:image/png;base64,<?php include "pages/qrcode.php"; ?>" alt="">
      </div>
    </div>
  </div>
</body>

</html>
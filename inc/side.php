<div id="side">
  <?php if(!isset($_PROFILE)) { ?>
  <?php if(!isset($_USER)) { ?>
  <div class="msg">
    <h3>Please Sign In!</h3>
  </div>
  <form method="post" class="signin" action="/sessions">
    <fieldset>
      <div>
        <label for="username_or_email">Username or Email</label>
        <input id="email" name="username_or_email" type="text" />
      </div>
      <div>
        <label for="password">Password</label>
        <input id="pass" name="password" type="password" />
      </div>
      <input id="remember_me" name="remember_me" type="checkbox" value="1" /> <label for="remember_me">Remember
        me</label>
      <small><a href="/account/resend_password">Forgot?</a></small>
      <input id="submit" name="commit" type="submit" value="Sign In!" />
    </fieldset>
  </form>

  <script type="text/javascript">
    document.getElementById('email').focus()
  </script>

  <div class="notify">
    Want an account?<br />
    <a href="/signup" class="join">Join for Free!</a><br />
    It&rsquo;s fast and easy!
  </div>
  <?php } else { ?>
  <div class="msg">
    <h3 style="margin: 0;padding: 0;">Welcome,</h3>
    <h1 style="margin: 0;padding: 0;"><a href="/<?=$_USER["username"]?>"><?=$_USER["username"]?></a></h1>
  </div>
  <p><b>Currently: </b> <i><?=count($_MYTWEETS) > 0 ? $_MYTWEETS[0]["content"] : "N/A"?></i></p>
  <ul class="featured">
    <li><strong>Latest Bweeters</strong></li>
    <?php $_OUSER = isset($_USER) ? $_USER : null; foreach($_LATEST as $_USER) { ?>
    <li>
      <a href="/<?=$_USER?>"><img alt="Logo" height="24" src="/account/profile_image/<?=$_USER?>.jpg" width="24" /></a>
      <a href="/<?=$_USER?>"><?=$_USER?></a>
    </li>
    <?php } $_USER = $_OUSER; ?>
  </ul>
  <?php } ?>
  <a href="https://discord.gg/XmmMZrp">Join our Discord Server!</a>
  <?php if(isset($_USER)) { ?>
  <form action="/sessions" method="post" style="display:inline;"><input type="submit" name="logout" value="Log Out"
      id="submit"></form>
  <?php } ?>
  <?php } else { ?>
  <div class="msg">
    <h3 style="margin: 0;padding: 0;">About</h3>
    <h1 style="margin: 0;padding: 0;"><?=$_PROFILE["username"]?></h1>
  </div>
  <p><b>Name: </b> <i><?=$_PROFILE["fullname"]?></i></p>

  <?php if(!empty($_PROFILE["bio"])) { ?>
  <p><b>Bio: </b> <i><?=$_PROFILE["bio"]?></i></p>
  <?php } ?>

  <?php if(!empty($_PROFILE["location"])) { ?>
  <p><b>Location: </b> <i><?=$_PROFILE["location"]?></i></p>
  <?php } ?>

  <?php if(!empty($_PROFILE["web"])) { ?>
  <p><b>Web: </b> <i><a href="<?=$_PROFILE["web"]?>"><?=$_PROFILE["web"]?></a></i></p>
  <?php } ?>

  <?php } ?>
</div>
<?php if(!isset($_USER) || ~$_USER["flags"] & TYPE_ADMIN) { ?>
<div id="side">
  <!-- ADVERTISEMENT -->
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <ins class="adsbygoogle" style="display:inline-block;width:162px;height:233px"
    data-ad-client="ca-pub-8808361409175246" data-ad-slot="3546673826"></ins>
  <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
  </script>
  <!-- END ADVERTISEMENT -->
  <div style="display:none;" id="plsnoad">
    <h1>Please read</h1>
    <br>
    <p>We need your help to support bwitter.me.</p>
    <p>Please consider disabling your ad blocker while visiting this website so that we can continue to
      provide this content to you free of charge.</p>
    <br>
    <p>For details on turning off your ad blocker, or to add bwitter.me to your whitelist,
      please read these instructions:</p>
    <p><a
        href="https://help.getadblock.com/support/solutions/articles/6000055743-how-to-disable-adblock-on-specific-sites">How
        to Whitelist on AdBlock</a></p>
    <p><a href="https://github.com/gorhill/uBlock/wiki/How-to-whitelist-a-web-site#click-the-big-power-button">How to
        Whitelist on uBlock</a></p>
    <br>
    <p>Best regards,<br>The Bwitter Team.</p>
  </div>
  <script defer>
    if (typeof window.adblockActive == "undefined") {
      document.getElementById("plsnoad").style.display = "inline-block";
    }
  </script>
</div>
<?php } ?>
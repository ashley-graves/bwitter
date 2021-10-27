<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Language" content="en-us" />
  <title>Bwitter: What are you doing?</title>
  <link href="/assets/main.css?<?=time()?>" media="screen, projection" rel="stylesheet" type="text/css" />
  <link rel="shortcut icon" href="/images/favicon.new.v2.1.png" type="image/png" />
  <link href="https://pro.fontawesome.com/releases/v6.0.0-beta1/css/all.css" rel="stylesheet" type="text/css" />
  <script src="/assets/main.js?<?=time()?>"></script>
  <script src="/assets/google-adsense.js"></script>
  <script src="https://twemoji.maxcdn.com/v/latest/twemoji.min.js" crossorigin="anonymous"></script>
  <script data-ad-client="ca-pub-8808361409175246" async
    src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <?php if(isset($_SINGLE) && $_SINGLE) { ?>
  <meta property="og:title" content="<?=$_PROFILE["username"]?> (@<?=$_PROFILE["username"]?>)">
  <meta property="og:url" content="/<?=$_PROFILE["username"]?>/statuses/<?=$_STATUS["id"]?>">
  <meta property="og:description" content="<?=htmlentities($_STATUS["content"], ENT_QUOTES)?>">
  <meta content="#1DA1F2" data-react-helmet="true" name="theme-color" />
  <?php } ?>
</head>
<!DOCTYPE html>
<html>
  <head>
    <title>Shawn Hoffman</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <? /* FAVICON / APPLE SHORTCUT ICON */ ?>
    <? include_once('Shared/_head-icons.php'); ?>

    <? /* CSS / LESS (Optimize before deployment) */ ?>
    <link rel="stylesheet/less" type="text/css" href="/Content/less/normalize.less" />
    <link rel="stylesheet/less" type="text/css" href="/Content/less/_application.less" />

    <? /* TOP-LOAD JS (Optimize before deployment) */ ?>
    <? include_once("Shared/_scripts_top.php"); ?>
  </head>
  <body>
    <? include_once("Shared/_stripes.php"); ?>
    <div id="wrapper">
      <section id="header">
        <img src="/Content/images/animated-mobile.png" class="animated-head-mobile" />
        <h1>Shawn Hoffman</h1>
      </section>
    </div>
    <img src="/Content/images/animated.png" class="animated-head" />
  </body>
  <? /* BOTTOM-LOAD JS (Optimize before deployment) */ ?>
  <? include_once("Shared/_scripts_bottom.php"); ?>
</html>
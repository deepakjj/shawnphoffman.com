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
      <div id="content">
        <section id="header">
          <img src="/Content/images/animated-mobile.png" class="animated-head-mobile" />
          <h1>Shawn Hoffman</h1>
          <hr />
          <div>Developer / Entrepreneur</div>
        </section>
        <section id="about">
          <h2>About</h2>
          <div>Grew up in Indiana. Graduated from Purdue University. Work for Sogeti USA. Own Trap Graphics. Co-own Diversion Development. Avid web developer. Open source contributor. Life-long learner. Problem solver.</div>
        </section>
        <section id="contact">
          <h2>Contact</h2>
          <div class="contact-icons">
            <a href="http://linkedin.com/in/shawnphoffman" target="_blank">
              <img class="svg contact-icon" src='Content/svgs/LinkedIn.svg'/>
            </a>
            <a href="https://github.com/shawnphoffman" target="_blank">
              <img class="svg contact-icon" src='Content/svgs/GitHub.svg'/>
            </a>
            <a href="http://twitter.com/trapshawn" target="_blank">
              <img class="svg contact-icon" src='Content/svgs/Twitter.svg'/>
            </a>
            <a href="http://trapgraphics.com/" target="_blank">
              <img class="svg contact-icon" src='Content/svgs/Trap.svg'/>
            </a>
            <a href="http://diversiondev.com" target="_blank">
              <img class="svg contact-icon" src='Content/svgs/DivDev.svg'/>
            </a>
            <a href="http://www.codeschool.com/users/shawnphoffman" target="_blank">
              <img class="svg contact-icon" src='Content/svgs/CodeSchool.svg'/>
            </a>
          </div>
        </section>  
      </div>
      <div id="side-profile">
        <img src="/Content/images/animated.png" class="animated-head" />  
      </div>
    </div>
  </body>
  <? /* BOTTOM-LOAD JS (Optimize before deployment) */ ?>
  <? include_once("Shared/_scripts_bottom.php"); ?>
</html>
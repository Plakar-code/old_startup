<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang=""en" xml:lang="en""> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang=""en" xml:lang="en""> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang=""en" xml:lang="en""> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9 oldie" lang=""en" xml:lang="en""> <![endif]-->
<!--[if gt IE 8]> <html class="no-js newie" lang='"en" xml:lang="en"'> <![endif]-->
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <!-- <meta name="author" content=" studio"> -->
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/modernizr-2.6.2.js"></script>

  <!-- Adaptive Images detects your visitor's screen size and automatically creates, caches, and delivers device appropriate re-scaled versions of your web page's embeded HTML images. No mark-up changes needed. It is intended for use with Responsive Designs and to be combined with Fluid Image techniques. -->
  <script>document.cookie='resolution='+Math.max(screen.width,screen.height)+'; path=/';</script><!-- Configure the $resolutions variable at the top of the adaptive-images.php file to match the breakpoints you are using for your designs. -->

    <!-- <link rel="icon" type="image/png" href="favicon.png" /> -->

  <!--Internet Explorer 8 or older doesn't support media query. This script helps ie7 and ie8 to recognize media queries-->
  <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
  <![endif]-->
    
</head>
<body>
  <div class="layout">
    <?php
        $active = 'home';
        include 'inc/header.php';
    ?>  
    <div class="content">
      <div class="container">

      </div>
    </div> <!-- end of content -->
    <div class='layout_footer'></div>
  </div>


  <?php
      include 'inc/footer.php';
  ?>    

  <!-- JavaScript at the bottom for fast page loading -->

  <?php
    include 'inc/scripts.php';
  ?> 


  <!-- Make visible media queries to IE7 , IE8 (visible only on server or localhost) -->
    <link href="http://externalcdn.com/respond-proxy.html" id="respond-proxy" rel="respond-proxy" />
    <script src="js/respond.src.js"></script>

</body>
</html>

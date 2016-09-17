<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>VoxDreamz.com | Mobile Download</title>
<meta charset="iso-8859-1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="styles/styles.css" type="text/css" media="all">
<link rel="stylesheet" href="styles/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="styles/mediaqueries.css" type="text/css" media="all">
<script src="scripts/jquery-1.7.2.min.js"></script>
<script src="scripts/jquery-mobilemenu.min.js"></script>
<script type="text/javascript" src="scripts/gen_validatorv31.js"></script>
      <script type="text/javascript" src="scripts/mootools.js"></script>
  <script type="text/javascript" src="scripts/domready_fix.js"></script>
  <script type="text/javascript" src="scripts/modal.js"></script>
  <script type="text/javascript" src="scripts/k2.js"></script>
  <script type="text/javascript" src="scripts/jcomments-v2.1.js?v=2"></script>
  <script type="text/javascript" src="scripts/ajax.js"></script>
  <script type="text/javascript" src="scripts/caption.js"></script>
<script>
$(document).ready(function () {
    $('.topnav').mobileMenu({
        combine: false,
        switchWidth: 520,
		indentString: '&nbsp;&nbsp;&nbsp;',
        prependTo: 'nav#topnav'
    });
});
</script>
<!--[if lt IE 9]>
<link rel="stylesheet" href="styles/ie.css" type="text/css" media="all">
<script src="scripts/css3-mediaqueries.min.js"></script>
<script src="scripts/html5shiv.min.js"></script>
<![endif]-->
</head>
<body>
<div class="wrapper row1">
  

<header id="header">
    <hgroup>
      <img src="images/logo.png"/>
    </hgroup>
    <!-- ################################################################################################ -->
    <nav id="topnav">
      <ul class="topnav clear">
        <li><a href="index.php">Homepage</a></li>
        <!--
        <li><a href="mobiledialer.html">Dialers</a>
		<ul>
            		<li><a href="pcdialer.html">PC Dialers</a></li>
            		<li><a href="mobiledialer.html">Mobile Dialers</a></li>
         	 </ul>
	</li>
        <li><a href="http://cdr.idialersvoip.com">Customer Login</a></li>
	<li><a href="http://reseller.idialersvoip.com">Reseller Login</a></li>
        <li ><a href="#">Rates</a></li>
	<li ><a href="#">Products</a></li>
-->
        <li class="last active"><a href="contact.html">Contact Us</a></li>
      </ul>
    </nav>
  </header>


</div>
<!-- content -->

<div class="wrapper row2">
  <div id="container" class="clear"  style="min-height:300px">
<?php
function spamcheck($field)
  {
  //filter_var() sanitizes the e-mail
  //address using FILTER_SANITIZE_EMAIL
  $field=filter_var($field, FILTER_SANITIZE_EMAIL);

  //filter_var() validates the e-mail
  //address using FILTER_VALIDATE_EMAIL
  if(filter_var($field, FILTER_VALIDATE_EMAIL))
    {
    return TRUE;
    }
  else
    {
    return FALSE;
    }
  }

if (isset($_REQUEST['email']))
  {//if "email" is filled out, proceed

  //check if the email address is invalid
  $mailcheck = spamcheck($_REQUEST['email']);
  if ($mailcheck==FALSE)
    {
    echo "Invalid input";
    }
  else
    {//send email
    $email = $_REQUEST['email'] ;
    $name = $_REQUEST['name'] ;
	$subject=$_REQUEST['subject'];
    $message = $_REQUEST['comment'] ;
    mail("rayyan@voxdreamz.com", "Subject: $subject",
    $message, "From: $email" );
    echo "<h2>Your message have been submitted to the Admin. We will contact you soon.</h2>";
	echo "$name\n$email\n$subject\n$message";
    }
  }
  else{
	 echo "<h2>Our server is experiencing some problem, Please try again later.</h2>";
  }
?>
  </div>
</div>

<!-- Copyright -->
<div class="wrapper row3">
  <footer id="copyright" class="clear">
    <p class="fl_left">Copyright &copy; 2014 - All Rights Reserved - <a href="http://VoxDreamz.com">VoxDreamz.com</a></p>
    <p class="fl_right">Designed by <a href="http://sksarts.com/" title="SKS Arts"> SKS Arts</a></p>
  </footer>
</div>
</body>
</html>
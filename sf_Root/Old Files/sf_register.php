<!DOCTYPE html>
<?php
require '../../con_test.php';
require '../../databaseConnect.php';
include '/phpFiles/sunflame_register.php';
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page for Sunflame Mountain</title>
    <link rel="stylesheet" href="landingpages_stylesheet.css">
    <meta name="description" content="Sunflame Mountain Registration Page">
    <meta name="keywords" content="unicorn, unicorns, pet site, virtual pet, pet game, fantasy, fantasy rpg">
  </head>
  <body class="HolyGrail">
    <header role="banner">
      <h1></h1>
      <div id="bannerbox">
        <img src="welcomeLogo.newGradient.png" id="logo" alt="A very cool horizontal banner">
      </div>
      <!--<div class="gobuttons">
        <a class="GoButton" href="sf_firstlogin.php">First Login</a>
        <a class="GoButton" href="sf_login.php">Login</a>
      </div>-->
    </header>
    <div class="HolyGrail-body">
      <main class="HolyGrail-text">
        <section class="summary">
          <h1>Sunflame Mountain</h1>
          <p>The soaring peak where the great astral spirit Sunflame reached forth its spiraling horn and brought the first unicorns into existence. Descending from its slopes, the unicorns have ventured forth across this wild realm, adapting and changing along the way. And in their travels, they have encountered the many children of the other astral spirits... and not all of them are kind. This is where you find yourself, at a new beginning in this world. What kind of herd will you build? What adventures will you find? What is your role in this story? The choice is yours. Join the story and begin your journey.</p>
        </section>
      </main>
      <!--<nav class="HolyGrail-nav">
      </nav>-->
      <aside class="HolyGrail-form">
        <FORM NAME ="form1" METHOD ="POST" ACTION ="sf_register.php">
            <h1>Register</h1>
            <p class="required">Required fields are followed by <abbr title="required">*</abbr>.</p>
            <div class="form-row">
              <label for="form-email">Email:<abbr title="required">*</abbr></label>
              <INPUT TYPE = 'TEXT' Name ='email' placeholder="Enter Email Address" value="<?PHP print $yourEmail;?>" >
            </div>
            <div class="form-row">
              <label for="username-enter">Username:<abbr title="required">*</abbr></label>
              <INPUT TYPE = 'TEXT' Name ='username' placeholder="Create a Username" value="<?PHP print $yourloginName;?>" >
            </div>
            <div class="form-row">
              <label for="password-enter">Password:<abbr title="required">*</abbr></label>
              <INPUT TYPE = 'password' Name ='password' placeholder="Create a Password" value="<?PHP print $yourloginPass;?>" >
            </div>
            <div class="form-row">
              <button class="submitbutton">
                <p>Register</p>
                  <!--Give login a more exciting value once complete-->
              </button>
            </div>
        </FORM>
      </aside>
    </div>
    <footer id="contentinfo" role="contentinfo">
      <p>Disclaimer: All graphics, except for site logo and display text, are used for demonstration purposes only. See credits page for image credits. All licensed graphics, where applicable, will be replaced with official site art upon commercial launch.</p>
      <p class="copyright">Copyright &copy; Ayala Atreides. Page created on <time datetime="2017-03-10">October 3rd, 2017</time>. <a class="homelink" href="../about_me_v2.html">Go Home</a></p>
      <!-- append with link back to portfolio site-->
    </footer>
  </body>
</html>

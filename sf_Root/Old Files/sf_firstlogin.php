<!DOCTYPE html>
<?php
require '../../con_test.php';
require '../../databaseConnect.php';
/*logging in: retrieve username and password values from html form, check username value to make sure it matches database, then use password_verify to check the password.
After user is loggedin, we can set a session variable: this makes it so unregistered users can't see your webpages, and will be redirected to login page. we will also redirect a user to a specific page after successful login */
include '/phpFiles/sunflame_login.php';
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sunflame Mountain Login Page</title>
    <link rel="stylesheet" href="landingpages_stylesheet.css">
    <meta name="description" content="Sunflame Mountain Registration Page">
    <meta name="keywords" content="unicorn, unicorns, pet site, virtual pet, pet game, fantasy, fantasy rpg">
  </head>
  <body class="HolyGrail">
    <header role="banner">
      <h1></h1>
      <!--welcome banner goes here, replace name with banner beneath "welcometo"-->
      <div id="bannerbox">
        <img src="welcomeLogo.newGradient.png" id="logo" alt="A very cool horizontal banner">
      </div>
      <!--<div class="gobuttons">
        <a class="GoButton" href="sf_login.php">Login</a>
        <a class="GoButton" href="sf_register.php">Register</a>
      </div>-->
    </header>
    <div class="HolyGrail-body">
      <main class="HolyGrail-text">
        <section class="summary">
          <h1>Your journey is about to begin.</h1>
          <p>Soon you'll be asked to make choices that will mark the start of your path. You will choose a region in which to settle your herd, and then you'll choose a unicorn to be the founder and leader of your herd. These choices are just the beginning, and you'll have chances to change your path later on. However, you can only begin once. Consider your choices with care. The realm has many challenges waiting for you, so be ready.</p>
        </section>
      </main>
      <!--<nav class="HolyGrail-nav">…</nav>-->
      <aside class="HolyGrail-form">
        <FORM NAME ="firstlogin" METHOD ="POST" ACTION ="sf_firstlogin.php">
            <h1 id="firstloginheader">First Login: Begin Your Adventure</h1>
            <div class="form-row">
              <label for="username-enter">Username:</label>
              <INPUT TYPE = 'TEXT' Name ='username' placeholder='Enter Username' value="<?PHP print $yourloginName;?>" maxlength="25">
            </div>
            <div class="form-row">
              <label for="password-enter">Password:</label>
              <INPUT TYPE = 'password' Name ='password' placeholder='Enter Password' value="<?PHP print $yourloginPass;?>" maxlength="255">
            </div>
            <div class="form-row">
              <button type="submit" class="submitbutton" name="firstlogin">
                <p>Login</p>
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

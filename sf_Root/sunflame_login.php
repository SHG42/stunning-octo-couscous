<!--CORE CONTENT: FORM, PARAGRAPH OF INTRO TEXT, LOGO-->

PAGE OUTLINE

SUNFLAME MOUNTAIN -- AN RPG PETSITE

LORE - CREDITS - ABOUT - FAQ - CONTACT

SOCIAL MEDIA (TUMBLR - FACEBOOK - INSTA) HERE

WELCOME BACK. ARE YOU READY TO CONTINUE YOUR JOURNEY?

LOGIN

LOGIN FORM
SUBMIT

FOOTER WITH COPYRIGHT INFO

<!doctype html>
<html class="no-js" lang="en-US">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Sunflame Mountain</title>
        <meta name="description" content="Sunflame Mountain: An RPG Pet Site. Forge your path in a realm of adventure and monsters!">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <!--CORE CONTENT: FORM, PARAGRAPH OF INTRO TEXT, LOGO-->
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
        <main>
          <h1>SUNFLAME MOUNTAIN -- <small>AN RPG PETSITE</small></h1><!--small tag recommended but is it useful? necessary?-->

          <nav id="sitemenu">
            <ul>
              <li>LORE</li>
              <li>CREDITS</li>
              <li>ABOUT</li>
              <li>FAQ</li>
              <li>CONTACT</li>
            </ul>
          </nav>

          <ul id="socialmedia">
            <li>Tumblr</li>
            <li>Facebook</li>
            <li>Instagram</li>
          </ul>

          <h2>CONTINUE YOUR ADVENTURE</h2>

            <h3>WELCOME BACK</h3>
            <p>Are you ready to continue your journey?</p>

            <h3>Log In</h3>
              <form name ="form1" method ="post" action="sunflame_login.php">
                <fieldset>
                  <legend>Login</legend>
                    <label for="user_name">Username:</label>
                    <input type="text" name="users_username" id="username_input">
                    <br>
                    <label for="user_password">Password:</label>
                    <input type="password" name="users_password" id="password_input">
                    <br>
                </fieldset>
                <input type="submit" value="Register">
              </form>
      </main>
    </body>
</html>

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
      <header>
        <h1>SUNFLAME MOUNTAIN -- <small>AN RPG PETSITE</small></h1><!--small tag recommended but is it useful? necessary?-->

        <!--LOGO HERE-->

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
      </header>
      <main>
        <h2>BEGIN YOUR ADVENTURE</h2>

          <h3>SUNFLAME MOUNTAIN:</h3>
          <p>The soaring peak where the great astral spirit Sunflame reached forth its spiraling horn and brought the first unicorns into existence. Descending from its slopes, the unicorns have ventured forth across this wild realm, adapting and changing along the way. And in their travels, they have encountered the many children of the other astral spirits... and not all of them are kind. This is where you find yourself, at a new beginning in this world. What kind of herd will you build? What adventures will you find? What is your role in this story? The choice is yours. Join the story and begin your journey.</p>

          <h3>JOIN SUNFLAME MOUNTAIN</h3>
            <form name ="form1" method ="post" action="sunflame_register.php">
              <fieldset>
                <legend>Register</legend>
                  <label for="user_email">Email:</label>
                  <input type="text" name="users_email" id="email_input">
                  <br>
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

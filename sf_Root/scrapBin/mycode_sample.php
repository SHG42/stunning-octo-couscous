<html>
  <head>
    <meta charset="utf-8">
    <title>Sample</title>
    <link rel="stylesheet" href="mycode_sample.css">
    <meta name="description" content="sample page for sharing">
    <meta name="keywords" content="sample">
  </head>
  <body><!-- function to have region summary sections appear as overlay on page load, with button to close it and see the entire map-->
    <div class="container" id="regionOnloadOverlay">
      <main class="main" id="regionOverlayBox" role="main">
        <header role="banner">
          <h1>Title Redacted</h1>
        </header>
        <!-- Make this section an overlay so that it can be closed and the entire map is visible. HAVE LOGO SMALLER IN CORNER after overlay close-->
        <section class="logobox">
          <!--banner goes here-->
          <img src="" id="logo" alt="A very cool horizontal banner">
        </section>
        <section class="chooseregion">
          <h2>Choose Your Region</h2>
          <p>Redacted</p>
          <br>
          <input type="button" class="close" id="closeOverlay" value="View the Map">
        </section>
      </main>
    </div>
    <section id="regionIcons">
      <input type="button" id="Swamp" class="launchPopup" value="Swamp"><!--OK: makes icon a button-->

      <input type="button" id="Forest" class="launchPopup" value="Forest">

      <input type="button" id="Arctic" class="launchPopup" value="Arctic">

      <input type="button" id="Mountains" class="launchPopup" value="Mountains">

      <input type="button" id="Desert" class="launchPopup" value="Desert">

      <input type="button" id="Savannah" class="launchPopup" value="Savannah">
      <!--
      /////////////////////////////////
      MODAL TESTS GO HERE
      /////////////////////////////////
      -->
      <section class="modal" role="contentinfo">
        <div class="modal-content">
          <h1 class="popupHeader"></h1>
          <p class="popupText"></p>
          <div class="chooseOrNo">
            <form name="modalform" action="mycode_sample.php" method="post">
              <button type="submit" class="popupButton" id="makeChoice" value="choosethisone">Choose This One</button>
              <button type="button" class="popupButton" id="goBack" value="nope">Return to Map</button>
            </form>
          </div>
        </div>
      </section>

      <!--
      /////////////////////////////////
      MODAL TESTS GO HERE
      /////////////////////////////////
      -->

    </section>

    <script src = "mycode_sample.js"></script>
  </body>
</html>

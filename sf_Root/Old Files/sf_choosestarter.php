<!DOCTYPE html>
<?php
require '../../con_test.php';
require '../../databaseConnect.php';

session_start();
if (!(isset($_SESSION['login']) && $_SESSION['login'] !="")) {

  header ("Location: sf_login.php");

}
/*
begin with php session. the If statement tests for two things: has a user session called login been set? is this session a blank string?
>>!(isset($_SESSION['login'])<< :function isset() checks if a session has been set. the NOT operator means we're saying "IF the session has NOT BEEN SET, then..."
>>$_SESSION['login'] !=""<< :this piece checks to see if the session is NOT a blank string.
>>If the session has been set and has a 1 in it, and if the session variable has a value of 1, then the user is logged in.
>>If the session has NOT been set and the session variable is a blank string, the user is NOT logged in and redirects to the login page.
*/
//PLACE THIS SCRIPT AT THE TOP OF EVERY RESTRICTED MEMBERS-ONLY PAGE
include '/phpFiles/regionSelect.php';
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sunflame Mountain Home Page</title>
    <link rel="stylesheet" href="starterPages_stylesheet.css">
    <noscript>
      <link rel="stylesheet" href="starterPages_noscript_stylesheet.css">
    </noscript>
    <meta name="description" content="Sunflame Mountain Registration Page">
    <meta name="keywords" content="unicorn, unicorns, pet site, virtual pet, pet game, fantasy, fantasy rpg">
  </head>
  <body class="bigbox">
    <section class="container" id="founderOnloadOverlay">
      <main class="main" id="founderOverlayBox" role="main">
        <div class="overlaycontent">
          <div class="logobox">
            <!--banner goes here-->
            <img src="welcomeLogo.newGradient.png" id="logo" alt="Welcome to Sunflame Mountain">
            <img src="welcomeLogo.flat.png" id="flatlogo" alt="Welcome to Sunflame Mountain">
          </div>
          <header role="banner">
            <h1>~Begin Your Adventure~</h1>
          </header>
          <!-- Make this section an overlay so that it can be closed and the entire map is visible. HAVE LOGO SMALLER IN CORNER after overlay close-->
          <div class="choosefounder">
            <!--<a class="temp" href="sf_chooseregion.php">................</a>-->
            <h2 class="overlaytitle">Choose Your Founder</h2>
            <p class="overlayblather">You have selected your home region. Now you must choose your herd founder. This is the unicorn with whom you'll begin your journey. You only get one custom founder and you won't be able to pick a new one later on, so follow your instincts and choose carefully.</p>
            <button type="button" class="close" id="closeOverlay">View Your Choices</button>
          </div>
        </div>
      </main>
    </section>
    <section class="unicornPen" id="founderIcons">
      <div class="unicorn_row"><!--same css rules as nav and aside classes-->
        <input type="image" src="starterUnicorns/unicons/chocolatepalocornIcon.png" id="ChocoPalo" class="launchUnicorns" value="Chocolate Palomino Unicorn"><!--OK: makes icon a button-->

        <input type="image" src="starterUnicorns/unicons/deericorn.vectorIcon.png" id="deericorn" class="launchUnicorns" value="Deerlike Unicorn">

        <input type="image" src="starterUnicorns/unicons/flaxensorrelcornIcon.png" id="flaxensorrelcorn" class="launchUnicorns" value="Flaxen Sorrel Unicorn">

        <input type="image" src="starterUnicorns/unicons/greenblackunicornIcon.png" id="greenblackunicorn" class="launchUnicorns" value="Green and Black Unicorn">
      </div>
      <div class="unicorn_row">
        <input type="image" src="starterUnicorns/unicons/heraldicbeastIcon.png" id="heraldicbeast" class="launchUnicorns" value="Heraldic Beast">

        <input type="image" src="starterUnicorns/unicons/prettyunicornIcon.png" id="pastelunicorn" class="launchUnicorns" value="Pastel Unicorn">

        <input type="image" src="starterUnicorns/unicons/starunicornIcon.png" id="starunicorn" class="launchUnicorns" value="Celestial Unicorn">

        <input type="image" src="starterUnicorns/unicons/traditionalunicornIcon.png" id="traditionalunicorn" class="launchUnicorns" value="Silver Unicorn">
      </div>
      <!--
      /////////////////////////////////
      MODAL TESTS GO HERE
      /////////////////////////////////
      -->
      <!--SCOOT THIS BOX OVER AND HAVE A LARGER PREVIEW OF THE SELECTED UNICORN NEXT TO IT-->
      <section class="modal" role="contentinfo" id="unicornModal"><!--.MODAL = .HolyGrail-->
        <div class="modal-content" id="founderPopup"><!--.modal-content = .HolyGrail-body-->
          <div class="modal-body" id="column1">
            <h1 class="popupHeader" id="unicorn-header"></h1>
            <p class="popupText" id="unicorn-text"></p>
            <div class="chooseOrNo">
              <form name="modalform" action="sf_choosestarter.php" method="post">
                <button type="submit" class="popupButton" id="makeChoice" value="choosethisone">Choose</button>
                <button type="button" class="popupButton" id="goBack" value="nope">Go Back</button>
              </form>
            </div>
          </div>
          <div class="modal-body" id="column2">
            <img src="starterUnicorns/greenblackunicorn.png" class="previewUnicorn">
          </div>
        </div><!--#column1 and #column2 = .HolyGrail-content and .HolyGrail-nav-->
      </section>
      <!--
      /////////////////////////////////
      MODAL TESTS GO HERE
      /////////////////////////////////
      -->

    </section>

    <script src = "js/choosefounder.js"></script>

  </body>
</html>

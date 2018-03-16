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
  <body class="bigbox"><!-- function to have region summary sections appear as overlay on page load, with button to close it and see the entire map-->
    <section class="container" id="regionOnloadOverlay"><!--outer modal container includes opacity layer-->
      <main class="main" id="regionOverlayBox" role="main"><!--inner modal container for the content box-->
        <div class="overlaycontent"><!--Inner container holding the actual content area-->
          <div class="logobox">
            <!--banner goes here-->
            <img src="welcomeLogo.newGradient.png" id="logo" alt="Welcome to Sunflame Mountain">
            <img src="welcomeLogo.flat.png" id="flatlogo" alt="Welcome to Sunflame Mountain">
          </div>
          <header role="banner">
            <h1>~Begin Your Adventure~</h1>
          </header>
          <!-- Make this section an overlay so that it can be closed and the entire map is visible. HAVE LOGO SMALLER IN CORNER after overlay close-->
          <div class="chooseregion">
            <h2 class="overlaytitle">Choose Your Region</h2>
            <!--<a class="temp" href="sf_choosestarter.php">................</a>-->
            <p class="overlayblather">Where would you like to begin your herd? Click the region icons on the map to view a description for each location. When you're ready, click the "Choose This Region" button. Or, click "Return to Map" to view a different region. You can migrate to a new region later, but be warned: the journey is a costly one. Each region is full of wonders... and dangers, too. Choose wisely.</p>
            <button type="button" class="close" id="closeOverlay">View the Map</button>
          </div>
        </div>
      </main>
    </section>
    <section class="yeoldemap" id="regionIcons">
          <!--WHAT WE WANT FOR REGION PREVIEW: icons placed on map, with onclick events to trigger popups with region background and summary, and button to select (onclick event?) or go back.-->
      <!-- The clickable region icons will be displayed here, below the description content -->
      <div class="onthemap">
        <input type="image" src="icons/mapIcons/mountains_mapBG.png" id="Mountains" class="launchPopup" alt="Mountains">
        <input type="image" src="icons/mapIcons/arctic_mapBG.png" id="Arctic" class="launchPopup" alt="Arctic">
      </div>
      <div class="onthemap">
        <input type="image" src="icons/mapIcons/swamp_mapBG.png" id="Swamp" class="launchPopup" alt="Swamp">
        <input type="image" src="icons/mapIcons/forest_mapBG.png" id="Forest" class="launchPopup" alt="Forest">
      </div>
      <div class="onthemap">
          <input type="image" src="icons/mapIcons/savannah_mapBG.png" id="Savannah" class="launchPopup" alt="Savannah">
          <input type="image" src="icons/mapIcons/desert_mapBG.png" id="Desert" class="launchPopup" alt="Desert">
      </div>
    </section>
    <!--
    /////////////////////////////////
    MODAL GO HERE
    /////////////////////////////////
    -->
    <section class="modal" id="mapmodal" role="contentinfo"><!--.MODAL = .HolyGrail-->
      <div class="modal-content" id="mapmodal-content"><!--.modal-content = .HolyGrail-body-->
        <div class="mapmodal-text">
          <h1 class="popupHeader" id="mapmodal-header"></h1>
          <p class="popupText" id="mapmodal-text"></p>
        </div>
        <div class="chooseOrNo" id="mapmodal-buttons">
          <form name="modalform" action="sf_chooseregion.php" method="post">
            <button type="submit" class="popupButton" id="makeChoice" value="choosethisone">Choose This Region</button>
            <button type="button" class="popupButton" id="goBack" value="nope">Return to Map</button>
          </form>
        </div><!--mapmodal-text = holygrail-content-->
      </div>
    </section>
    <!--
    /////////////////////////////////
    MODAL ENDS HERE
    /////////////////////////////////
    -->

    <script src = "js/chooseregion.js"></script>

    <noscript>
      <section class="yeoldemap" id="regionIcons">
        <div class="onthemap">
          <input type="image" src="icons/mapIcons/mountains_mapBG.png" id="Mountains" class="launchPopup" alt="Mountains">
          <section class="modal" id="mountainmodal" role="contentinfo"><!--.MODAL = .HolyGrail-->
            <div class="modal-content" id="mapmodal-content"><!--.modal-content = .HolyGrail-body-->
              <div class="mapmodal-text">
                <h1 class="popupHeader" id="mapmodal-header">The Mountains</h1>
                <p class="popupText" id="mapmodal-text">Many believe that these towering peaks are a sacred realm, due to their proximity to Sunflame Mountain. Sacred or not, the herds that live amidst the peaks must contend with perilous slopes, howling winds, and the beasts that lurk in the mist. Unicorns here are daring and observant.</p>
              </div>
              <div class="chooseOrNo" id="mapmodal-buttons">
                <form name="modalform" action="sf_chooseregion.php" method="post">
                  <button type="submit" class="popupButton" id="makeChoice" value="choosethisone">Choose This Region</button>
                  <button type="button" class="popupButton" id="goBack" value="nope">Return to Map</button>
                </form>
              </div><!--mapmodal-text = holygrail-content-->
            </div>
          </section>

          <input type="image" src="icons/mapIcons/arctic_mapBG.png" id="Arctic" class="launchPopup" alt="Arctic">
          <section class="modal" id="arcticmodal" role="contentinfo"><!--.MODAL = .HolyGrail-->
            <div class="modal-content" id="mapmodal-content"><!--.modal-content = .HolyGrail-body-->
              <div class="mapmodal-text">
                <h1 class="popupHeader" id="mapmodal-header">The Arctic</h1>
                <p class="popupText" id="mapmodal-text">A region of frigid desolation... but there is also wild, crystalline beauty for those brave enough to seek it. The soaring glaciers harbor dark, silent forests brimming with unknown wonders. The unicorns of this realm are determined and hardy creatures, experts in survival.</p>
              </div>
              <div class="chooseOrNo" id="mapmodal-buttons">
                <form name="modalform" action="sf_chooseregion.php" method="post">
                  <button type="submit" class="popupButton" id="makeChoice" value="choosethisone">Choose This Region</button>
                  <button type="button" class="popupButton" id="goBack" value="nope">Return to Map</button>
                </form>
              </div><!--mapmodal-text = holygrail-content-->
            </div>
          </section>
        </div>
        <div class="onthemap">
          <input type="image" src="icons/mapIcons/swamp_mapBG.png" id="Swamp" class="launchPopup" alt="Swamp">
          <input type="image" src="icons/mapIcons/forest_mapBG.png" id="Forest" class="launchPopup" alt="Forest">
        </div>
        <div class="onthemap">
            <input type="image" src="icons/mapIcons/savannah_mapBG.png" id="Savannah" class="launchPopup" alt="Savannah">
            <input type="image" src="icons/mapIcons/desert_mapBG.png" id="Desert" class="launchPopup" alt="Desert">
        </div>
      </section>
    </noscript>
  </body>
</html>

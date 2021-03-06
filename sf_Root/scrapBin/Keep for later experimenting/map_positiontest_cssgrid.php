<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sunflame Mountain Home Page</title>

    <style>
      html, body {
        overflow-x: hidden
      }

      html { /*BACKGROUND IMAGE: CAN JUST BE GENERIC IMAGE, have map ONLY appear after initial overlay goes away*/
        /*make this a lowres parchment or texture bg for filler*/
        box-sizing: border-box;
      } /* OK */


      * { /*THIS RESETS INVISIBLE EXTRA PADDING AND MARGINS ON TEXT ELEMENTS, allows padding to be fully individualized per element */
        padding: 0;
        margin: 0;
        border: 0;
      } /* OK */

      body { /* ESTABLISHES BODY FONT*/
        font-family: 'IM FELL English SC', sans-serif;
        color: black;
        font-size: 1.25em;
        font-style: normal;
        background-color: black;/*CHANGE LATER*/
      } /* OK */


      /*
      ----------------------------
      MODAL POPUP RULES: PERTAIN ONLY TO THE POPUP MODAL AND ITS CONTENTS!!!!
      ----------------------------
      */
      .modal {/*for the section containing the whole modal*/
        position: fixed;
        z-index: 3;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        opacity: 0;
        transition: all 0.25s ease-in-out;
        visibility: hidden;
        overflow: auto;/*added*/
      }
      .modal-content {/*for the div containing the content box*/
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color:rgba(192,192,192,0.0);
        margin: auto;
        padding: 1rem 1.5rem;
        width: auto;/*changed*/
        border-radius: 0.5rem;
        /*NEW RULES FOR BACKGROUND IMAGE vvvv*/

        background-size: contain;
        background-position: center;
        background-repeat: no-repeat;
        height: 90%;
        display: inline-block;
      }
      .popupText {
        width: 75%;
        position: relative;
        background-color:rgba(192,192,192,0.9);
        text-align: center;
        border: 0.125em groove black;
        margin: 2em auto 2em auto;
        padding: 1em;
        display: block;
      }
      .popupHeader {
        text-decoration: underline;
        width: 72%;
        position: relative;
        background-color:rgba(192,192,192,0.9);
        text-align: center;
        border: 0.125em groove black;
        margin: 2em auto 2em auto;
        padding: 1em;
        display: block;
      }
      .chooseOrNo {
        display: block;
        margin: 2em auto 2em auto;
        position: relative;
        text-align: center;
      }
      .popupButton {
        margin: 1em auto 1em auto;
        text-decoration: none;
        width: 34%;
        text-align: center;
        cursor: pointer;
        border-radius: .25rem;
        background-color: lightgray;
        padding: 0.5em;
        border: 0.125em solid darkgray;
      }
      .popupButton:hover {
        background: linear-gradient(to right, rgba(4,239,235,0.9),rgba(4,239,235,0.5));
      }
      .show-modal {
        opacity: 1;
        visibility: visible;
        transform: scaleX(1.0) scaleY(1.0);
      }
      .hide-modal {
        visibility: visible;
        opacity: 0;
        transform: scaleX(1.1) scaleY(1.1);
      }
      .hide-modal2 {
        visibility: hidden;
      }

      

      /*MEDIA QUERY FOR MAP SIZE*/
      /*MEDIA QUERY FOR GRID RESIZE*/
    </style>

    <meta name="description" content="Sunflame Mountain Registration Page">
    <meta name="keywords" content="unicorn, unicorns, pet site, virtual pet, pet game, fantasy, fantasy rpg">
  </head>
  <body class="bigbox"><!-- function to have region summary sections appear as overlay on page load, with button to close it and see the entire map-->

    <section class="yeoldemap" id="regionIcons">
          <!--WHAT WE WANT FOR REGION PREVIEW: icons placed on map, with onclick events to trigger popups with region background and summary, and button to select (onclick event?) or go back.-->
      <!-- The clickable region icons will be displayed here, below the description content -->
      <div class="rows">
        <!--<div class="maprows" id="row1"></div>
        <div class="maprows" id="row2"></div>
        <div class="maprows" id="row3"></div>-->
        <input type="image" src="icons/mapIcons/mountainIcon_txtonlySM.png" id="Mountains" class="launchPopup" alt="Mountains">
        <input type="image" src="icons/mapIcons/arcticIcon_txtonlySM.png" id="Arctic" class="launchPopup" alt="Arctic">
        <input type="image" src="icons/mapIcons/swampIcon_txtonlySM.png" id="Swamp" class="launchPopup" alt="Swamp">
        <input type="image" src="icons/mapIcons/forestIcon_txtonlySM.png" id="Forest" class="launchPopup" alt="Forest">
        <input type="image" src="icons/mapIcons/savannahIcon_txtonlySM.png" id="Savannah" class="launchPopup" alt="Savannah">
        <input type="image" src="icons/mapIcons/desertIcon_txtonlySM.png" id="Desert" class="launchPopup" alt="Desert">
        <!--<div class="onthemap" id="mtn">
        </div>
        <div class="onthemap" id="arc">
        </div>
        <div class="onthemap" id="swp">
        </div>
        <div class="onthemap" id="frs">
        </div>
        <div class="onthemap" id="svn">
        </div>
        <div class="onthemap" id="dsr">
        </div>-->
      </div>

    </section>
    <img src="testmap.jpg" class="map" id="map">

    <!--
    /////////////////////////////////
    MODAL GO HERE
    /////////////////////////////////
    -->
    <section class="modal" role="contentinfo">
      <div class="modal-content">
        <h1 class="popupHeader"></h1>
        <p class="popupText"></p>
        <div class="chooseOrNo">
          <form name="modalform" action="sf_chooseregion.php" method="post">
            <button type="submit" class="popupButton" id="makeChoice" value="choosethisone">Choose This Region</button>
            <button type="button" class="popupButton" id="goBack" value="nope">Return to Map</button>
          </form>
        </div>
      </div>
    </section>
    <!--
    /////////////////////////////////
    MODAL ENDS HERE
    /////////////////////////////////
    -->



      <script>

          //MODAL POPUP
          arcticHeader = "The Arctic" + "<BR>";
          Arctic = "A region of frigid desolation... but there is also wild, crystalline beauty for those brave enough to seek it. The soaring glaciers harbor dark, silent forests brimming with unknown wonders. The unicorns of this realm are determined and hardy creatures, experts in survival.";

          desertHeader = "The Desert" + "<BR>";
          Desert = "Unicorns here forge a life between blistering sunlight and icy-cold nights, but they are fiercely loyal to this scorching realm. The towering sand dunes offer boundless danger, but also limitless adventure. What mysteries lie in the heart of the Desert? Unicorns of this realm are shrewd and clever."

          swampHeader = "The Swamp" + "<BR>";
          Swamp = "Hazy shapes wind their way through the warm, shallow waters here. The thick canopy and dangling branches shield a labyrinth of channels, lagoons, and ponds. On islands of sturdy cypress trees, and on clusters of floating flat-bottomed boats, herds of unicorns make their homes. Unicorns of this realm are relaxed and adventurous.";

          forestHeader = "The Forest" + "<BR>";
          Forest = "Massive trees, ancient and gnarled, stand amid thick fog and lancing shafts of sunlight. The unwary soon find themselves hopelessly lost, but those who know this realm find their way with ease. The Forest bristles with life, not all of it friendly. Unicorns of this realm are studious and slow to trust.";

          savannahHeader = "The Savannah" + "<BR>";
          Savannah = "A sea of tall grass graces the Savannah, the endless golden waves dotted with twisted trees and rock outcrops. The sun shines brightly here, sometimes unbearably so, and sudden lightning storms can give the uncautious an unpleasant surprise. Unicorns of this realm are quick-witted and sharp-eyed.";

          mountainsHeader = "The Mountains" + "<BR>";
          Mountains = "Many believe that these towering peaks are a sacred realm, due to their proximity to Sunflame Mountain. Sacred or not, the herds that live amidst the peaks must contend with perilous slopes, howling winds, and the beasts that lurk in the mist. Unicorns here are daring and observant.";

          //MODAL SWITCHER
          function switchModal(launchPopup) {
            //we pass in the name of the variable that we need to use. launchPopup has the reference to all our relevant button elements
            var x = launchPopup.id;
            switch (x) {//pass x into the switch statement because it contains all the id's retrieved from our button elements.
              case 'Arctic':
                popupText.textContent = Arctic;
                popupHeader.innerHTML = arcticHeader;
                popupBG.style.backgroundImage = "url(icons/popBG/arctic_onclickBG.png)";
                break;
              case 'Desert':
                popupText.textContent = Desert;
                popupHeader.innerHTML = desertHeader;
                popupBG.style.backgroundImage = "url(icons/popBG/desert_onclickBG.png)";
                break;
              case 'Swamp':
                popupText.textContent = Swamp;
                popupHeader.innerHTML = swampHeader;
                popupBG.style.backgroundImage = "url(icons/popBG/swamp_onclickBG.png)";
                break;
              case 'Forest':
                popupText.textContent = Forest;
                popupHeader.innerHTML = forestHeader;
                popupBG.style.backgroundImage = "url(icons/popBG/forest_onclickBG.png)";
                break;
              case 'Savannah':
                popupText.textContent = Savannah;
                popupHeader.innerHTML = savannahHeader;
                popupBG.style.backgroundImage = "url(icons/popBG/savannah_onclickBG.png)";
                break;
              case 'Mountains':
                popupText.textContent = Mountains;
                popupHeader.innerHTML = mountainsHeader;
                popupBG.style.backgroundImage = "url(icons/popBG/mountains_onclickBG.png)";
                break;
              default:
                return false;
            }
          }//ONE FUNCTION TO RULE THEM ALL

          //MODAL POPUP window
          var modal = document.querySelector(".modal");//selecting the element with our class=modal
          var launchPopup = document.getElementsByClassName("launchPopup");//selecting all our icon buttons with class=launchPopup
          var closeButton = document.querySelector("#goBack");//selecting our button with id=goBack. we are only activating the close button right now,since we don't have the code for storing user choice yet
          var popupText = document.querySelector(".popupText");//selecting our p element that will hold our descriptions
          var popupBG = document.querySelector(".modal-content");//select the background image source for the popup so we can change it
          var popupHeader = document.querySelector(".popupHeader");//selects the H1 element of our popup header element

          closeButton.addEventListener("click", hideModal);
          window.addEventListener("click", windowOnClick);

          for (var i = 0; i < launchPopup.length; i++) {
            launchPopup[i].onclick = function() {
              showModal(this);
              switchModal(this);//putting it here works! Will having it outside the modal function create unexpected behaviors? Possibly not. Function is set to fire with onclick, which means the summaries shouldn't show up earlier than expected.
            }
          }
          // NAILED IT
          //for multiple buttons that do the same thing, for loop is MANDATORY!!!

          function showModal() {//function to display the modal
                  modal.classList.remove("hide-modal", "hide-modal2");//modal is the object, plugging in our variable name. classList property, remove method
                  modal.classList.add("show-modal");//modal is the object, plugged in from variable. classList property, add method

                  //vvvvCODE TO ADD MODAL CONTENT UPON MODAL LAUNCHvvvvv
                  //Code for switching content ONLY needs to go in the showModal function.
                  //popupBG.src="icons/popBG/mountains_onclickBG.png";//WORKS: sets bg source image
                  //SUMMARY SWITCHER TESTvvvvv

              }

          function hideModal() {
                  modal.classList.remove("show-modal");
                  modal.classList.add("hide-modal");
                  setTimeout(function() {
                      modal.classList.add("hide-modal2");
                  }, 250);
              }//THE TIMER: this allows for a nice transition animation on the modal

          function windowOnClick(event) {//this function hides the BG when the user clicks outside the modal, as well as on the button
                  if (event.target == modal) {
                      hideModal();
                  }
              }

      </script>

  </body>
</html>

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

//SUMMARY SWITCHER
function switchSummary(launchPopup) {
  //we pass in the name of the variable that we need to use. launchPopup has the reference to all our relevant button elements
  var x = launchPopup.id;
  switch (x) {//pass x into the switch statement because it contains all the id's retrieved from our button elements.
    case 'Arctic':
      popupText.textContent = Arctic;
      break;
    case 'Desert':
      popupText.textContent = Desert;
      break;
    case 'Swamp':
      popupText.textContent = Swamp;
      break;
    case 'Forest':
      popupText.textContent = Forest;
      break;
    case 'Savannah':
      popupText.textContent = Savannah;
      break;
    case 'Mountains':
      popupText.textContent = Mountains;
      break;
    default:
      return false;
  }
}

//BACKGROUND SWITCHER: should function more or less like summary switcher
function switchBG(launchPopup) {
  //we pass in the name of the variable that we need to use. launchPopup has the reference to all our relevant button elements which we need to access the IDs from
  var x = launchPopup.id;//we need the IDs from the buttons to assign different BACKGROUNDs to the correct IDs
  switch (x) {//pass x into the switch statement because it contains the background image source retrieved from our div element.
    case 'Arctic':
      popupHeader.innerHTML = arcticHeader;
      popupBG.style.backgroundImage = "url(icons/popBG/arctic_onclickBG.png)";
      break;
    case 'Desert':
      popupHeader.innerHTML = desertHeader;
      popupText.textContent = Desert;
      break;
    case 'Swamp':
      popupHeader.innerHTML = swampHeader;
      popupBG.style.backgroundImage = "url(icons/popBG/swamp_onclickBG.png)";
      break;
    case 'Forest':
      popupHeader.innerHTML = forestHeader;
      popupBG.style.backgroundImage = "url(icons/popBG/forest_onclickBG.png)";
      break;
    case 'Savannah':
      popupHeader.innerHTML = savannahHeader;
      popupText.textContent = Savannah;
      break;
    case 'Mountains':
      popupHeader.innerHTML = mountainsHeader;
      popupBG.style.backgroundImage = "url(icons/popBG/mountains_onclickBG.png)";
      break;
    default:
      return false;
  }//NAILED IT!!!!!
}

//MODAL POPUP
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
    switchSummary(this);//putting it here works! Will having it outside the modal function create unexpected behaviors? Possibly not. Function is set to fire with onclick, which means the summaries shouldn't show up earlier than expected.
    switchBG(this);
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

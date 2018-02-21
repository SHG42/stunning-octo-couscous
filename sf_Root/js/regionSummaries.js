Arctic = "The Arctic: A region of frigid desolation... but there is also wild, crystalline beauty for those brave enough to seek it. The soaring glaciers harbor dark, silent forests brimming with unknown wonders. The unicorns of this realm are determined and hardy creatures, experts in survival.";

Desert = "The Desert: Unicorns here forge a life between blistering sunlight and icy-cold nights, but they are fiercely loyal to this scorching realm. The towering sand dunes offer boundless danger, but also limitless adventure. What mysteries lie in the heart of the Desert? Unicorns of this realm are shrewd and clever."

Swamp = "The Swamp: Hazy shapes wind their way through the warm, shallow waters here. The thick canopy and dangling branches shield a labyrinth of channels, lagoons, and ponds. On islands of sturdy cypress trees, and on clusters of floating flat-bottomed boats, herds of unicorns make their homes. Unicorns of this realm are relaxed and adventurous.";

Forest = "The Forest: Massive trees, ancient and gnarled, stand amid thick fog and lancing shafts of sunlight. The unwary soon find themselves hopelessly lost, but those who know this realm find their way with ease. The Forest bristles with life, not all of it friendly. Unicorns of this realm are studious and slow to trust.";

Savannah = "The Savannah: A sea of tall grass graces the Savannah, the endless golden waves dotted with twisted trees and rock outcrops. The sun shines brightly here, sometimes unbearably so, and sudden lightning storms can give the uncautious an unpleasant surprise. Unicorns of this realm are quick-witted and sharp-eyed.";

Mountains = "The Mountains: Many believe that these towering peaks are a sacred realm, due to their proximity to Sunflame Mountain. Sacred or not, the herds that live amidst the peaks must contend with perilous slopes, howling winds, and the beasts that lurk in the mist. Unicorns here are daring and observant.";

//SUMMARY SWITCHER
function switchSummary(geticons) {
  //we pass in the name of the variable that we need to use. geticons has the reference to all our relevant button elements
  var x = geticons.id;
  switch (x) {//pass x into the switch statement because it contains all the id's retrieved from our button elements.
    case 'Arctic':
      para.textContent = Arctic;
      break;
    case 'Desert':
      para.textContent = Desert;
      break;
    case 'Swamp':
      para.textContent = Swamp;
      break;
    case 'Forest':
      para.textContent = Forest;
      break;
    case 'Savannah':
      para.textContent = Savannah;
      break;
    case 'Mountains':
      para.textContent = Mountains;
      break;
    default:
      return false;
  }
}

var geticons = document.getElementsByClassName("launchPopup");
var para = document.getElementById("popupText");

for (var i = 0; i < geticons.length; i++) {
  geticons[i].onclick = function() {//this loop essentially turns the total number of buttons into an array, with each button representing a position in the array and each value of i representing the position number
    //alert("a nice place to live");//testing only
    //i is a numerical value here, starting from 0. ARRAY POSITIONS.
    switchSummary(this);//this keyword declares that we are applying the function to each relevant element
  }
}

/////////////////////////////////////////////////////////////////

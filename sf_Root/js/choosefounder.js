//ONLOAD:load overlay
/*var openit = document.querySelector("body");

openit.onload = function doRegionOverlay() {
      document.getElementById("founderOnloadOverlay");
      document.getElementById("founderOnloadOverlay").style.display="flex";
    }
*///Not necessary if we set initial state of #founderOnloadOverlay to display: flex and then leave the work of hiding it to the second function VVV


//ONCLICK 1: close initial overlay
var closeit = document.getElementById("closeOverlay");

closeit.onclick = function doCloseOverlay() {
    document.getElementById("founderOnloadOverlay");
    document.getElementById("founderOnloadOverlay").style.display="none";

    document.getElementById("founderIcons");//region icons are not visible till the overlay is closed
    document.getElementById("founderIcons").style.display="inline-flex";

  }

// ONCLICK TEST 2: OLD
/*var icons = document.getElementsByClassName("launchPopup");

for (var i = 0; i < icons.length; i++) {
  icons[i].onclick = function doRegionPopup() {
    alert("A nice place to live");//test action
    //USE NEW ELEMENT METHODS TO CREATE DIV POPUP FOR REGION SUMMARIES
    //USE INNER HTML METHODS TO SWITCH IMAGE AND SUMMARY TEXT
    //TO SWITCH CONTENT, TRY IF STATEMENT AND/OR SWITCH STATEMENT LIKE IN IMAGE SCROLLER
  }
} END OLD*/

//MODAL POPUP
ChocoPaloHeader = "Chocolate Palomino Unicorn" + "<BR>";
choco = "A unicorn that arches its neck proudly as it prances. Its coat is a deep, rich brown and its mane and tail are flaxen. It holds its golden horn high.";

deericornHeader = "Deerlike Unicorn" + "<BR>";
deer = "A small, curious creature that darts between the trees. This unicorn's coat is red and tawny, spotted like a fawn's with deep purple markings. Its tail is a long, red plume."

flaxensorrelcornHeader = "Flaxen Sorrel Unicorn" + "<BR>";
flaxen = "A spirited unicorn with fiery eyes. Its coat is a deep, coppery red and its mane and tail are a soft flaxen color. It paws the ground and swings its golden horn side to side.";

greenblackunicornHeader = "Green and Black Unicorn" + "<BR>";
dream = "A ghostly, translucent creature of ink-black coat. Its mane, tail, legs, and horn shine with green iridescence. Its eyes glow softly as if stars burn within. You feel as if you've seen this creature in a dream...";

heraldicbeastHeader = "Heraldic Beast" + "<BR>";
heraldic = "A noble beast with a snowy white coat. Its flowing mane and tail are golden, its horn is metallic gold. It bears a sword, which it seems to be offering to you...";

pastelunicornHeader = "Pastel Unicorn" + "<BR>";
pastel = "An elegant unicorn, delicately built. Its coat is a gentle pastel purple, its mane and tail soft white. Its horn and eyes are a bright, vivid purple.";

starunicornHeader = "Celestial Unicorn" + "<BR>";
starry = "A magnificent unicorn whose coat is the deep purple of the galaxy. Its mane, tail, and horn glitter with starlight. Its hooves strike sparks as it walks.";

traditionalunicornHeader = "Silver Unicorn" + "<BR>";
oldschool = "A unicorn with a graceful, silver horn. Its coat gleams pristine white, its mane and tail are shining silver. It watches you with wise, all-knowing eyes.";

//SUMMARY SWITCHER
function switchSummary(launchUnicorns) {
  //we pass in the name of the variable that we need to use. launchPopup has the reference to all our relevant button elements
  var x = launchUnicorns.id;
  switch (x) {//pass x into the switch statement because it contains all the id's retrieved from our button elements.
    case 'ChocoPalo':
      popupHeader.innerHTML = ChocoPaloHeader;
      popupText.textContent = choco;
      break;
    case 'deericorn':
      popupHeader.innerHTML = deericornHeader;
      popupText.textContent = deer;
      break;
    case 'flaxensorrelcorn':
      popupHeader.innerHTML = flaxensorrelcornHeader;
      popupText.textContent = flaxen;
      break;
    case 'greenblackunicorn':
      popupHeader.innerHTML = greenblackunicornHeader;
      popupText.textContent = dream;
      break;
    case 'heraldicbeast':
      popupHeader.innerHTML = heraldicbeastHeader;
      popupText.textContent = heraldic;
      break;
    case 'pastelunicorn':
      popupHeader.innerHTML = pastelunicornHeader;
      popupText.textContent = pastel;
      break;
    case 'starunicorn':
      popupHeader.innerHTML = starunicornHeader;
      popupText.textContent = starry;
      break;
    case 'traditionalunicorn':
      popupHeader.innerHTML = traditionalunicornHeader;
      popupText.textContent = oldschool;
      break;
    default:
      return false;
  }
}

//PREVIEW IMAGE SWITCHER, third verse same as the first
function switchUnicorn(launchUnicorns) {
  //we pass in the name of the variable that we need to use. launchPopup has the reference to all our relevant button elements
  var x = launchUnicorns.id;
  switch (x) {//pass x into the switch statement because it contains all the id's retrieved from our button elements.
    case 'ChocoPalo':
      previewpic.src = "starterUnicorns/unicons/chocolatepalocornIcon.png";
      break;
    case 'deericorn':
      previewpic.src = "starterUnicorns/unicons/deericorn.vectorIcon.png";
      break;
    case 'flaxensorrelcorn':
      previewpic.src = "starterUnicorns/unicons/flaxensorrelcornIcon.png";
      break;
    case 'greenblackunicorn':
      previewpic.src = "starterUnicorns/unicons/greenblackunicornIcon.png";
      break;
    case 'heraldicbeast':
      previewpic.src = "starterUnicorns/unicons/heraldicbeastIcon.png";
      break;
    case 'pastelunicorn':
      previewpic.src = "starterUnicorns/unicons/prettyunicornIcon.png";
      break;
    case 'starunicorn':
      previewpic.src = "starterUnicorns/unicons/starunicornIcon.png";
      break;
    case 'traditionalunicorn':
      previewpic.src = "starterUnicorns/unicons/traditionalunicornIcon.png";
      break;
    default:
      return false;
  }//NAILED IT AGAIN BITCH
}

//MODAL POPUP window
var modal = document.querySelector(".modal");//selecting the element with our class=modal
var launchUnicorns = document.getElementsByClassName("launchUnicorns");//selecting all our icon buttons with class=launchPopup
var closeButton = document.querySelector("#goBack");//selecting our button with id=goBack. we are only activating the close button right now,since we don't have the code for storing user choice yet
var popupText = document.querySelector(".popupText");//selecting our p element that will hold our descriptions
var popupBG = document.querySelector(".modal-content");//select the background image source for the popup so we can change it
var popupHeader = document.querySelector(".popupHeader");//selects the H1 element of our popup header element
var previewpic = document.querySelector(".previewUnicorn");

closeButton.addEventListener("click", hideModal);
window.addEventListener("click", windowOnClick);

for (var i = 0; i < launchUnicorns.length; i++) {
  launchUnicorns[i].onclick = function() {
    showModal(this);
    switchSummary(this);//putting it here works! Will having it outside the modal function create unexpected behaviors? Possibly not. Function is set to fire with onclick, which means the summaries shouldn't show up earlier than expected.
    switchUnicorn(this);
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

//RESPONSIVENESS TESTING: ACCESS SCREEN DIMENSIONS
//var testing = document.getElementById("founderIcons");

//testing.onclick = function doShowDimensions() {
    //alert(window.innerWidth + "and" + window.innerHeight);

  //}

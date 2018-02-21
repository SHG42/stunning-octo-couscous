/*function doRegionOverlay() {
  $('#regionOverlay').show()
}
setTimeout(doRegionOverlay, 0)

function doCloseOverlay() {
  $('#closeOverlay').hide()
}*/

$(document).ready(function() {
    // all custom jQuery will go here
    function doRegionOverlay() {
      $('#regionOverlay').show()
    }
    setTimeout(doRegionOverlay, 0)

    $("#closeOverlay").click(function() {
      $("#regionOverlay").hide();
    })

});*/

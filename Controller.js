// Function to toggle div content based on screen size using plain JavaScript
function toggleDivContent() {
  var smallScreenDiv = document.querySelector("#MobilScreenDiv");
  var largeScreenDiv = document.querySelector("#PCScreenDiv");
  // Check if screen width is less than or equal to 800px
  if (window.innerWidth <= 700) {
    // Empty large-screen div and show small-screen div content
    largeScreenDiv.innerHTML = "";
    smallScreenDiv.innerHTML = MobileScreenView;
  } else {
    // Empty small-screen div and show large-screen div content
    smallScreenDiv.innerHTML = "";
    largeScreenDiv.innerHTML = PCScreenView;
  }
}

// Initial call to set div content based on screen size
toggleDivContent();

// Add event listener to window resize event to update div content
window.addEventListener("resize", toggleDivContent);

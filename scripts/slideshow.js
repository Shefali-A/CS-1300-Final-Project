"use strict";
window.onload = function() {
  //These are all the images
  var images = ["asianight.png", "kconNY.png", "showcoloredskirt.png", "showredskirt.png", "hopenight.png"];

  //this holds the value as we cycle through the pictures
  var currentImage = 0;

  // this is actual code for buttons here
  // left button

  $("#left").click(function() {
		if (currentImage > 0) {
			currentImage -= 1;
			$("#img1").attr("src","images/" + images[currentImage]);
			// move to previous image
		} else if (currentImage === 0) {
			currentImage = images.length - 1;
			$("#img1").attr("src","images/" + images[currentImage]);
			//wrap around if last image
		}
	});

  $("#right").click(function() {
		if (currentImage < images.length - 1) {
			currentImage += 1;
			$("#img1").attr("src","images/" + images[currentImage]);
			// move to next image
		} else if (currentImage === images.length - 1) {
			currentImage = 0;
			$("#img1").attr("src","images/" + images[currentImage]);
			// wrap around if first image
		}
	});

};

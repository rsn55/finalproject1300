$(document).ready(function() {
	// the array of images
	var images=['../images/cornell.jpg', 'images/slide2.jpg', 'images/slide3.png', 'images/slide4.jpg'];
	var piclink = ["url(" + images[0] + ")", "url(" + images[1] + ")", "url(" + images[2] + ")"];
	// current image index
	var backgroundImage = 0;

	// store the index of the first and last image
	var FIRST_IMAGE_INDEX = 0;
	var LAST_IMAGE_INDEX = piclink.length - 1;

  // var imgURL = "url(".concat(images[0]);
  // var imgURLnew = imgURL.concat(")");
  document.body.style.backgroundImage = "url(" + images[1] + ")";
	//

	var images=['../images/cornell.jpg', 'images/slide2.jpg', 'images/slide3.png', 'images/slide4.jpg'];
	var url=0;
	setInterval(function(){
	   url+=1;
	  if(url==4){
	    url=0;
	  }
	  document.body.style.backgroundImage = 'url('+images[url]+')';
	  document.body.style.backgroundRepeat = "no-repeat";
		document.body.style.backgroundWidth = "100%";
	},2800);




	//
	// $("#left").click(function() {
	// 	// move to the previous image, if we can
	// 	if (piclink > FIRST_IMAGE_INDEX) {
	// 		// move to previous image
	// 		piclink = piclink - 1;
	// 	} else {
	// 		// wrap around to last image if this is the first image
	// 		piclink = LAST_IMAGE_INDEX;
	// 	}
	// 	$("#home").attr("src", piclink[images]);
	// });
	//
	//
	// $("#right").click(function() {
	// 	// move to the next image, if we can
	// 	if (piclink < LAST_IMAGE_INDEX) {
	// 		// move to next image
	// 		piclink = piclink + 1;
	// 	} else {
	// 		// wrap around to first image if this is the last image
	// 		piclink = FIRST_IMAGE_INDEX;
	// 	}
	// 	$("#home").attr("src", piclink[images]);
	// });



});

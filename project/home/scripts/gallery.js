
"use strict";

/*
File Name: gallery.js
Date: 03/13/19
Programmer: Chris.Bickel
*/

$(document).ready(function() {

var imageFolder = "../images/";
var imageSource;
var photoCaption;

$("#bigPhoto").attr("src", imageFolder + "runners.jpg");

var thumbNames = ["runners_small.jpg", "runners2_small.jpg", "bikers_small.jpg", "bikers2_small.jpg", "bikers3_small.jpg", "swimmers_small.jpg"];

$("img.thumbnail-inner").each(function(i) {
	(this).src = imageFolder + thumbNames[i];
});

$("img.thumbnail-inner").on("click", function() {
	
	/*
	alert("Why did you do that?");
	*/
	
	$("img").css("opacity", "1");
	$(this).css("opacity", ".5");
	imageSource = $(this).attr("src");
	
	/*
	alert(imageSource);
	*/
	
	imageSource = imageSource.replace("_small", "");
	$("#bigPhoto").attr("src", imageSource);
	photoCaption = imageSource.replace(".jpg", "");
	photoCaption = photoCaption.replace("../images/", "");
	$("#caption").text(photoCaption);
});


});



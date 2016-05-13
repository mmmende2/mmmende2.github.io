/*slideshow.js
  Mario Mendez
  projecFinal*/
  
 /* !!! taken from w3 CSS3/slideshow  !!! */
 /* !!! approved by Deande ahead of time  !!! */
	/*--->	http://www.w3schools.com/w3css/w3css_slideshow.asp */
  

var slideIndex = 0;
playSlides();

function playSlides() {
    var i;
    var x = document.getElementsByClassName("slide");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1} 
    x[slideIndex-1].style.display = "block"; 
	setTimeout(playSlides, 2000);
    // Change image every 2 seconds 
}
<div id="eminent_slider">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<style>
.mySlides {display:none;}
</style>
<div class="w3-content w3-section" style="max-width:500px">

<img class="mySlides w3-animate-top" src="snip/CAPTURE.jpg" style="width:100%">
<img class="mySlides w3-animate-bottom" src="snip/CAPTURE2.jpg" style="width:100%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 2500);
}
</script>
</div>


<div id="image_slider">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<style>
.mySlides {display:none;}
</style>

<!--<h2 class="w3-center">Perceptions About Us</h2>-->

<div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides" src="perceptions/12971076_1168887473162807_3072620696609356276_o.jpg" style="width:100%">
  <img class="mySlides" src="perceptions/12976824_1166504263401128_6664027774581100408_o.jpg" style="width:100%">
  <img class="mySlides" src="perceptions/13064582_1172182482833306_8798854760626270286_o.jpg" style="width:100%">
  <img class="mySlides" src="perceptions/13086791_1174149409303280_715947607219665225_o.jpg" style="width:100%">
  <img class="mySlides" src="perceptions/13248547_1191840514200836_6760835718274365064_o.jpg" style="width:100%">
  <img class="mySlides" src="perceptions/13248622_1197788936939327_2618608139181428480_o.jpg" style="width:100%">
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
    setTimeout(carousel, 5000); // Change image every 5 seconds
}
</script>
</div>


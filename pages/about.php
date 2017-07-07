<div id="about">
<div id="first">
<p></p>
<div id="container" style="max-width:100%">
  <img class="mySlides" src="./images/cat0.jpg" style="width:100%; height:100%;">
  <img class="mySlides" src="./images/dog0.jpg" style="width:100%; height:100%;">
  <img class="mySlides" src="./images/cat1.jpg" style="width:100%; height:100%;">
  <img class="mySlides" src="./images/cat2.jpg" style="width:100%; height:100%;">
  <img class="mySlides" src="./images/dog1.jpg" style="width:100%; height:100%;">
  <img class="mySlides" src="./images/parrot.jpg" style="width:100%; height:100%;">
  <img class="mySlides" src="./images/dog3.jpg" style="width:100%; height:100%;">
  <img class="mySlides" src="./images/dog2.jpg" style="width:100%; height:100%;">
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
    setTimeout(carousel, 2500); // Change image every 2 seconds
}
</script>
</div>
<div id="second" style="background-color:a5a5a5 ; font-size:19"><div id="secondright"><h1> OUR SERVICES</h1>
<p>1.Pet walking is purchased in fifteen minute increments, at £1 per 15 minutes (or £4 per 1 hour). </p>
<p>2.Feeding pets is charged at £3 per feeding.</p>
<p>3.Puppy socialisation is a two hour session, and is charged at £8.</p>
<p>4.Play sessions are purchased in thirty minute increments, at £3 per 30 minutes (or £6 per hour). </p>
</div>
<div id="secondleft" style= "font-size:20;"><h1>ABOUT US</h1>
<p style="font-size:25;">Lucy’s Pet Service is a pet-sitting service, which aims to help people who work long hours and are unable to look after their pets. Customers of the service can book pet specialists to perform some tasks to alleviate the issues that come with long working hours</p>
</div>
</div>
</div>


</div>
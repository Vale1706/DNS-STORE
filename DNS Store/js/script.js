window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
//slideshow
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i = 1;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}

// Form script
function openForm() {
  document.getElementById('disabledreg').style.display = 'none';
  document.getElementById("myForm").style.display = "block";
}

function openFormNavigate(){
	  self.location="../php/logcheck.php";
}

function closeFormLOG() {
  document.getElementById("myForm").style.display = "none";
  document.getElementById("myFormdown").style.display = "block";
  setTimeout(wakeupdown, 450);
}
function closeFormREG() {
  document.getElementById("myFormREG").style.display = "none";
  document.getElementById("myFormdownREG").style.display = "block";
  setTimeout(wakeupdownREG, 450);
}
function wakeupdown(){
  document.getElementById("myFormdown").style.display = "none";
}
function wakeupdownREG(){
  document.getElementById("myFormdownREG").style.display = "none";
}

function after(){
	document.getElementById("myFormREG").style.display = "block";
}

// Form reg
function openLog() {
	document.getElementById("myFormREG").style.display = "none";
	
	document.getElementById("myFormdownREG").style.display = "block";
	setTimeout(wakeupdownREG, 450);
	
	document.getElementById("myForm").style.display = "block";
}
function openReg() {
	document.getElementById("myForm").style.display = "none";
	
	document.getElementById("myFormdown").style.display = "block";
	setTimeout(wakeupdown, 450);
	
	document.getElementById("myFormREG").style.display = "block";
}
function openForn() {
	document.getElementById('disabledreg').style.display = 'none';
	document.getElementById("myFormREG").style.display = "block";
    document.getElementById("fornitore").checked = true;
}

var check = function() {
		if ((document.getElementById('pass').value == document.getElementById('confermapass').value) && document.getElementById('pass').value != '') {
		document.getElementById('message').style.color = 'green';
		document.getElementById('message').innerHTML = 'Password uguali';
		document.getElementById('enabledreg').style.display = 'block';
		document.getElementById('disabledreg').style.display = 'none';
		} else {
		document.getElementById('message').style.color = 'red';
		document.getElementById('message').innerHTML = 'Password diverse';
		document.getElementById('enabledreg').style.display = 'none';
		document.getElementById('disabledreg').style.display = 'block';
		document.getElementById('disabledreg').style.backgroundColor = 'Gray';
		document.getElementById('disabledreg').style.cursor = 'not-allowed';
	}
}

function Acquista(){
	//self.location="../php/logcheck.php";
	self.location="../php/clearcart.php";
	alert("Acquisto completato!");
}

function Clearcart(){
	self.location="../php/clearcart.php";
	alert("Prodotti rimossi dal carrello.");
}

function Checkareapersonale(){
	self.location="../php/logcheck.php";
	alert("Verrai portato alla tua area personale...");
}

function Areapersonale(){
	self.location="../html/areapersonale.html";
	alert("Verrai portato alla tua area personale...");
}

function Areapersonalefornitore(){
	self.location="../html/areapersonalefornitore.html";
	alert("Verrai portato alla tua area personale...");
}

function Aggiungigioco(){
	self.location="gameslist.html";
	alert("Prodotto aggiunto al carrello!");
}

function Logout(){
	self.location="../php/logout.php";
	alert("Disconnessione eseguita.");
}

function Stampfornitore(){
	self.location="../php/scriptstampfornitore.php";
}
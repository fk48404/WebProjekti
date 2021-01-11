<!DOCTYPE html>
<html>
	<head>
		<title>Home Page</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
    <body>
<!--HEADER-->
           <?php include 'include/header.php'; ?>
	<br>
	<br>
<!--- Content Starts --->

	<div id="borderSlider">
	<div class="slider">
		<div class="slideShow">
			<div class="mySlides">
				<img src="images/1.jpg" alt="">
			</div>
			<div class="mySlides">
				<img src="images/2.jpg" alt="">
			</div>
			<div class="mySlides">
				<img src="images/3.jpg" alt="">
			</div>
			<div class="mySlides">
				<img src="images/4.jpg" alt="">
			</div>
			<div class="mySlides">
				<img src="images/5.jpg" alt="">
			</div>
			<div class="mySlides">
				<img src="images/6.jpg" alt="">
			</div>
		</div>
		<div class="pointers">
			<span class="dot" onclick="slideMomental(1)"></span>
			<span class="dot" onclick="slideMomental(2)"></span>
			<span class="dot" onclick="slideMomental(3)"></span>
			<span class="dot" onclick="slideMomental(4)"></span>
			<span class="dot" onclick="slideMomental(5)"></span>
			<span class="dot" onclick="slideMomental(6)"></span>
		</div>
	</div>
	</div>
<br></br>

	<div id="meeting">
		<h2>Nuk mund te kujdeseni per kafshen tuaj? Silleni tek ne &#9787; </h2>
		<p>Pavaresisht nese qeni, macja apo kafsha juaj shtepiake eshte ne kujdesin 
			tone per dite ose vetem nje ore,</br> 
			ne do te krijojme nje lidhje te mirefillte. 
			Ne do t'i njohim ata per ata qe jane </br> 
			dhe do t'i duam për këtë 
			(pa marrë parasysh sa të çuditshëm mund të jenë).</p>
		<img src="images/meet.png" id="meet" alt="">
	</div>

<br></br>
	<!-------------------------->
	<div id="Description">
	
		<h2>Kafshet qe mund te gjeni tek ne !? &#9787; </h2>
		<p>Me shpresen se do te zgjerojme hapsiren tone si lokale ashtu dhe organizative </br>
		ju prezantojme llojet e kafsheve te cilat gjenden ne kopshtin tone.</p>
<br></br>
		<section>
			<img src="images/do.gif" id="foto" alt="">
				<a href="dogs.html">
				<h4> &#10148; Dogs</h4></a>
				</br>
			<p>Këtu mund të gjeni më shumë rreth qenve.</p>
		</section>
		<section>
			<img src="images/c.gif" id="foto" alt="">
				<a href="cats.html">
				<h4> &#10148; Cats</h4></a>
				</br>
			<p>Këtu mund të gjeni më shumë rreth maceve.</p>
		</section>
</br>
		<section>
			<img src="images/bu.gif" id="foto" alt="">
				<a href="bunnies.html">
				<h4> &#10148; Bunnies</h4></a>
				</br>
			<p>Këtu mund të gjeni më shumë rreth lepujve</p>
		</section>
	</div>


<br></br>
<br></br>
</body>
	<!-- Footer Starts -->
<footer>
		<div id="mainfooter">
			<section id="footerpart1">
				<img id="webpagephotoF" src="images/lpslogo2.png" alt="webpage">
				<h3 id="h3F">Ne jemi ketu per kafshen tuaj!</h3>
				<p id="wbaboutF">Per te marr info me shume rreth nesh vizito faqen
					<a href="about.html" id="h3F"><u><b>About</b></u></a></p>
				</p>
			</section>
			
			<section id="footerpart2">
				<img id="socialmediaF" src="images/soc.png" alt="foto">
				<h3 id="h3F" >Na kontaktoni</h3>
				<p id="wbaboutF"> Per me shume vizito faqen
					<a href="contact.html" id="h3F"><u><b>Contact</b></u></a></p>
			</section>
		</div>

<br></br>
		<?php include 'include/footer.php'; ?>
</footer>
<script src="js/slider.js"></script>

</html>

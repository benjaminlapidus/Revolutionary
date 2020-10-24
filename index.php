<?php
$customCSS=
"<link rel='stylesheet' type='text/css' href='css/bubbles.css'>
	<link rel='stylesheet' type='text/css' href='css/home.css'>
	<link rel='stylesheet' type='text/css' href='sss/sss.css'>";
$customTitle="<title>Ben Lapidus, CSC 170 Project 3</title>";
include "inc/html-top.php";
?>

<body>
	<div class="down">
		<a href="#mainAnchor" class="mainAnchor">▼</a>
	</div>

	<?php include "inc/nav.php";?>

<div class="animation-area">

<div class="title">
		<h1>Revolutionary</h1>
</div>


	<ul class="box-area">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>

<div id="mainAnchor"></div>

<div class="container">

	<article>

		<div class="overview">  
			<div class="left">
				<h3>Revolutionaries</h3>
				<p>The term revolutionary refers to something that has a major, sudden impact on society or on some aspect of human endeavor. These four people have reinvented their respective fields and have been essential to the progression of mankind.</p>
			</div>

			<div class="right">
				<div class="slider">
					<img src="images/turing_1.png" alt="Profile of Alan Turing"> 
					<img src="images/einstein_1.jpg" alt="Profile of Einstein">
					<img src="images/miyazaki_1.jpg" alt="Profile of Miyazaki">
					<img src="images/neumann_1.jpg" alt="Profile of Neumann">

				</div>
			</div>
		</div>  
	</article>

<main>

<section class="info-block">
	<div class = "pic-info">
	<h3>Alan Turing</h3>
	<img src="images/turing_1.png" alt="Profile of Alan Turing">
	<p>Alan Turing, in full Alan Mathison Turing, (born June 23, 1912, London, England—died June 7, 1954, Wilmslow, Cheshire), British mathematician and logician, who made major contributions to mathematics, cryptanalysis, logic, philosophy, and mathematical biology and also to the new areas later named computer science, cognitive science, artificial intelligence, and artificial life.</p>
</div>	
	<div class="wrapper">
		<a href="turing.php">Read more</a>
	</div>
</section>


<section class="info-block">
	<div class = "pic-info">
		<h3>John Von Neumann</h3>
		<img src="images/neumann_1.jpg" alt="Profile of John Von Neumann">
		<p>John von Neumann was a Hungarian-American, physicist, computer scientist, polymath and mathematician. Von Neumann was generally regarded as the foremost mathematician of his time and said to be "the last representative of the great mathematicians"; who integrated both pure and applied sciences.</p>
	</div>
	<div class="wrapper">
		<a href="neumann.php">Read more</a>
	</div>
</section>



<section class="info-block">
	<div class = "pic-info">
		<h3>Hayao Miyazaki</h3>
		<img src="images/miyazaki_1.jpg" alt="Profile of Hayao Miyazaki">
		<p>Hayao Miyazaki (宮崎駿, Miyazaki Hayao; born January 5, 1941) is a Japanese animator, filmmaker, screenwriter, author, and manga artist. A co-founder of Studio Ghibli, a film and animation studio, he has attained international acclaim as a masterful storyteller and as a maker of animated feature films, and is widely regarded as one of the most accomplished filmmakers in the animation business.</p>
		</div>
		<div class="wrapper">
			<a href="miyazaki.php">Read more</a>
		</div>
</section>

<section class="info-block">
	<div class = "pic-info">
	<h3>Albert Einstein</h3>
	<img src="images/einstein_1.jpg" alt="Profile of Albert Einstein">
	<p>Albert Einstein (14 March 1879 – 18 April 1955) was a German-born theoretical physicist who developed the theory of relativity, one of the two pillars of modern physics (alongside quantum mechanics). His work is also known for its influence on the philosophy of science. He is best known to the general public for his mass–energy equivalence formula E = mc², which has been dubbed the world's most famous equation.</p>
</div>
	<div class="wrapper">
		<a href="einstein.php">Read more</a>
	</div>
</section>
</main>
</div>

<?php
include "inc/footer.php";
include "inc/home-scripts.php";
?>

</body>
</html>

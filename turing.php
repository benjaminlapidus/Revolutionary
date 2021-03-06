<?php
$customCSS="<link rel='stylesheet' type='text/css' href='css/styles.css'>";
$customTitle="<title>Alan Turing - Ben Lapidus</title>";
$footerPageSource="<li><a href='http://www.csc170.org/blapidus/project1/'>Project Source</a></li>";
include "inc/html-top.php";
?>

<body>
<?php include "inc/nav.php";?>
<div class="container">

		<section class="quote" id="turing">
			<div class="bg-image"></div>
			<h2>“Those who can imagine anything, can create the impossible.”</h2>
		</section>

		<article>

			<section class="lead">
				<h1>Alan Turing</h1>

				<p><strong>Alan Turing,</strong> in full Alan Mathison Turing, (born June 23, 1912, London, England—died June 7, 1954, Wilmslow, Cheshire), British mathematician and logician, who made major contributions to mathematics, cryptanalysis, logic, philosophy, and mathematical biology and also to the new areas later named computer science, cognitive science, artificial intelligence, and artificial life.</p>

			</section>

			<figure>
				<img src="images/turing_1.png" alt="Portrait of Alan Turing">
				<figcaption>Figure 1 - Portrait of Alan Turing</figcaption>
			</figure>

		</article>

		<main>

			<div class="p1">
				<h3 class="p1">Early life and career</h3>

				<p class="p1">The son of a civil servant, Turing was educated at a top private school. He entered the University of Cambridge to study mathematics in 1931. After graduating in 1934, he was elected to a fellowship at King’s College (his college since 1931) in recognition of his research in probability theory. In 1936 Turing’s seminal paper “On Computable Numbers, with an Application to the Entscheidungs problem [ Decision Problem]” was recommended for publication by the American mathematical logician Alonzo Church, who had himself just published a paper that reached the same conclusion as Turing’s, although by a different method. Turing’s method (but not so much Church’s) had profound significance for the emerging science of computing. Later that year Turing moved to Princeton University to study for a Ph.D. in mathematical logic under Church’s direction (completed in 1938).</p>
			</div>

			<div class="tablewrapper">
				<aside>
					<h2>Timeline</h2>
					<table class = "darkTable">
						<tr class="table-header">
							<th>Month</th>
							<th>Year</th>
							<th>Event</th>
						</tr>
						<tr>
							<td>June</td>
							<td>1912</td>
							<td>Alan Mathison Turing was born in London</td>
						</tr>
						<tr>
							<td>September</td>
							<td>1938</td>
							<td>Turing started to work part-time at the Government Code and Cypher School</td>
						</tr>
						<tr>
							<td>October</td>
							<td>1945</td>
							<td>Turing joined the National Physical Laboratory</td>
						</tr>
						<tr>
							<td>January</td>
							<td>1952</td>
							<td>Turing convicted for gross indecency and chemically castrated</td>
						</tr>
						<tr>
							<td>June</td>
							<td>1954</td>
							<td>Turing found dead by suicide</td>
						</tr>
					</table>
				</aside>
			</div>

			<div class = "p2">

				<h3 class="p2">The Entscheidungs problem</h3> 

				<p class="p2">What mathematicians called an <em>effective</em> method for solving a problem was simply one that could be carried by a human mathematical clerk working by rote. In Turing’s time, those rote-workers were in fact called <em>computers,</em> and human computers carried out some aspects of the work later done by electronic computers. The Entscheidungs problem sought an effective method for solving the fundamental mathematical problem of determining exactly which mathematical statements are provable within a given formal mathematical system and which are not. A method for determining this is called a decision method.</p>

				<p class="p2">In 1936 Turing and Church independently showed that, in general, the Entscheidungs problem problem has no resolution, proving that no consistent formal system of arithmetic has an effective decision method. In fact, Turing and Church showed that even some purely logical systems, considerably weaker than arithmetic, have no effective decision method. This result and others—notably mathematician-logician Kurt Gödel’s incompleteness results—dashed the hopes, held by some mathematicians, of discovering a formal system that would reduce the whole of mathematics to methods that (human) computers could carry out. It was in the course of his work on the Entscheidungs problem that Turing invented the universal Turing machine, an abstract computing machine that encapsulates the fundamental logical principles of the digital computer.</p>

			</div>

			<div class="p3">
				<h3 class="p3">The Church-Turing thesis</h3>

				<p class="p3">An important step in Turing’s argument about the Entscheidungs problem was the claim, now called the Church-Turing thesis, that everything humanly computable can also be computed by the universal Turing machine. The claim is important because it marks out the limits of human computation. Church in his work used instead the thesis that all human-computable functions are identical to what he called lambda-definable functions (functions on the positive integers whose values can be calculated by a process of repeated substitution). Turing showed in 1936 that Church’s thesis was equivalent to his own, by proving that every lambda-definable function is computable by the universal Turing machine and vice versa. In a review of Turing’s work, Church acknowledged the superiority of Turing’s formulation of the thesis over his own (which made no reference to computing machinery), saying that the concept of computability by a Turing machine <em>has the advantage of making the identification with effectiveness [...] evident immediately.</em></p>
			</div>

			<div class="p4">
				<h3 class="p4">Code breaker</h3>

				<p class="p4">Having returned from the United States to his fellowship at King’s College in the summer of 1938, Turing went on to join the Government Code and Cypher School, and, at the outbreak of war with Germany in September 1939, he moved to the organization’s wartime headquarters at Bletchley Park, Buckinghamshire. A few weeks previously, the Polish government had given Britain and France details of the Polish successes against Enigma, the principal cipher machine used by the German military to encrypt radio communications.
				As early as 1932, a small team of Polish mathematician-cryptanalysts, led by Marian Rejewski, had succeeded in deducing the internal wiring of Enigma, and by 1938 Rejewski’s team had devised a code-breaking machine they called the Bomba (the Polish word for a type of ice cream). The Bomba depended for its success on German operating procedures, and a change in those procedures in May 1940 rendered the Bomba useless.</p>

				<p class="p4">During the autumn of 1939 and the spring of 1940, Turing and others designed a related, but very different, <em>code-breaking machine known as the Bombe.</em> For the rest of the war, Bombes supplied the Allies with large quantities of military intelligence. By early 1942 the cryptanalysts at Bletchley Park were decoding about 39,000 intercepted messages each month, a figure that rose subsequently to more than 84,000 per month—two messages every minute, day and night. In 1942 Turing also devised the first systematic method for breaking messages encrypted by the sophisticated German cipher machine that the British called “Tunny.” At the end of the war, Turing was made an Officer of the Most Excellent Order of the British Empire (OBE) for his code-breaking work.</p>
			</div>

			<h3 class="p5">Computer designer</h3>

			<p class="p5">In 1945, the war over, Turing was recruited to the National Physical Laboratory (NPL) in London to create an electronic computer. His design for the Automatic Computing Engine (ACE) was the first complete specification of an electronic stored-program all-purpose digital computer. Had Turing’s ACE been built as he planned, it would have had vastly more memory than any of the other early computers, as well as being faster. However, his colleagues at NPL thought the engineering too difficult to attempt, and a much smaller machine was built, the Pilot Model ACE (1950).</p>

			<figure class="fig2">
				<img src="images/turing_2.jpg" alt="large computer with enter-connected wires">
				<figcaption>Figure 2 - Rise of Computers</figcaption>
			</figure>

			<p class="p6">NPL lost the race to build the world’s first working electronic stored-program digital computer—an honor that went to the Royal Society Computing Machine Laboratory at the University of Manchester in June 1948. Discouraged by the delays at NPL, Turing took up the deputy directorship of the Computing Machine Laboratory in that year (there was no director). His earlier theoretical concept of a universal Turing machine had been a fundamental influence on the Manchester computer project from the beginning. After Turing’s arrival at Manchester, his main contributions to the computer’s development were to design an input-output system—using Bletchley Park technology—and to design its programming system. He also wrote the first-ever programming manual, and his programming system was used in the Ferranti Mark I, the first marketable <em>electronic digital computer</em> (1951).</p>

			<div class="p6">
				<h3 class="p6">Artificial intelligence pioneer</h3>

				<p class="p6">Turing was a founding father of artificial intelligence and of modern cognitive science, and he was a leading early exponent of the hypothesis that the human brain is in large part a digital computing machine. He theorized that the cortex at birth is an “unorganized machine” that through “training” becomes organized “into a universal machine or something like it.” Turing proposed what subsequently became known as the Turing test as a criterion for whether an artificial computer is thinking (1950).</p>
			</div>

			<div class="p7">
				<h3 class="p7">Last years</h3>

				<p class="p7">Turing was elected a fellow of the Royal Society of London in March 1951, a high honor, yet his life was about to become very hard. In March 1952 he was convicted of “gross indecency”—that is to say, homosexuality, a crime in Britain at that time—and he was sentenced to 12 months of hormone “therapy.” Now with a criminal record, he would never again be able to work for Government Communications Headquarters (GCHQ), the British government’s postwar code-breaking center.</p>

				<p class="p7">Turing spent the remainder of his short career at Manchester, where he was appointed to a specially created readership in the theory of computing in May 1953. From 1951 Turing had been working on what is now known as artificial life. He published “The Chemical Basis of Morphogenesis” in 1952, describing aspects of his research on the development of form and pattern in living organisms. Turing used Manchester’s Ferranti Mark I computer to model his hypothesized chemical mechanism for the generation of anatomical structure in animals and plants.</p>

				<p class="p7">In the midst of this groundbreaking work, Turing was <em>discovered dead</em> in his bed, poisoned by cyanide. The official verdict was suicide, but no motive was established at the 1954 inquest. His death is often attributed to the hormone “treatment” he received at the hands of the authorities following his trial for being gay. Yet he died more than a year after the hormone doses had ended, and, in any case, the resilient Turing had borne that cruel treatment with what his close friend Peter Hilton called “amused fortitude.” Also, to judge by the records of the inquest, no evidence at all was presented to indicate that Turing intended to take his own life, nor that the balance of his mind was disturbed (as the coroner claimed). In fact, his mental state appears to have been unremarkable at the time. Although suicide cannot be ruled out, it is also possible that his death was simply an accident, the result of his inhaling cyanide fumes from an experiment in the tiny laboratory adjoining his bedroom. Nor can murder by the secret services be entirely ruled out, given that Turing knew so much about cryptanalysis at a time when homosexuals were regarded as threats to national security.</p>

				<p class="p7">By the early 21st century Turing’s prosecution for being gay had become infamous. In 2009 British Prime Minister Gordon Brown, speaking on behalf of the British government, publicly apologized for Turing’s <em>utterly unfair</em> treatment. Four years later Queen Elizabeth II granted Turing a royal pardon.</p>

			</div>

			<section class ="tributes">
				<h2>Tributes</h2>

				<ul>
					<li>Turing completeness</li>
					<li>Turing degree</li>
					<li>Turing fixed-point combinator</li>
					<li>Turing Institute</li>
					<li>Turing Lecture</li>
					<li>Turing machine</li>
					<li>Turing patterns</li>
					<li>Turing reduction</li>
					<li>Turing switch</li>
					<li>Turing test</li>
				</ul>
			</section>

		</main>

		<footer class="ref">
			<h2>Citations</h2>
			<ul class="flow-layout">
				<li><a href="https://www.bbc.com/news/uk-37711518">""Alan Turing law": Thousands of gay men to be pardoned".</a> BBC News. 20 October 2016. Archived from the original on 20 October 2016.</li>
				<li><a href="http://www.turing.org.uk/turing/scrapbook/early.html">"The Alan Turing Internet Scrapbook"</a> Archived from the original on 14 October 2012.</li>
				<li><a href="http://www.csc170.org/blapidus/project1/"></a>Lapidus' Project 1 - Turing</li>

			</ul>

			<h2>Sources</h2>
			<ul class="flow-layout">
				<li><a href="https://en.wikipedia.org/wiki/Alan_Turing">Wikipedia, Alan Turing</a></li>
				<li><a href="https://www.wired.com/2012/06/alan-turing-timeline/">Wired, Alan Turing Timeline</a></li>
				<li><a href="https://www.britannica.com/biography/Alan-Turing">Britannica, Alan Turing</a></li>
			</ul>
		</footer>


	</div>
<?php
include "inc/footer.php";
include "inc/scripts.php";
?>

</body>
</html>
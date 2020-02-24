<!-- https://policies.google.com/faq -->

<?php
	// database with all the questions and answers, an array with arrays
	// we know that there are not more than four paragraphs per question_answer
	
	$db = [
		'question_answer_1' => [
			'title' => 'How are you implementing the recent Court of Justice of the European Union (CJEU) decision on the right to be forgotten?',
			'paragraph_1' => 'The recent ruling by the Court of Justice of the European Union has profound consequences for search engines in Europe. The court found that certain users have the right to ask search engines like Google to remove results for queries that include the person\'s name. To qualify, the results shown would need to be inadequate, irrelevant, no longer relevant, or excessive.',
			'paragraph_2' => 'Since this ruling was published on 13 May 2014, we\'ve been working round the clock to comply. This is a complicated process because we need to assess each individual request and balance the rights of the individual to control his or her personal data with public\'s right to know and distribute information.',
			'paragraph_3' => 'If you have a removal request, please fill out this webform. You\'ll receive an automatic reply confirming that we have received your request. We will then assess your case—please note this may take some time because we have already received many such requests. In evaluating your request, we will look at whether the results include outdated information about your private life. We\'ll also look at whether there\'s a public interest in the information remaining in our search results—for example, if it relates to financial scams, professional malpractice, criminal convictions or your public conduct as a government official (elected or unelected). These are difficult judgements and as a private organization, we may not be in a good position to decide on your case. If you disagree with our decision you can contact your local DPA.',
			'paragraph_4' => 'We look forward to working closely with data protection authorities and others over the coming months as we refine our approach. The CJEU\'s ruling constitutes a significant change for search engines. While we are concerned about its impact, we also believe it\'s important to respect the Court\'s judgment and are working hard to devise a process that complies with the law.'
		],
		'question_answer_2' => [
			'title' => 'How does Google protect my privacy and keep my information secure?',
			'paragraph_1' => 'We know security and privacy are important to you – and they are important to us, too. We make it a priority to provide strong security and give you confidence that your information is safe and accessible when you need it.',
			'paragraph_2' => 'We’re constantly working to ensure strong security, protect your privacy, and make Google even more effective and efficient for you. We spend hundreds of millions of dollars every year on security, and employ world-renowned experts in data security to keep your information safe. We also built easy-to-use privacy and security tools like Google Dashboard, 2-step verification and Ads Settings. So when it comes to the information you share with Google, you’re in control.',
			'paragraph_3' => 'You can learn more about safety and security online, including how to protect yourself and your family online, at the Google Safety Center.',
			'paragraph_4' => 'Learn more about how we keep your personal information private and safe — and put you in control.'
		],
		'question_answer_3' => [
			'title' => 'How can I remove information about myself from Google\'s search results?',
			'paragraph_1' => 'Google search results are a reflection of the content publicly available on the web. Search engines can\'t remove content directly from websites, so removing search results from Google wouldn\'t remove the content from the web. If you want to remove something from the web, you should contact the webmaster of the site the content is posted on and ask him or her to make a change. Additionally, if under European data protection law, you would like to request removal of certain information about you that appears in Google\'s search results, please click here. Once the content has been removed and Google has noted the update, the information will no longer appear in Google\'s search results. If you have an urgent removal request, you can also visit our help page for more information.'
		],
		'question_answer_4' => [
			'title' => 'Are my search queries sent to websites when I click on Google Search results?',
			'paragraph_1' => 'In some cases, yes. When you click on a search result in Google Search, your web browser also may send the Internet address, or URL, of the search results page to the destination webpage as the Referrer URL. The URL of the search results page may sometimes contain the search query you entered. If you are using SSL Search (Google’s encrypted search functionality), under most circumstances, your search terms will not be sent as part of the URL in the Referrer URL. There are some exceptions to this behavior, such as if you are using some less popular browsers. More information on SSL Search can be found here. Search queries or information contained in the Referrer URL may be available via Google Analytics or an application programming interface (API). In addition, advertisers may receive information relating to the exact keywords that triggered an ad click.'
		]
	];
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./style.css">
	<title>php-google-faq</title>
</head>

<body>
	<header>
		<div class="nav-bar">
			<div class="nav-bar-top">
				<ul>
					<li class="logo">
						<a href=""><img src="./img/logo.png" alt="logo.png"></a>
					</li>
					<li>
						<a href="#">Privacy &amp; Terms</a>
					</li>
				</ul>
			</div>
			<div class="nav-bar-bottom">
				<div class="nav-bar-bottom-left">
					<ul>
						<li>
							<a href="#">Overview</a>
						</li>
						<li>
							<a href="#">Privacy</a>
						</li>
						<li>
							<a href="#">Terms of Service</a>
						</li>
						<li>
							<a href="#">Technologies</a>
						</li>
						<li class="faq">
							<a href="#">FAQ</a>
						</li>
					</ul>
				</div>
				<div class="nav-bar-bottom-right">
					<ul>
						<li>
							<a href="#">Google Account</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="nav-bar-mobile">
				<ul>
					<li class="hamburger">
						<a href="#"><img src="./img/hamburger.svg" alt="hamburger.svg"></a>
					</li>
					<li class="logo">
						<a href=""><img src="./img/logo.png" alt="logo.png"></a>
					</li>
					<li>
						<a href="#">FAQ</a>
					</li>
				</ul>
			</div>
		</div>
	</header>
	<main>
		<section class="question_answer container">
			<!-- cycle every single question_answer inside the database -->
			<?php foreach ($db as $question_answer) { ?>
				<div class="wrapper">
					<h2 class="question">
						<!-- set the title -->
						<?php echo $question_answer['title'] ?>
					</h2>
					<div class="answer">
						<!-- check if the paragraph is empty or not -->
						<?php	if (!empty($question_answer['paragraph_1'])) { ?>
							<p>
								<!-- set the paragraph -->
								<?php echo $question_answer['paragraph_1']; ?>
							</p>
						<?php } ?>
						<?php	if (!empty($question_answer['paragraph_2'])) { ?>
							<p>
								<?php echo $question_answer['paragraph_2']; ?>
							</p>
						<?php } ?>
						<?php	if (!empty($question_answer['paragraph_3'])) { ?>
							<p>
								<?php echo $question_answer['paragraph_3']; ?>
							</p>
						<?php } ?>
						<?php	if (!empty($question_answer['paragraph_4'])) { ?>
							<p>
								<?php echo $question_answer['paragraph_4']; ?>
							</p>
						<?php } ?>
					</div>
				</div>
			<?php } ?>
		</section>
	</main>
	<footer>
		<section class="about container">
			<div class="footer-nav">
				<div class="footer-nav-left">
					<ul>
						<li>
							<a href="#">Google</a>
						</li>
						<li>
							<a href="#">About Google</a>
						</li>
						<li>
							<a href="#">Privacy</a>
						</li>
						<li>
							<a href="#">Terms</a>
						</li>
					</ul>
				</div>
				<div class="footer-nav-right">
					<ul>
						<li>
							<img src="./img/flag.png" alt="falg.png">
						</li>
						<li>
							<select id="languages">
								<option value="english">English</option>
								<option value="italian">Italian</option>
								<option value="german">German</option>
								<option value="french">French</option>
							</select>
						</li>
					</ul>
				</div>
			</div>
		</section>
	</footer>
</body>

</html>
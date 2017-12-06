<!DOCTYPE html>
<html>
	<head>
		/** Meta Tags
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		/**
		* CSS/bootstrap
		*/
		<link rel="stylesheet" href="css/stylesheet.css">
		<link rel="stylesheet" href="font-awesome-animation.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" crossorigin="anonymous"></script>
		/**
		* JavaScript
		*/
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.slim.min.js"></script>
		<script src="js/form-validate.js"></script>
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" crossorigin="anonymous"></script>
		<title> Personal Website</title>
	</head>

	<body class="text">

		<nav class="navbar navbar-expand-lg navbar-light mb-3 " >
			<button class="navbar-toggler navbar-toggler-right bg-white" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<a class="navbar-brand text-white" href="https://bootcamp-coders.cnm.edu/~cowens17/personalwebsiteproject/public_html/">C.O</a>
			<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
				<ul class="navbar-nav mr-auto mt-2 mt-md-0">
					<li>
						<a class="nav-link fa fa-github text-white" href="https://github.com/ChrisOwens505" target="_blank"><span class="sr-only">(current)</span></a>
					</li>
					<li>
						<a class="nav-link fa fa-linkedin text-white" href="https://www.linkedin.com/in/christian-owens-3930a2143/" target="_blank"><span class="sr-only">(current)</span></a>
					</li>
					<li>
						<a class="nav-link fa fa-facebook text-white" href="https://www.facebook.com/mr.mactastic" target="_blank"><span class="sr-only">(current)</span></a>
					</li>
					<li>
						<a class="nav-link fa fa-twitter text-white" href="https://twitter.com/C0derChris" target="_blank"><span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item active">
						<a class="nav-link text-white" href="christianowensresume.pdf">Résumé<span class="sr-only">(current)</span></a>
					</li>
				</ul>
			</div>
		</nav>

		<img class="mr-3 watts" src="images/awatts.jpg" alt="Alan Watts">
		<div class="media">
			<div class="media-body">
				<h5 class="mt-0">The Dream Of Life.</h5>
				<p>
					If you awaken from this illusion and you understand that black implies white, self implies other, life implies death (or shall
					I say death implies life?), you can feel yourself – not as a stranger in the world, not as something here on probation, not as
					something that has arrived here by fluke - but you can begin to feel your own existence as absolutely fundamental.
				</p>
				<p>~ Alan Watts</p>
			</div>
		</div>

		<div class="container-fluid">
			<div class="row">
				<div class="col">
					<div class="card-deck">
						<div class="card text-white bg-dark mb-3">
							<img class="card-img-top border border-white" src="images/me.jpeg" alt="Card image cap">
							<div class="card-body border border-white">
								<h4 class="card-title">Christian Alexander Owens</h4>
								<p class="card-text">My name is Christian, I am Albuquerque born and raised, but continuously distressed by my
									tenacious aspirations to travel. I have independent passions for each subject I enjoy to invest my time into, they
									include web development, minor psychology, and bio-technology (bio-medicine). I plan to soon attend classes at CNM
									to achieve a bachelors degree in bio-medicine, while at the same time, using my knowledge of web development to
									create a comfortable starting point for myself. My personal goal is to purchase a property, and open my own
									pharmacy. Unfortunately it is a goal I see farther along in my future, So, Me and a close friend of mine plan to
									start a data center company as soon as we get on the grounds to do so, this is the main goal for my future.</p>
								<p class="card-text"><small class="text-muted">Nov. 2017</small></p>
							</div>
						</div>
						<div class="card text-white bg-dark mb-3">
							<img class="card-img-top border border-white" src="images/meanddylan.jpg" alt="Card image cap">
							<div class="card-body border border-white">
								<h4 class="card-title">Programming!</h4>
								<p class="card-text">I could not have asked to be in a better programming course than I had the privilege to attend.
									I've been shown the ropes of full-stack web development, so I am familiar with languages such as HTML, CSS, PHP,
									Angular, MySQL, JQuery, and JavaScript. We were also taught the in's and out's of Object Oriented Programming,
									but, the most valuable skill I took from the boot-camp was the skill to learn how to learn. #DeepDiveCoding </p>
								<p class="card-text"><small class="text-muted">Oct. 2017</small></p>
							</div>
						</div>
						<div class="card text-white bg-dark mb-3">
							<img class="card-img-top border border-white" src="images/meandmatt.jpg" alt="Card image cap">
							<div class="card-body border border-white">
									<h4>I Love Programming!</h4>
									<p>I am looking for any opportunity that may be available to me. As long as I can get my hands onto some code,
										I'll never lose the passion i have for this profession. </p>
									<h3>Feel Free To Contact Me!</h3>
									<h4>I will respond to your message very soon.</h4>
									<form id="contact-form" action="php/mailer.php" method="post" novalidate>
									<fieldset class="mind" id="name" name="name">
										<input placeholder="Name?" type="text" tabindex="1" required autofocus>
									</fieldset>
									<fieldset class="mind" id="email" name="email">
										<input placeholder="Email?" type="email" tabindex="2" required>
									</fieldset>
									<fieldset class="mind" id="cell" name="cell">
										<input placeholder="Cell?" type="tel" tabindex="3" required>
									</fieldset>
									<fieldset class="mind" id="message" name="message">
										<textarea placeholder="Leave a Message" tabindex="5" required></textarea>
									</fieldset>
									<fieldset>
										<button name="submit" type="submit" id="contact-submit" class="submit mind" data-submit="...Sending">Submit</button>
									</fieldset>
									<div class="g-recaptcha minds" data-sitekey="6LeulToUAAAAAP59sSZHuqUdkrhDk1b-RBKuRpLP"></div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

		<blockquote class="blockquote">
			<p class="mb-0 text-white">The only way to make sense out of change is to plunge into it, move with it, and join the dance.</p>
			<footer class="blockquote-footer">Alan<cite title="Source Title"> Watts</cite></footer>
		</blockquote>
	</body>
</html>
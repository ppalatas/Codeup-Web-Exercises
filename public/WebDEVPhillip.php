<?php
	$_POST;

	$data = [];

	if(isset($_POST['submit'])){

		if($_POST['from'] == "" || $_POST['msg'] == ""){
			echo "Please Fill All Fields.";
		} else {
			$email = $_POST['from'];
			$email =filter_var($email, FILTER_SANITIZE_EMAIL);
			$email= filter_var($email, FILTER_VALIDATE_EMAIL);
		if (!$email){
			echo "Invalid Sender's Email";
		} else{
			$from = $_POST['from'];
			$message = $_POST['msg'];
			$headers = 'From:'. $email . "\r\n"; // Sender's Email
			$headers .= 'Cc:'. $email . "\r\n"; // Carbon copy to Sender
			// Message lines should not exceed 70 characters (PHP rule), so wrap it
		$message = wordwrap($message, 70);
		// Send Mail By PHP Mail Function
		mail("ppalatas@gmail.com", $message, $headers);
		// echo "Your mail has been sent successfuly! I will get back to you as soon as possible!";	
		}
	}
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Phillip Palatas Web Dev</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway" rel="stylesheet">
		<link rel="stylesheet" href="css/WebDEVPhillip.css">	
	</head>
	<body>
		<div id = "headerContainerImage">
			<div id = "header">
				<ul>
					<li class="headerBoxes headerBoxesLeft fullStack fullStackLogo"></li>
					<li class="headerBoxes headerBoxesRight"><a href="#About">About</li>
					<li class="headerBoxes headerBoxesRight"><a href="#portfolio">Portfolio</a></li>
					<li class="headerBoxes headerBoxesRight"><a href="#Resume">Resume</li>
				</ul>
			</div>
		<div id="titleBox">
			<div class ="subTitle">
				<a name="About"></a>
					<p><b>Professional<br>
				Website Development</b></p>
			</div>
		<div class="titleParagraph">
			<p>Professional and highly proficient Web Developer that has experience in HTML5, CSS3, JavaScript, jQuery, Twitter Bootstrap and PHP. Whether your needs are for responsive design or just the basics, I have you covered.</p>
		</div>
		</div>
		</div>
			<div class="carouselSection">
				<div id="columns">
					<h4><center>Web Development</center></h4>
					<p><center>Implementing the latest standards, best practices, the best technology options, and user-centered 	approach to design and development. Encompassing Responsive Web, HTML5, PHP, CSS, JavaScript and Full-Stack 	programming and quality assurance.</center></p>
				</div>
		
				<div class="column2" >
					<h4><center>Responsive Design</center></h4>
					<p><center>From the desktop to mobile devices,
					creating web solutions that adapt dynamically can be vital to reaching your target audience. Having a great design 	means nothing without a great user experience. I can provide the design to set you and your audience up for success!	</center></p>
				</div>
		
				<div class="column3">
					<h4><center>Consulting</center></h4>
					<p><center>Finding the right design and development team is important; every design firm has their own unique 	style, business practice, and processes. Making sure you have found a good match is crucial, as planning out a 	scope of work can be a daunting task.</center></p>
				</div>
				<a name= "portfolio"></a>
					<div id ="carousel" class="portfolioContent">
				<div class="carouselArrowContainer">
						<div class="carouselLeft"></div>
						<div class="carouselRight"></div>
								<div class="carouselHolders">
									<div class="image image1"></div>
									<div class="projectDescription">
										<h4>AdLister</h4>
										<p>
										FullStack Project using MVC : An adlister application where users can post items to either sell or buy. Created with full login and registration pages. -PHP Based.
										</p>
									</div>
								</div>
								<div class="carouselHolders">
									<div class="image image2"></div>
									<div class="projectDescription">
										<h4>Simple Simon</h4>
										<p>
										A “Simon Says” game. Created using JavaScript, jQuery and CSS. Simon creates a random pattern and the user must follow it or get a game over. 
										</p>
									</div>
								</div>
								<div class="carouselHolders">
									<div class="image image3"></div>
									<div class="projectDescription">
											<h4>Weather Map API</h4>
											<p>
											A weather map API app that displays the next 3 days of weather based off of the location that you type in. It works 
											internationally! - JavaScript
											</p>
										</div>
									</div>
								<div class="carouselHolders2">
									<div class="image image3"></div>
									<div class="projectDescription">
											<h4>Weather Map API</h4>
											<p>
											A weather map API app that displays the next 3 days of weather based off of the location that you type in. It works 
											internationally! - JavaScript
											</p>
										</div>
									</div>
								<!-- </div> -->
								<div class="carouselHolders21">
									<div class="image image3"></div>
									<div class="projectDescription">
											<h4>Weather adlfjadfl API</h4>
											<p>
											A weather map API app that displays the next 3 days of weather based off of the location that you type in. It works 
											internationally! - JavaScript
											</p>
										</div>
									</div>
								</div>
							<!-- <div class="carouselSize"> -->
							<div class="carouselHolders22">
								<div class="image image3"></div>
								<div class="projectDescription">
										<h4>Weather Map API</h4>
										<p>
										A weather map API app that displays the next 3 days of weather based off of the location that you type in. It works 
										internationally! - JavaScript
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
					<div class="footer">
						<div id="logo"></div>
							<div id="footerColumns">
								<h3 class="whiteHeader">About Phillip</h3>
								<p>
								Full Stack Web Developer that loves UI. Passionate about contributing to a cause that will make a change and instructing people on skills that will contribute to society.
								</p>
							</div>
						<div class="footerColumn secondFooterColumn">
							<div class="skillsHeader"><h3>Languages</h3></div>
								<div class="footerSkills">
									<ul>
										<li>JS</li>
										<li>PHP</li>
										<li>jQuery</li>
										<li>AJAX</li>
									</ul>
								</div>
							<div class="footerSkills">
								<ul>
									<li>CSS</li>
									<li>HTML</li>
									<li>Bootstrap</li>
									<li>API's</li>
								</ul>
							</div>
						</div>
					<div id="footerColumn3">
					<!-- **** FIND OUT WHERE THE HECK THIS IS GOING TO???? -->
						<h3 class="whiteHeader">Contact Me</h3>
						<form method="POST" action="/WebDEVPhillip.php">
							<label class="labels">From: </label><br>
								<input class="input" type="text" name="from" id="from" placeholder="Your Email" value=""><br>
								<input name="sub" class="input" placeholder="Subject" type="text" value="">
							<textarea rows="5" cols="40" name="msg" class="input" type="text" placeholder="Your Message" value=""></textarea>
							<button type="submit" name="submit">Send</button>
						</form>
					</div>		
				</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="js/WebDEVPhillip.js"></script>
	</body>
</html>
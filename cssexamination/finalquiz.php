<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="eLearning is a modern and fully responsive Template by WebThemez.">
	<meta name="author" content="webThemez.com">
	<title>Skill Mill</title>
	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" href="assets/css/style.css">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
	
</head>

<body>


	<?php
		include "nav.php";
	?>
<body>
<div class="container">
<h1>Final Examination</h1>
<p>Answer all the questions</p>
<form action="score.php" method="post">

<h3>1. What does CSS stand for?</h3>
<div class="form-group"> 
<ol>
<li>
<input type="radio" name="q1" value="1" />Creative Style Sheets
</li>
<li>
<input type="radio" name="q1" value="2" />Cascading Style Sheets
</li>
<li>
<input type="radio" name="q1" value="3" />Computer Style Sheets
</li>
</ol>
</div>
<br/>
<div class="form-group"> 
<h3>2. What is the correct HTML for referring to an external style sheet?</h3>
<ol>
<li>
<input type="radio" name="q2" value="1" />Link rel="stylesheet" type="text/css" href="mystyle.css"
</li>
<li>
<input type="radio" name="q2" value="2" />Style src="mystyle.css"erlink text markup language
</li>
<li>
<input type="radio" name="q2" value="3" />Stylesheetmystyle.css/stylesheet
</li>
</ol>
</div>
<br/>
<div class="form-group"> 
<h3>3. Which property is used to change the background color?</h3>
<ol>
<li>
<input type="radio" name="q3" value="1" />Bgcolor
</li>
<li>
<input type="radio" name="q3" value="2" />Background-color
</li>
<li>
<input type="radio" name="q3" value="3" />Color
</li>
</ol>
</div>
<div class="form-group"> 
<h3>4. How do you add a background color for all elements?</h3>
<ol>
<li>
<input type="radio" name="q4" value="1" />H1 {background-color:#FFFFFF}
</li>
<li>
<input type="radio" name="q4" value="2" />H1.all {background-color:#FFFFFF}
</li>
<li>
<input type="radio" name="q4" value="3" />All.h1 {background-color:#FFFFFF}
</li>
</ol>
</div>
<div class="form-group"> 
<h3>5. Which CSS property controls the text size?</h3>
<ol>
<li>
<input type="radio" name="q5" value="1" />Font-style
</li>
<li>
<input type="radio" name="q5" value="2" />Text-style
</li>
<li>
<input type="radio" name="q5" value="3" />Font-size
</li>
</ol>
</div>
<div class="form-group"> 
<h3>6. What is the correct CSS syntax for making all the elements bold?</h3>
<ol>
<li>
<input type="radio" name="q6" value="1" />P {font-weight:bold}
</li>
<li>
<input type="radio" name="q6" value="2" />P style="text-size:bold"
</li>
<li>
<input type="radio" name="q6" value="3" />P style="font-size:bold"
</li>
</ol>
</div>
<div class="form-group"> 
<h3>7. How do you change the font of an element?</h3>
<ol>
<li>
<input type="radio" name="q7" value="1" />Font-family
</li>
<li>
<input type="radio" name="q7" value="2" />F
</li>
<li>
<input type="radio" name="q7" value="3" />Font
</li>
</ol>
</div>
<div class="form-group"> 
<h3>8. How do you change the left margin of an element?</h3>
<ol>
<li>
<input type="radio" name="q8" value="1" />Margin-left
</li>
<li>
<input type="radio" name="q8" value="2" />Text-indent
</li>
<li>
<input type="radio" name="q8" value="3" />Margin
</li>
</ol>
</div>
<div class="form-group"> 
<h3>9. How do you make a list that lists its items with squares?</h3>
<ol>
<li>
<input type="radio" name="q9" value="1" />List-type: square
</li>
<li>
<input type="radio" name="q9" value="2" />Type: square
</li>
<li>
<input type="radio" name="q9" value="3" />List-style-type: square
</li>
</ol>
</div>
<div class="form-group"> 
<h3>10. Where in an HTML document is the correct place to refer to an external style sheet?</h3>
<ol>
<li>
<input type="radio" name="q10" value="1" />In the head section
</li>
<li>
<input type="radio" name="q10" value="2" />In the body section
</li>
<li>
<input type="radio" name="q10" value="3" />At the top of the document
</li>
</ol>
</div>
<div class="form-group">
<input type="submit" value="Submit" name="submit" class="btn btn-primary"/>
</div>
</form>
</div>
</body>

<br>
<?php
		include "footer.php";
	?>
	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>
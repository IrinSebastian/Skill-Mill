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
<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>HTML Examination</h1>
				</div>
			</div>
		</div>
	</header>
<div class="container">
<h1>Final Examination</h1>
<p>Answer all the questions</p>
<form action="score.php" method="post">

<h3>1. What does HTML stand for?</h3>
<div class="form-group"> 
<ol>
<li>
<input type="radio" name="q1" value="1" />Hypertext Markup Language
</li>
<li>
<input type="radio" name="q1" value="2" />Hyperlink text Markup language
</li>
<li>
<input type="radio" name="q1" value="3" />Hypertool Markup Language
</li>
</ol>
</div>
<br/>
<div class="form-group"> 
<h3>2. Who is making the Web standards?</h3>
<ol>
<li>
<input type="radio" name="q2" value="1" />Mozilla
</li>
<li>
<input type="radio" name="q2" value="2" />Microsoft
</li>
<li>
<input type="radio" name="q2" value="3" />The World Wide Web Consortium
</li>
</ol>
</div>
<br/>
<div class="form-group"> 
<h3>3. Choose the correct HTML tag for the largest heading</h3>
<ol>
<li>
<input type="radio" name="q3" value="1" />Head
</li>
<li>
<input type="radio" name="q3" value="2" />H1
</li>
<li>
<input type="radio" name="q3" value="3" />Heading
</li>
</ol>
</div>
<div class="form-group"> 
<h3>4. Choose the correct HTML tag to make a text bold</h3>
<ol>
<li>
<input type="radio" name="q4" value="1" />Bold
</li>
<li>
<input type="radio" name="q4" value="2" />b
</li>
<li>
<input type="radio" name="q4" value="3" />bold
</li>
</ol>
</div>
<div class="form-group"> 
<h3>5. HTML supports</h3>
<ol>
<li>
<input type="radio" name="q5" value="1" />Ordered Lists
</li>
<li>
<input type="radio" name="q5" value="2" />Unordered Lists
</li>
<li>
<input type="radio" name="q5" value="3" />Both type of Lists
</li>
</ol>
</div>
<div class="form-group"> 
<h3>6. How can you make a list that lists the items with numbers?</h3>
<ol>
<li>
<input type="radio" name="q6" value="1" />Ol
</li>
<li>
<input type="radio" name="q6" value="2" />Dl
</li>
<li>
<input type="radio" name="q6" value="3" />List
</li>
</ol>
</div>
<div class="form-group"> 
<h3>7. How can you make a list that lists the items with bullets?</h3>
<ol>
<li>
<input type="radio" name="q7" value="1" />UL
</li>
<li>
<input type="radio" name="q7" value="2" />OL
</li>
<li>
<input type="radio" name="q7" value="3" />List
</li>
</ol>
</div>
<div class="form-group"> 
<h3>8. What is the name of every homepage on the WWW?</h3>
<ol>
<li>
<input type="radio" name="q8" value="1" />Home.html
</li>
<li>
<input type="radio" name="q8" value="2" />Index.html
</li>
<li>
<input type="radio" name="q8" value="3" />The name of your website.html
</li>
</ol>
</div>
<div class="form-group"> 
<h3>9. Choose the correct HTML tag to make a text italic</h3>
<ol>
<li>
<input type="radio" name="q9" value="1" />Italic
</li>
<li>
<input type="radio" name="q9" value="2" />I
</li>
<li>
<input type="radio" name="q9" value="3" />It
</li>
</ol>
</div>
<div class="form-group"> 
<h3>10. What is the correct HTML for inserting an image?</h3>
<ol>
<li>
<input type="radio" name="q10" value="1" />Image src="image.gif" alt="MyImage"
</li>
<li>
<input type="radio" name="q10" value="2" />Img href="image.gif" alt="MyImage"
</li>
<li>
<input type="radio" name="q10" value="3" />Img alt="MyImage" image.gif
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
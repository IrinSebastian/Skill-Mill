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
</body>
	<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>HTML Examination</h1>
				</div>
			</div>
		</div>
	</header>
<?php 
if($_POST['submit']) {	

    $q1 = $_POST['q1'];
	$q2 = $_POST['q2'];
	$q3 = $_POST['q3'];
    $q4 = $_POST['q4'];
	$q5 = $_POST['q5'];
	$q6 = $_POST['q6'];
    $q7 = $_POST['q7'];
	$q8 = $_POST['q8'];
	$q9 = $_POST['q9'];
    $q10 = $_POST['q10']; 

	if($q1=='' || $q2 =='' || $q3 =='' || $q4=='' || $q5 =='' || $q6 =='' || $q7 =='' || $q8 =='' || $q9 =='' || $q10 =='') {
		echo '<h2>Please answer all questions.</h2>';
	}
	else {
		$score = 0;
		if($q1 == 1) { // 1st option is correct
		$score++;
		}
		if($q2 == 3) { // 3rd option is correct
		$score++;
		}
		if($q3 == 2) { // 2nd option is correct
		$score++;
		}
        if($q4 == 2) { // 1st option is correct
        $score++;
        }
        if($q5 == 3) { // 3rd option is correct
        $score++;
        }
        if($q6 == 1) { // 2nd option is correct
        $score++;
        }
        if($q7 == 1) { // 1st option is correct
        $score++;
        }
        if($q8 == 2) { // 3rd option is correct
        $score++;
        }
        if($q9 == 2) { // 2nd option is correct
        $score++;
        }
        if($q10 == 1) { // 2nd option is correct
        $score++;
        }

	        $score = $score	/ 10 *100;
		
		if($score < 50)
		{
		echo '<h2>You need to score at least 50% to pass the exam.</h2>';
		}
		else {
		echo '<h2>You have passed the exam and scored '.$score.'%.</h2>';
        echo '<a href="finalexam.php" class="btn">Next>></a>';
		}
	}
}
?>

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
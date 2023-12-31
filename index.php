<?php
// Array of team member profiles
$members = array(
	array(
		"profile" => "assets/images/jakeprofile.jpg",
		"name" => "Jakob Banta",
		"role" => "Cyber Security Red Team Specalist",
		"birth" => "2000-02-24"
	),
	array(
		"profile" => "assets/images/carsonprofile.jpg",
		"name" => "Carson Rolph",
		"role" => "NKCyber VP and Cyber Security Trainer",
		"birth" => "2003-03-26"
	),
	array(
		"profile" => "assets/images/dexterprofile.jpg",
		"name" => "Dexter Walters",
		"role" => "NKCyber Treasurer and Build Team Head",
		"birth" => "2001-01-04"
	)
);

function age($birthdate)
{
	$today = date("Y-m-d");
	$diff = date_diff(date_create($birthdate), date_create($today));
	echo 'Age: ' . $diff->format('%y');
}
function details($member, $i)
{
?>
	<header class="resume-header mt-4 pt-4 pt-md-0">
		<div class="row">
			<div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
				<img class="picture" src=<?= $member[$i]['profile'] ?> alt="">
			</div><!--//col-->
			<div class="col">
				<div class="row p-4 justify-content-center justify-content-md-between">
					<div class="primary-info col-auto">
						<h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"><?= $member[$i]["name"] ?></h1>
						<div class="title mb-3"><?= $member[$i]["role"] ?></div>
						<div class="title mb-3"><?= age($member[$i]["birth"]) ?></div>
						<a href="<?= 'detail.php?index=' . $i ?>" class="btn btn-secondary">See full profile</a>
					</div><!--//primary-info-->
					<div class="secondary-info col-auto mt-2">
					</div><!--//secondary-info-->
				</div><!--//row-->

			</div><!--//col-->
		</div><!--//row-->
	</header>
<?php
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Our amazing team</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Your name's resume">
	<meta name="author" content="Your name">
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

	<!-- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>

	<!-- Theme CSS -->
	<link id="theme-style" rel="stylesheet" href="assets/css/pillar-1.css">


</head>

<body>
	<article class="resume-wrapper text-center position-relative">
		<div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
			<h1 class="py-4 text-center">OUR AMAZING TEAM</h1>
			<?php
			for ($i = 0; $i < count($members); $i++) {
			details($members,$i);
			}
			?>


		</div>
	</article>


	<footer class="footer text-center pt-2 pb-5">
		<!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
		<small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by Jakob, Dexter, and Carson</small>
	</footer>



</body>

</html>

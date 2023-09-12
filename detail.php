<?php
// Get the index value from the URL query parameter
$index = $_GET['index'];
// Array of member profiles
$members = array(
	array(
		"profile" => "assets/images/jakeprofile.jpg",
		"name" => "Jakob Banta",
		"role" => "Cyber Security Red Team Specalist",
		"birth" => "2000-02-24",
		"email" => "Bantaj3@nku.edu",
		"phone" => "(859) 707-1605",
		"linkedin" => "https://linkedin.com/in/jakob-banta-a3085a187",
		"github" => "https://github.com/Torgarr",
		"website" => "",
		"bio" => "Highly motivated and enthusiastic IT professional with expertise in cyber security. Skilled in vulnerability assessments, penetration testing, and compliance and regulatory requirements. Strong analytical skills with the ability to quickly analyze and interpret complex information to develop effective solutions. Excellent communication and collaboration skills. Seeking a challenging and dynamic role in the cyber security field to further develop skills and contribute to the success of the organization.",
		"work" => array(
			"work1" => array(
				"title" => "Desktop Support Specialist",
				"company" => "Northern Kentucky University",
				"time" => "2019 - Present",
				"description" => "Technical support of faculty, staff and students over the phone, chat, and in person.",
				"achievements" => array(
					"Manage escalated IT Help Desk tickets, demonstrating excellent time management skills.",
					"Conduct large-scale projects to ensure smooth university operations, including adjustments to project plans, timelines, and budgets due to unexpected events or changes in priorities.",
					"Identify hardware performance trends and common system issues, reporting findings for remediation.", "Author detailed service call resolution documentation for personnel performance and effective remediation techniques."
				),
				"technology" => array(
					"Parted Magic",
					"Team Dynamics",
					"Teams",
					"Cisco VPN",
					"Zoom",
					"Evo Server"
				),
			),
			"work2" => array(
				"title" => "ISOC Intern",
				"company" => "Kroger",
				"time" => "2021 - 2021",
				"description" => "Support the Information Security Operations Center by monitoring security alerts and incidents, contributing to incident response activities, and analyzing threat intelligence data.",
				"achievements" => array(
					"Conducted penetration testing on external routers, identifying potential security vulnerabilities and developing effective remediation strategies.",
					"Monitored vulnerability exceptions, demonstrating strong analytical skills."
				),
				"technology" => array(
					"Python",
					"Cobalt Strike",
					"Kali Linux"
				),
			)
		),
		"skills" => array(
			"Python",
			"Java",
			"JavaScript",
			"C/C++",
			"HTML/CSS"
		),
		"otherSkills" => array(
			"Cisco Switch Configuration",
			"Cisco Router Configuration",
			"Git",
			"Unit Testing",
			"Network Management",
			"Penetration Testing",
			"Firewall Management (Palo Alto, PFsense)",
			"Linux Server Administration"
		),
		"education" => array(
			"education1" => array(
				"degree" => "BSc in Cyber Security",
				"college" => "Northern Kentucky University",
				"years" => "2018 - 2023"
			),
			"education2" => array(
				"degree" => "BSc in Computer Information Technology",
				"college" => "Northern Kentucky University",
				"years" => "2018 - 2023"
			),
			"education3" => array(
				"degree" => "BSc in Computer Science",
				"college" => "Northern Kentucky University",
				"years" => "2018 - 2023"
			)

		),
		"achievements" => array(
			"achievement1" => array(
				"achievementtitle" => "Leadership in NKCyber Club (2020 - 2023):",
				"acievementdescription" => "Elevated from Secretary (2020-2021) to President (2021-2023) of NKCyber Club at Northern Kentucky University. Directed training, competitions, and research initiatives, enhancing cybersecurity proficiency and fostering innovation within the club."
			),
			"achievement2" => array(
				"achievementtitle" => "Member of NKU Cyber Defense Team (2019 - Present):",
				"acievementdescription" => "Managed network infrastructure for a competition, collaborated with team members, gained expertise in network management and troubleshooting."
			),
			"achievement3" => array(
				"achievementtitle" => "Member of NKCyber Research and Development (2019 - Present):",
				"acievementdescription" => "Expanded organization\'s wiki page on Penetration Testing, gained skills in research, technical writing, and project management."
			),
			"achievement4" => array(
				"achievementtitle" => "Network Designer/Architect for NKCyber Server Rebuild (2022 - Present):",
				"acievementdescription" => "Demonstrated expertise in retention and deployment of networking devices, including switches, routers, and firewalls, ensured devices met organizational requirements."
			)
		),
		"language" => array(
			"language1" => array(
				"languageName" => "English",
				"fluency" => "(Native)"
			),
			"language2" => array(
				"languageName" => "German",
				"fluency" => "(Elementary)"
			)
		),
		"interests" => array(
			"Parkour",
			"Skateboarding",
			"Cooking"
		),
		"projects" => array(
			"project1" => array(
				"projectTitle" => "Development of NKCyber\'s Website",
				"projectDescription" => "Contributed to the development of the NKCyber Club\'s official website, collaborating with team members to enhance the online platform. Assisted in implementing user-friendly features, organizing content, and optimizing functionality to effectively represent the club and its activities online.",
				"projectImage" => ".\\assets\\images\\nkcyber_logo_small.png",
				"projectLink" => "https://nkcyber-club.github.io/"
			),
			"project2" => array(
				"projectTitle" => "Network Designer/Architect for NKCyber Server Rebuild (2022 - Present)",
				"projectDescription" => "Demonstrated expertise in retention and deployment of networking devices, including switches, routers, and firewalls, ensured devices met organizational requirements.",
				"projectImage" => ".\\assets\\images\\nkcyber_logo_small.png",
				"projectLink" => ""
			)
		)

	),
	array(
		"profile" => "assets/images/carsonprofile.jpg",
		"name" => "Carson Rolph",
		"role" => "NKCyber VP and Cyber Security Trainer",
		"birth" => "2003-03-26",
		"email" => "Rolphc2@nku.edu",
		"phone" => "(555) 555-5555",
		"linkedin" => "www.linkedin.com/in/carsonrolph/",
		"github" => "ww.github.com/crolph224",
		"website" => "",
		"bio" => "I am an NKU student currently studying Cybersecurity and CIT. I also have a background in computer science from high school and I am Vice President of NKCyber here at NKU. I have worked for 4 years as a customer specialist and director's assitant at Kentucky Gateway Museum Center.",
		"work" => array(
			"work1" => array(
				"title" => "Student Docent/Guest Services",
				"company" => "Kentucky Gateway Museum Center",
				"time" => "2020 - Present",
				"description" => "Served an internship for guest services and later promoted to employee after high school. Covered responsibilities ranging from social media management, to exhibit setup, to front desk receptions.",
				"achievements" => array(
					"Implemented a guided QR code program for the exhibits during Covid-19.",
					"Setup an interactive exhibit involving talks and photos for one of the galleries in the museum."
				), "technology" => array(
					"Canva",
					"Quickbooks"
				),
			),
			"work2" => array(
				"title" => "Student Worker",
				"company" => "NKU Center for Student Engagement",
				"time" => "2021 - Present",
				"description" => "Aiding the Center for Student Engagement in day-to-day operations.",
				"achievements" => array(
					"Helped guide students through procedures involving Registered Student Organizations and the MyEngagement platform.",
					"Assisted the Center for Student Engagement in running many on-campus events."
				), "technology" => array(
					"Campus Groups",
					"Presence"
				),
			)
		),
		"skills" => array(
			"Windows Server/Active Directory",
			"Python",
			"WireShark"
		),
		"otherSkills" => array(
			"Unix",
			"Netstat",
			"Windows Administration"
		),
		"education" => array(
			"education1" => array(
				"degree" => "BS in Cybersecurity and CIT",
				"college" => "Northern Kentucky University",
				"years" => "2020 - 2025"
			),
			"education2" => array(
				"degree" => "High School Diploma",
				"college" => "Mason County High School",
				"years" => "2016-2021"
			),

		),
		"achievements" => array(
			"achievement1" => array(
				"achievementtitle" => "Dean\'s List",
				"acievementdescription" => "Rewarded to Students who receive a grade of B or A in all classes in a semeseter. I have recieved this award 3 of my 4 semesters of college."
			),
			"achievement2" => array(
				"achievementtitle" => "State 1st Place CCDC",
				"acievementdescription" => "I was a part of NKCyber's team for the Collegiate Cyber Defense Competition when we placed first in our state in 2022."
			)
		),
		"language" => array(
			"language1" => array(
				"languageName" => "English",
				"fluency" => "(Native)"
			),
			"language2" => array(
				"languageName" => "Latin",
				"fluency" => "(Educational)"
			)
		),
		"interests" => array(
			"History",
			"Comic Books"
		),
		"projects" => array(
			"project1" => array(
				"projectTitle" => "D&D Character Creator",
				"projectDescription" => "I designed a character creation tool for 5th Edition Dungeons and Dragons using Python. This was for my final project in INF 120.",
				"projectImage" => "",
				"projectLink" => "https://github.com/crolph224/INF120-Final-Project"
			)
		)

	),
	array(
		"profile" => "assets/images/dexterprofile.jpg",
		"name" => "Dexter Walters",
		"role" => "Treasurer and Build Team - NKCyber",
		"birth" => "2001-01-04",
		"email" => "waltersd3@mymail.nku.edu",
		"phone" => "(859) 312-9839",
		"linkedin" => "https://www.linkedin.com/in/dextercwalters",
		"github" => "https://github.com/DexyW",
		"website" => "",
		"bio" => "My name is Dexter Walters. I am a student at Northern Kentucky University studying Cybersecurity in my Senior year. I am incredibly involved in the University. At one point, I held a position as a Teacher's assistant, Master Teacher\s Assitant, Research Assistant, and Network & Server Team Member.",
		"work" => array(
			"work1" => array(
				"title" => "Customer Care Center",
				"company" => "Great American Insurance Group",
				"time" => "2023 - Present",
				"description" => "Assess and address the IT needs of GAIG customers, contractors, and affiliates. This includes using AD, DHCP, DNS, and more.",
				"achievements" => array(
					"Started one week ago, no achievements yet.",
					""
				), "technology" => array(
					"Active Directory",
					"Dynamic Host Control Protocol"
				),
			),
			"work2" => array(
				"title" => "Cyber Intel Analyst Intern",
				"company" => "GE Aerospace",
				"time" => "Summer 2023",
				"description" => "At GE Aerospace, I joined their DT Intern program on the Cyber Intel and Active Defense team. While there, I got to use SPLUNK, a threat management platform, OpenCTI, and other software.",
				"achievements" => array(
					"Presented to the entire company the findings that me and two other interns found during an internal threat hunt.",
					""
				), "technology" => array(
					"SPLUNK",
					"Teams"
				),
			)
		),
		"skills" => array(
			"AD",
			"DHCP",
			"DNS"
		),
		"otherSkills" => array(
			"Python",
			"Java",
			"C++"
		),
		"education" => array(
			"education1" => array(
				"degree" => "B.S. Cybersecurity",
				"college" => "Northern Kentucky University",
				"years" => "2021 - 2023"
			),
			"education2" => array(
				"degree" => "B.S. in Science",
				"college" => "Bluegrass Community and Technical College",
				"years" => "2019 - 2021"
			),

		),
		"achievements" => array(
			"achievement1" => array(
				"achievementtitle" => "NKCyber Treasurer",
				"acievementdescription" => "Voted in as the treasurer of Nothern Kentucky University's "
			),
			"achievement2" => array(
				"achievementtitle" => "NKCyber Build Team Head",
				"acievementdescription" => "Voted in as the head of Build Team."
			)
		),
		"language" => array(
			"language1" => array(
				"languageName" => "English",
				"fluency" => "(Native)"
			),
			"language2" => array(
				"languageName" => "Spanish",
				"fluency" => "(Three Years)"
			)
		),
		"interests" => array(
			"Movies",
			"Gaming"
		),
		"projects" => array(
			"project1" => array(
				"projectTitle" => "PHP Website",
				"projectDescription" => "Build a website in PHP.",
				"projectImage" => "",
				"projectLink" => ""
			)
		)
	)
);

function age($birthdate)
{
	$today = date("Y-m-d");
	$diff = date_diff(date_create($birthdate), date_create($today));
	echo 'Age: ' . $diff->format('%y');
}

function workExperience($job)
{
?>
	<article class="resume-timeline-item position-relative pb-5">

		<div class="resume-timeline-item-header mb-2">
			<div class="d-flex flex-column flex-md-row">
				<h3 class="resume-position-title font-weight-bold mb-1"><?= $job['title'] ?></h3>
				<div class="resume-company-name ms-auto"><?= $job['company'] ?></div>
			</div><!--//row-->
			<div class="resume-position-time"><?= $job['time'] ?></div>
		</div><!--//resume-timeline-item-header-->
		<div class="resume-timeline-item-desc">
			<p><?= $job['description'] ?></p>
			<h4 class="resume-timeline-item-desc-heading font-weight-bold">Achievements:</h4>

			<ul>
				<?php
				for ($i = 0; $i < count($job['achievements']); $i++) {
				?>
					<li><?= $job['achievements'][$i] ?></li>
				<?php
				}
				?>
			</ul>

			<h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
			<ul class="list-inline">
				<?php
				for ($i = 0; $i < count($job['technology']); $i++) {
				?>
					<li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?= $job['technology'][$i] ?></span></li>
				<?php
				}
				?>
			</ul>
		</div><!--//resume-timeline-item-desc-->

	</article><!--//resume-timeline-item-->

<?php
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Your name's Resume</title>

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
		<?php /* Only the following line changed from the file in the previous assignment */ ?>
		<div class="mb-4"><a href="index.php" class="btn btn-primary">Back to index</a></div>
		<div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
			<header class="resume-header pt-4 pt-md-0">
				<div class="row">
					<div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
						<img class="picture" src=<?= $members[$index]['profile'] ?> alt="">
					</div><!--//col-->
					<div class="col">
						<div class="row p-4 justify-content-center justify-content-md-between">
							<div class="primary-info col-auto">
								<h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"><?= $members[$index]['name'] ?></h1>
								<div class="title mb-1"><?= $members[$index]['role'] ?></div>
								<div class="title mb-2"><?= age($members[$index]['birth']) ?></div>
								<ul class="list-unstyled">
									<li class="mb-2"><a class="text-link" href="<?= $members[$index]['email'] ?>"><i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i><?= $members[$index]['email'] ?></a></li>
									<li><a class="text-link" href="<?= $members[$index]['phone'] ?>"><i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i><?= $members[$index]['phone'] ?></a></li>
								</ul>
							</div><!--//primary-info-->
							<div class="secondary-info col-auto mt-2">
								<ul class="resume-social list-unstyled">
									<li class="mb-3"><a class="text-link" href="<?= $members[$index]['linkedin'] ?>"><span class="fa-container text-center me-2"><i class="fab fa-linkedin-in fa-fw"></i></span>linkedin.com</a></li>
									<li class="mb-3"><a class="text-link" href="<?= $members[$index]['github'] ?>"><span class="fa-container text-center me-2"><i class="fab fa-github-alt fa-fw"></i></span>github.com</a></li>
									<?php
									if ($members[$index]['website'] == "") {
									} else {
									?>
										<li><a class="text-link" href="<?= $members[$index]['website'] ?>"><span class="fa-container text-center me-2"><i class="fas fa-globe"></i></span>yourwebsite.com</a></li>
									<?php
									};
									?>
								</ul>
							</div><!--//secondary-info-->
						</div><!--//row-->

					</div><!--//col-->
				</div><!--//row-->
			</header>
			<div class="resume-body p-5">
				<section class="resume-section summary-section mb-5">
					<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Summary</h2>
					<div class="resume-section-content">
						<p class="mb-0"><?= $members[$index]['bio'] ?></p>
					</div>
				</section><!--//summary-section-->
				<div class="row">
					<div class="col-lg-9">
						<section class="resume-section experience-section mb-5">
							<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Work Experience</h2>
							<div class="resume-section-content">
								<div class="resume-timeline position-relative">
									<?php
									foreach ($members[$index]['work'] as $jobs) {
									workExperience($jobs);
									}
									?>




								</div><!--//resume-timeline-->






							</div>
						</section><!--//projects-section-->
					</div>
					<div class="col-lg-3">
						<section class="resume-section skills-section mb-5">
							<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Skills &amp; Tools</h2>
							<div class="resume-section-content">
								<div class="resume-skill-item">
									<ul class="list-unstyled mb-4">
										<?php
										foreach ($members[$index]['skills'] as $skill) {
										?>
											<li class="mb-2">
												<div class="resume-skill-name"><?= $skill ?></div>
												<div class="progress resume-progress">
													<div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 98%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</li>
										<?php
										}
										?>
									</ul>
								</div><!--//resume-skill-item-->
								<div class="resume-skill-item">
									<h4 class="resume-skills-cat font-weight-bold">Others</h4>
									<ul class="list-inline">
										<?php
										foreach ($members[$index]['otherSkills'] as $oskill) {
										?>
											<li class="list-inline-item"><span class="badge badge-light"><?= $oskill ?></span></li>
										<?php
										}
										?>
									</ul>
								</div><!--//resume-skill-item-->
							</div><!--resume-section-content-->
						</section><!--//skills-section-->
						<section class="resume-section education-section mb-5">
							<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Education</h2>
							<div class="resume-section-content">
								<ul class="list-unstyled">
									<?php
									foreach ($members[$index]['education'] as $edu) {
									?>
										<li class="mb-2">
											<div class="resume-degree font-weight-bold"><?= $edu['degree'] ?></div>
											<div class="resume-degree-org"><?= $edu['college'] ?></div>
											<div class="resume-degree-time"><?= $edu['years'] ?></div>
										</li>
									<?php
									}
									?>
								</ul>
							</div>
						</section><!--//education-section-->
						<section class="resume-section reference-section mb-5">
							<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Achievements</h2>
							<div class="resume-section-content">
								<ul class="list-unstyled resume-awards-list">
									<?php
									foreach ($members[$index]['achievements'] as $achievement) {
									?>
										<li class="mb-2 ps-4 position-relative">
											<i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
											<div class="resume-award-name"><?= $achievement['achievementtitle'] ?></div>
											<div class="resume-award-desc"><?= $achievement['acievementdescription'] ?></div>
										</li>
									<?php
									}
									?>
								</ul>
							</div>
						</section><!--//interests-section-->
						<section class="resume-section language-section mb-5">
							<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Languages</h2>
							<div class="resume-section-content">
								<ul class="list-unstyled resume-lang-list">
									<?php
									foreach ($members[$index]['language'] as $lang) {
									?>
										<li class="mb-2"><span class="resume-lang-name font-weight-bold"><?= $lang['languageName'] ?></span> <small class="text-muted font-weight-normal"><?= $lang['fluency'] ?></small></li>
									<?php
									}
									?>
								</ul>
							</div>
						</section><!--//language-section-->
						<section class="resume-section interests-section mb-5">
							<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Interests</h2>
							<div class="resume-section-content">
								<ul class="list-unstyled">
									<?php
									foreach ($members[$index]['interests'] as $interest) {
									?>
										<li class="mb-1"><?= $interest ?></li>
									<?php
									}
									?>
								</ul>
							</div>
						</section><!--//interests-section-->

					</div>
				</div><!--//row-->
				<section class="resume-section experience-section mb-5">
					<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Projects</h2>
					<div class="row mt-4">
						<?php
						foreach ($members[$index]['projects'] as $project) {
						?>
							<div class="col-md-4">
								<div class="card">
									<img src="<?= $project['projectImage'] ?>" alt="Project 1" class="card-img-top">
									<div class="card-body">
										<h5 class="card-title"><?= $project['projectTitle'] ?></h5>
										<p class="card-text"><?= $project['projectDescription'] ?></p>
										<?php
										if ($project['projectLink'] == "") {
										} else {
										?>
											<a href="<?= $project['projectLink'] ?>" href="<?= $project['projectLink'] ?>">Go to link</a>
										<?php
										}
										?>
									</div>
								</div>
							</div>
						<?php
						}
						?>
					</div>
				</section><!--//projects-section-->
			</div><!--//resume-body-->


		</div>
	</article>


	<footer class="footer text-center pt-2 pb-5">
		<!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
		<small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by Jakob, Dexter, and Carson</small>
	</footer>



</body>

</html>



</body>

</html>

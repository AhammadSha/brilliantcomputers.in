<?php require_once __DIR__ . '/config.php'; ?>
<?php include 'main.php'; ?>
<?php include ROOT_PATH . '/includes/form-enroll.php'; ?>
<?php include ROOT_PATH . '/includes/form-sticky.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title> <?php echo $meta_title; ?> </title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="title" content="<?php echo $meta_title; ?>" />
	<meta name="description" content="<?php echo $meta_description; ?>">
	<meta name="keywords" content="" />

	<!-- Meta OG -->
    <meta property="og:url" content="<?= BASE_URL ?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo $meta_title; ?>" />
    <meta property="og:description" content="<?php echo $meta_description; ?>" />

    <!-- Meta TWITTER -->
    <meta name="twitter:title" content="<?php echo $meta_title; ?>" />
    <meta name="twitter:description" content="<?php echo $meta_description; ?>" />

    <!-- Meta & Links -->
    <meta name="author" content="Brilliant Computer Education">
	<meta name="robots" content="All"/>
	<meta name="target_country" content="IN" >
	<meta name="language" content="en">
	<meta name="theme-color" content="#FFF">
	<meta http-equiv="Cache-control" content="public">
	<link rel="alternate" href="<?= BASE_URL ?>">
	<link rel="canonical" href="<?= BASE_URL ?>">
	<link rel="SHORTCUT ICON" href="<?= BASE_URL ?>assets/media/brilliant-icon.png" type="image/png/gif"/>
	<link rel="apple-touch-icon" href="<?= BASE_URL ?>assets/media/brilliant-icon.png">

	<!-- Styles -->
	<link rel="stylesheet" type="text/css" href="<?= BASE_URL ?>style.css">
	<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
	<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css'>

	<!-- CSS FONTAWESOME & FONTFAMILY -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Commissioner:wght@100;200;300;400;500;600;700&display=swap">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:ital,wght@0,400;0,600;0,700;0,900;1,400&display=swap">
</head>
<body>

<!-- ---------- ----- HEADER ----- ---------- -->
<header class="header">
	<div class="mobile_view">
		<div class="navLogo"> <img src="<?= BASE_URL ?>assets/media/brilliant-logo.png" alt="Logo | Brilliant Computer Education"> </div>
		<button class="btnOnOff" onclick="document.getElementById('navArea').style.left = '0'">☰</button>
	</div>

	<div class="navArea" id="navArea">
		<nav class="navbar">
			<div class="logo_area">
				<div class="navLogo"> <img src="<?= BASE_URL ?>assets/media/brilliant-logo.png" alt="Logo | Brilliant Computer Education"> </div>
				<button class="btnOnOff" onclick="document.getElementById('navArea').style.left = '-100%'">⛌</button>
			</div>
			<ul class="navLinks">
				<li class="<?php if($page == 'P01'){echo 'aN';} ?>"> <a href="<?= BASE_URL ?>"> Home  </a> </li>
				<li class="<?php if($page == 'P02'){echo 'aN';} ?>"> <a href="<?= BASE_URL ?>about.html"> About </a> </li>
				<li class="submenu">
					<input type="radio" name="dropdown" id="toggle1" class="toggle">
					<label for="toggle1" class="dropbtn <?php if($page == 'P03'){echo 'aN';} ?>"> Courses <i class="fa-solid fa-angle-down"></i> </label>
					<ul class="dropdown">
						<li class="<?php if($CP == 'CP01'){echo 'aN';} ?>">
							<a href="<?= BASE_URL ?>courses/full-stack-courses.html">  Full Stack           </a>
						</li>
						<li class="<?php if($CP == 'CP02'){echo 'aN';} ?>">
							<a href="<?= BASE_URL ?>courses/nasscom-courses.html">      NASSCOM             </a>
						</li>
						<li class="<?php if($CP == 'CP03'){echo 'aN';} ?>">
							<a href="<?= BASE_URL ?>courses/web-development.html">      Web Development     </a>
						</li>
						<li class="<?php if($CP == 'CP04'){echo 'aN';} ?>">
							<a href="<?= BASE_URL ?>courses/digital-marketing.html">    Digital Marketing   </a>
						</li>
						<li class="<?php if($CP == 'CP05'){echo 'aN';} ?>">
							<a href="<?= BASE_URL ?>courses/data-analytics.html">       Data Analytics      </a>
						</li>
						<li class="<?php if($CP == 'CP06'){echo 'aN';} ?>">
							<a href="<?= BASE_URL ?>courses/cloud-computing.html">      Cloud Computing     </a>
						</li>
						<li class="<?php if($CP == 'CP07'){echo 'aN';} ?>">
							<a href="<?= BASE_URL ?>courses/programming-courses.html">  Programming         </a>
						</li>
						<li class="<?php if($CP == 'CP08'){echo 'aN';} ?>">
							<a href="<?= BASE_URL ?>courses/internship-courses.html">   Internship          </a>
						</li>
						<li class="<?php if($CP == 'CP09'){echo 'aN';} ?>">
							<a href="<?= BASE_URL ?>courses/placement-assistance-program.html"> Placement Assistance </a>
						</li>
					</ul>
				</li>
				
				<li class="submenu">
					<input type="radio" name="dropdown" id="toggle2" class="toggle">
					<label for="toggle2" class="dropbtn <?php if($page == 'P04'){echo 'aN';} ?>"> Services <i class="fa-solid fa-angle-down"></i> </label>
					<ul class="dropdown">
						<li class="<?php if($SP == 'SP01'){echo 'aN';} ?>">
							<a href="<?= BASE_URL ?>services/offline-training.html">       Offline Training        </a>
						</li>
						<li class="<?php if($SP == 'SP02'){echo 'aN';} ?>">
							<a href="<?= BASE_URL ?>services/online-training.html">        Online Training         </a>
						</li>
						<li class="<?php if($SP == 'SP03'){echo 'aN';} ?>">
							<a href="<?= BASE_URL ?>services/corporate-training.html">     Corporate Training      </a>
						</li>
						<li class="<?php if($SP == 'SP04'){echo 'aN';} ?>">
							<a href="<?= BASE_URL ?>services/internship-training.html">    Internship Training     </a>
						</li>
						<li class="<?php if($SP == 'SP05'){echo 'aN';} ?>">
							<a href="<?= BASE_URL ?>services/govt-training-programs.html"> Govt Training Programs  </a>
						</li>
						<li class="<?php if($SP == 'SP06'){echo 'aN';} ?>">
							<a href="<?= BASE_URL ?>services/job-guarantee-training.html"> Job Guarantee Training  </a>
						</li>
						<li class="<?php if($SP == 'SP07'){echo 'aN';} ?>">
							<a href="<?= BASE_URL ?>services/affiliate-training.html">     Affiliate Training      </a>
						</li>
						<li class="<?php if($SP == 'SP08'){echo 'aN';} ?>">
							<a href="<?= BASE_URL ?>services/placements.html">             Placements              </a>
						</li>
					</ul>
				</li>
				<li class="<?php if($page == 'P07'){echo 'aN';} ?>"> <a href="<?= BASE_URL ?>gallery.html"> Gallery </a> </li>
				<li class="<?php if($page == 'P05'){echo 'aN';} ?>"> <a href="<?= BASE_URL ?>blog.html">    Blogs   </a> </li>
				<li class="<?php if($page == 'P06'){echo 'aN';} ?>"> <a href="<?= BASE_URL ?>contact.html"> Contact </a> </li>
			</ul>
		</nav>
	</div>
</header>

<!--
internship_program_on_devops_with_cloud
internship_program_on_python
internship_program_on_data_science
placement_assistance_program_full_stack_net
placement_assistance_program_full_stack_java
full_stack_java_developer_program
aws_solutions_architect_associate
full_stack_data_science_program
software_testing
devops_certification_course
python_developer
full_stack_software_testing
full_stack_python
full_stack_ui_web_development_with_react
full_stack_data_science_and_ai
full_stack_net_core
full_stack_java
spring_boot_and_microservices
django_with_rest_api
digital_marketing
seo_online_training
tableau
power_apps
power_bi
r_programming_online_training
playwright_with_typescript
playwright_automation
blue_prism
automation_anywhere
ui_path
backend_development
mongo_db
mysql
sql_server
oracle
html_css_javascript
bootstrap
php_with_mysql
angular
react_js
node_js
advanced_generative_and_agentic_ai
cyber_security_and_ethical_hacking
hadoop_online_training
generative_ai_and_agentic_ai_with_python
numpy_pandas_matplotlib
data_analytics_and_business_analytics
chat_gpt
data_science_with_ai
mlops_and_aiops
devops_and_site_reliability_engineering
devops_with_multi_cloud
devops
devops_with_aws
docker_and_kubernetes
adv_spoken_english
spoken_english
campus_recruitment_training
android
iphone_operating_system
mulesoft
tosca
selenium
manual_testing
linux_administration_online_training
unix_linux
microsoft_fabric_data_engineer_training_dp_700
snowflake
multi_cloud_aws_azure
terraform_associate_certification_training_003
google_cloud_online_training
ms_azure_data_factory
azure_fundamentals_az_900
azure_devops_az_400
salesforce_lwc
azure_developer_associate_az_204
azure_administrator_az_104
salesforce_crm
azure_data_engineer
amazon_web_services_aws
ms_azure_azure_devops
dsa_with_ai_engineer_program
core_java
python_programming
data_structures_and_algorithms_with_python
java_real_time_projects
data_structures_and_algorithms_using_java
data_structures_and_algorithms_using_c
cnet
advanced_java
asp_net_mvc_5_mvc_core_90
spring
c_language

-->

<!-- ---------- ----- Enroll Popup ----- ---------- -->
<section class="enroll_now" id="enrollNow">
	<div class="enroll_card">
		<div class="closeEnroll" id="closeEnroll"> &times; </div>
		<div class="enroll_title">
			<span>🔥 LIMITED SEATS - NEXT BATCH STARTING SOON </span>
			<h2> Wait! Get Your Free Demo Before the Batch Fills Up </h2>
			<p> Talk to a course advisor today - zero obligation </p>
		</div>
		<div class="enroll_info">
			<ul> <li> Hands-On Projects </li> <li> Small Bacthes </li> <li> 100% Placement Assistance </li> <li> Online Learning </li> </ul>
			<form enctype="multipart/form-data" method="POST">
				<input type="text" name="Enroll_01" placeholder="Your Name *" required>
				<input type="text" name="Enroll_02" placeholder="Mobile Number *" required>
				<input type="text" name="Enroll_03" placeholder="Course Interested In *" required>
				<button class="btn_d" type="submit" name="Enroll"> Book My Free Demo Class </button>
			</form>
			<p>100% Private • No Spam • We call within hours</p>
		</div>
	</div>
</section>
<?php

// WEB URL
$url = "http://localhost/Localhost/brilliantcomputers.in/";

// SOCIAL MEDIA
$facebook  = "https://www.facebook.com/profile.php?id=61585767028039";
$instagram = "https://www.instagram.com/brilliant_computers_ongole/";
$linkedin  = "";
$youtube   = "";

//INFO
$phn1 = "+91 905 786 9999";
$phn2 = "+91 840 786 4444";

$email1 = "info@brilliantcomputers.in";
$email2 = "info@brillianttechnologies.co.in";

$address1 = "Anjaiah Rd, Pandaripuram, Ongole, <em>Andhra Pradesh 523002.</em>";
$addUrl1 = "https://maps.app.goo.gl/Y25PwhZA21Wwwhxj6";

$address2 = "Opp. KB East Restaurant, 1st Lane, Bhagyanagar, Ongole, <em>Andhra Pradesh – 523001.</em>";
$addUrl2 = "https://maps.app.goo.gl/HyzHsQTECRUqBZzWA";

$whatsapp = "https://wa.me/+918179099699";


// Detect current page filename
$current_page = basename($_SERVER['PHP_SELF'], ".html");

// Page-specific meta
switch ($current_page) {
	// write url without .html in --> case '****'
	case 'index':
		$meta_title = "";
		$meta_description = "";
		break;

	case 'about':
		$meta_title = "";
		$meta_description = "";
		break;

	case 'courses':
		$meta_title = "";
		$meta_description = "";
		break;

	case 'services':
		$meta_title = "";
		$meta_description = "";
		break;

	case 'gallery':
		$meta_title = "";
		$meta_description = "";
		break;

	case 'blog':
		$meta_title = "";
		$meta_description = "";
		break;

	case 'contact':
		$meta_title = "";
		$meta_description = "";
		break;


	//Courses
	case 'programming-languages':
		$meta_title = "Programming Languages Training | Learn C, Java, Python Courses";
		$meta_description = "Master programming languages like C, Java, Python, and more with hands-on training. Build strong coding skills with real-time projects and expert guidance.";
		break;

	case 'web-development':
		$meta_title = "Web Development Course | Learn Full Stack Development Training";
		$meta_description = "Learn front-end and back-end web development with HTML, CSS, JavaScript, and frameworks. Become a job-ready full stack developer with practical training.";
		break;

	case 'cloud-technologies':
		$meta_title = "Cloud Computing Training | AWS, Azure, Google Cloud Courses";
		$meta_description = "Gain expertise in cloud technologies including AWS, Microsoft Azure, and Google Cloud. Learn deployment, security, and cloud architecture with real-time projects.";
		break;

	case 'data-and-analytics':
		$meta_title = "Data Analytics Course | Learn Data Science & Analytics Training";
		$meta_description = "Build data analytics skills using Excel, SQL, Python, and visualization tools. Learn to analyze data and make data-driven decisions with practical training.";
		break;

	case 'accounting-and-office-tools':
		$meta_title = "Accounting & Office Tools Training | Tally, Excel Courses";
		$meta_description = "Learn accounting tools like Tally and office tools like MS Excel. Improve financial and office productivity skills with practical, industry-oriented training.";
		break;

	case 'designing-and-multimedia':
		$meta_title = "Designing & Multimedia Course | Graphic Design Training";
		$meta_description = "Learn graphic design, video editing, and multimedia tools like Photoshop and Illustrator. Build creative skills with hands-on projects and expert trainers.";
		break;

	case 'cad-or-engineering-design':
		$meta_title = "CAD & Engineering Design Course | AutoCAD, SolidWorks Training";
		$meta_description = "Learn CAD tools like AutoCAD, SolidWorks, and engineering design concepts. Gain practical skills for mechanical, civil, and architectural careers.";
		break;

	case 'security-and-networking':
		$meta_title = "Networking & Cyber Security Course | CCNA, Ethical Hacking";
		$meta_description = "Learn networking and cyber security concepts including CCNA, ethical hacking, and system security. Build a career in IT infrastructure and security.";
		break;

	case 'advanced-technologies':
		$meta_title = "Advanced Technology Courses | AI, Machine Learning Training";
		$meta_description = "Explore advanced technologies like Artificial Intelligence, Machine Learning, and IoT. Upgrade your skills with future-ready courses and real-time projects.";
		break;

	//SERVICES
	case 'offline-training':
		$meta_title = "";
		$meta_description = "";
		break;

	case 'online-training':
		$meta_title = "";
		$meta_description = "";
		break;

	case 'corporate-training':
		$meta_title = "";
		$meta_description = "";
		break;

	case 'internship-training':
		$meta_title = "";
		$meta_description = "";
		break;

	case 'govt-training-programs':
		$meta_title = "";
		$meta_description = "";
		break;

	case 'job-guarantee-training':
		$meta_title = "";
		$meta_description = "";
		break;

	case 'affiliate-training':
		$meta_title = "";
		$meta_description = "";
		break;

	case 'placements':
		$meta_title = "";
		$meta_description = "";
		break;
}

?>
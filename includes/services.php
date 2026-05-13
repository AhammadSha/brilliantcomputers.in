<?php

$services = [
	[
		"category" => ["Services"],
		"image"    => BASE_URL . "assets/media/service-offline-training.jpg",
		"link"     => BASE_URL .  "services/offline-training.html",
		"title"    => "Offline Training",
		"subtitle" => "Get hands-on in real classrooms, working through lessons while an instructor guides you. It’s the kind of learning where you roll up your sleeves and actually do the work."
	],
	[	
		"category" => ["Services"],
		"image"    => BASE_URL . "assets/media/service-online-training.jpg",
		"link"     => BASE_URL . "services/online-training.html",
		"title"    => "Online Training",
		"subtitle" => "Learn on your own time. Take courses whenever it fits your day. Join live sessions if you like the energy, or watch recordings when it’s convenient."
	],
	[	
		"category" => ["Services"],
		"image"    => BASE_URL . "assets/media/service-corporate-training.jpg",
		"link"     => BASE_URL . "services/corporate-training.html",
		"title"    => "Corporate Training",
		"subtitle" => "Help your team get ahead with training built for the workplace. The courses cover what matters most on the job, so the whole group can level up together."
	],
	[	
		"category" => ["Services"],
		"image"    => BASE_URL . "assets/media/service-internship-training.jpg",
		"link"     => BASE_URL . "services/internship-training.html",
		"title"    => "Internship Training",
		"subtitle" => "Jump into real projects, gain experience, and walk away with an internship certificate. You head into the job market ready for what’s next."
	],
	[	
		"category" => ["Services"],
		"image"    => BASE_URL . "assets/media/service-govt-training-programs.jpg",
		"link"     => BASE_URL . "services/govt-training-programs.html",
		"title"    => "Government Training Programs",
		"subtitle" => "Sharpen your skills with government-recognized courses. Add a valued certificate to your resume and catch employers’ attention."
	],
	[	
		"category" => ["Services"],
		"image"    => BASE_URL . "assets/media/service-job-guarantee-training.jpg",
		"link"     => BASE_URL . "services/job-guarantee-training.html",
		"title"    => "Job Guarantee Training",
		"subtitle" => "Take our career-focused courses, and when you finish, count on solid job support so you can land your next role."
	],
	[	
		"category" => ["Services"],
		"image"    => BASE_URL . "assets/media/service-affiliate-training.jpg",
		"link"     => BASE_URL . "services/affiliate-training.html",
		"title"    => "Affiliate Training",
		"subtitle" => "Join as an official partner. Get certified, meet new people, and open doors to fresh opportunities."
	],
	[	
		"category" => ["Services"],
		"image"    => BASE_URL . "assets/media/service-placements.jpg",
		"link"     => BASE_URL . "services/placements.html",
		"title"    => "Placements",
		"subtitle" => "We’ve got your back every step of the way. Get job placement help and real career advice—your success is what drives us."
	],

];
?>




<?php
function displayservices($services, $filter = null, $limit = null) {
	$count = 0;
	foreach ($services as $service) {
		if (
			$filter === null ||
			$service['title'] == $filter ||
			(is_array($service['category']) && in_array($filter, $service['category']))
		) {
		if ($limit !== null && $count >= $limit) break;
?>
			<div class="serviceCard">
				<div class="image_box">
					<img src="<?= $service['image'] ?>" alt="<?= $service['title'] ?> | Brilliant Computer Education">
					<img src="<?= $service['image'] ?>" alt="<?= $service['title'] ?> | Brilliant Computer Education">
				</div>
				<div class="serviceText">
					<h3> <?= $service['title'] ?>    </h3>
					<p>  <?= $service['subtitle'] ?> </p>
					<a href="<?= $service['link'] ?>"> <button class="btn_d"> Learn More </button> </a>
				</div>
			</div>
<?php
			$count++;
		}
	}
}
?>


<?php
function getService($services, $filter) {
    foreach ($services as $service) {
        if (
            $service['title'] == $filter ||
            (is_array($service['category']) && in_array($filter, $service['category']))
        ) {
            return $service;
        }
    }
    return null;
}
?>
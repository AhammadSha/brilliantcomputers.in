<?php

$blogs = [
	[
		"category" => ["blogs"],
		"image"    => BASE_URL . "assets/media/blog-what-languages-do-full-stack-developers-use.jpg",
		"link"     => BASE_URL .  "blog/what-languages-do-full-stack-developers-use.html",
		"title"    => "What Languages Do Full Stack Developers Use?",
		"date"    => "24 APR 2026",
	],
	[
		"category" => ["blogs"],
		"image"    => BASE_URL . "assets/media/blog-can-i-learn-full-stack-development-in-3-months.jpg",
		"link"     => BASE_URL .  "blog/can-i-learn-full-stack-development-in-3-months.html",
		"title"    => "Can I Learn Full-Stack Development in 3 Months?",
		"date"    => "26 APR 2026",
	],
	[
		"category" => ["blogs"],
		"image"    => BASE_URL . "assets/media/blog-what-skills-are-required-for-a-full-stack-developer.jpg",
		"link"     => BASE_URL .  "blog/what-skills-are-required-for-a-full-stack-developer.html",
		"title"    => "What Skills Are Required for a Full Stack Developer?",
		"date"    => "28 APR 2026",
	],
	[
		"category" => ["blogs"],
		"image"    => BASE_URL . "assets/media/blog_image-01.jpg",
		"link"     => BASE_URL .  "blog/how-to-practice-data-structures-coding-interviews.html",
		"title"    => "How to Practice Data Structures Coding Interviews",
		"date"    => "30 APR 2026",
	],
];
?>


<?php
function displayBlogs($blogs, $filter = null, $limit = null) {
	$count = 0;
	$blogs = array_reverse($blogs);// Reverse the array
	foreach ($blogs as $blog) {
		if (
			$filter === null ||
			$blog['title'] == $filter ||
			(is_array($blog['category']) && in_array($filter, $blog['category']))
		) {
		if ($limit !== null && $count >= $limit) break;
?>
			<div class="blogCard">
				<div class="image_box">
					<img src="<?= $blog['image'] ?>" alt="<?= $blog['title'] ?> | Brilliant Computer Education">
					<img src="<?= $blog['image'] ?>" alt="<?= $blog['title'] ?> | Brilliant Computer Education">
				</div>
				<div class="blogText">
					<h3> <?= $blog['title'] ?> </h3>
					<a href="<?= $blog['link'] ?>"> <button class="btn_d"> Read Artical </button> </a>
				</div>
			</div>
<?php
			$count++;
		}
	}
}
?>

<?php
function getblog($blogs, $filter) {
    foreach ($blogs as $blog) {
        if (
            $blog['title'] == $filter ||
            (is_array($blog['category']) && in_array($filter, $blog['category']))
        ) {
            return $blog;
        }
    }
    return null;
}
?>
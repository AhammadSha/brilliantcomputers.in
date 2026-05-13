<?php
$gallery = [
	"Photos" => [
		[ "link" => BASE_URL . "assets/media/gallery/2022-gallery_image-01.jpg" ],
		[ "link" => BASE_URL . "assets/media/gallery/2022-gallery_image-02.jpg" ],
		[ "link" => BASE_URL . "assets/media/gallery/2018-gallery_image-01.jpg" ],
		[ "link" => BASE_URL . "assets/media/gallery/2009-gallery_image-01.jpg" ],
	],

	"Awards" => [
		[ "link" => BASE_URL . "assets/media/gallery/2019-gallery_image-01.jpg" ],
		[ "link" => BASE_URL . "assets/media/gallery/2019-gallery_image-02.jpg" ],
		[ "link" => BASE_URL . "assets/media/gallery/2019-gallery_image-03.jpg" ],
		[ "link" => BASE_URL . "assets/media/gallery/2009-gallery_image-02.jpg" ],
	],

	"EducationFair" => [
		[ "link" => BASE_URL . "assets/media/gallery/2015-gallery_image-01.jpg" ],
		[ "link" => BASE_URL . "assets/media/gallery/2015-gallery_image-02.jpg" ],
		[ "link" => BASE_URL . "assets/media/gallery/2015-gallery_image-03.jpg" ],
		[ "link" => BASE_URL . "assets/media/gallery/2015-gallery_image-04.jpg" ],
		[ "link" => BASE_URL . "assets/media/gallery/2015-gallery_image-05.jpg" ],
	],
];
?>

<?php
function displayGallery($gallery, $project = null) {
	// If specific project selected
	if ($project && isset($gallery[$project])) {
		$items = $gallery[$project];
	} else {
		// Merge all groups
		$items = [];
		foreach ($gallery as $group) {
			$items = array_merge($items, $group);
		}
	}

	foreach ($items as $item) {
		$link = $item['link'];
?>

		<div class="galleryCard">
<?php if (strpos($link, 'youtube') !== false): ?>
				<!-- YouTube -->
				<iframe src="<?= $link ?>" allowfullscreen></iframe>
<?php elseif (preg_match('/\.(jpg|jpeg|png|webp|gif)$/i', $link)): ?>
				<!-- Image -->
				<img src="<?= $link ?>" alt="Gallery Image" />
<?php elseif (preg_match('/\.(mp4|webm|ogg)$/i', $link)): ?>
				<!-- Video -->
				<video controls width="100%">
					<source src="<?= $link ?>">
				</video>
			<?php endif; ?>
		</div>
<?php
	}
}
?>
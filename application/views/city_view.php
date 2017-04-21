<div class="main-city-area">

	<?php foreach ($list as $item) { ?>
		<div class="image-wrapper" style="background-image: url(<?php echo aws_upload_url() . $item['url'] ?>);">
			<div class="image-title">
				<p><?php echo $item['name'] ?></p>
				<p><?php echo $item['country'] ?></p>
			</div>
		</div>
	<?php } ?>

</div>
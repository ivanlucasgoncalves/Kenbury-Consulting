<?php
	$image_left = wp_get_attachment_image(get_sub_field('banner_left_image'), 'large');
	$image_right = wp_get_attachment_image(get_sub_field('banner_right_image'), 'large');
?>

<article id="dbl-clmn-img">
	
	<div class="container">
		<div class="row">
			<section class="col-md-6">
				<?php if (get_sub_field('banner_left_image')) { ?>
					<?php echo $image_left; ?>
				<?php } ?>
			</section>
			<section class="col-md-6">
				<?php if (get_sub_field('banner_right_image')) { ?>
					<?php echo $image_right; ?>
				<?php } ?>
			</section>
		</div>
	</div>
	
</article>
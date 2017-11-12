<?php
	$image_full = wp_get_attachment_image(get_sub_field('banner_full_image'), 'large');
?>

<article id="full-clmn-img">
	
	<div class="container">
		<div class="row">
			<article class="col">
				<?php if (get_sub_field('banner_full_image')) { ?>
					<?php echo $image_full; ?>
				<?php } ?>
			</article>
		</div>
	</div>
	
</article>
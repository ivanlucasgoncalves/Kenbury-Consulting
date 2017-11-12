<?php
	$content = get_sub_field( 'full_content' );
	$title = get_sub_field( 'full_content_title' );
?>

<article id="full-clmn-cont">
	
	<div class="container">
		<div class="row">
			<section class="col">
				<?php if (get_sub_field('full_content_title')) { ?>
					<h2><?php echo $title; ?></h2>
				<?php } ?>
			</section>
		</div>
		<div class="row">
			<section class="col">
				<?php if (get_sub_field('full_content')) { ?>
					<?php echo $content; ?>
				<?php } ?>
			</section>
		</div>
	</div>
	
</article>
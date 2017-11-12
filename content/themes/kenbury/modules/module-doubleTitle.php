<?php
	$double_cont_title_left = get_sub_field( 'double_content_title_left' );
	$double_cont_left = get_sub_field( 'double_content_left' );
	$double_cont_title_right = get_sub_field( 'double_content_title_right' );
	$double_cont_right = get_sub_field( 'double_content_right' );
?>

<article id="dbl-clmn-titles">
	
	<div class="container">
		<div class="row">
			<section class="col-md-6">
				<?php if (get_sub_field('double_content_title_left')) { ?>
					<h4><?php echo $double_cont_title_left; ?></h4>
				<?php } ?>
				<?php if (get_sub_field('double_content_left')) { ?>
					<?php echo $double_cont_left; ?>
				<?php } ?>
			</section>
			<section class="col-md-6">
				<?php if (get_sub_field('double_content_title_right')) { ?>
					<h4><?php echo $double_cont_title_right; ?></h4>
				<?php } ?>
				<?php if (get_sub_field('double_content_right')) { ?>
					<?php echo $double_cont_right; ?>
				<?php } ?>
			</section>
		</div>
	</div>
	
</article>
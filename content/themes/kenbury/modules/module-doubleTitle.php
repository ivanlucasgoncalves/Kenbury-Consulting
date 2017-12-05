<?php
	$double_cont_title_left = get_sub_field( 'double_content_title_left' );
	$double_cont_left = get_sub_field( 'double_content_left' );
	$double_cont_title_right = get_sub_field( 'double_content_title_right' );
	$double_cont_right = get_sub_field( 'double_content_right' );
?>

<div id="dbl-clmn-titles">

		<div class="row">
			<div class="col-md-6">
				<?php if (get_sub_field('double_content_title_left')) { ?>
					<h2><?php echo $double_cont_title_left; ?></h2>
				<?php } ?>
				<?php if (get_sub_field('double_content_left')) { ?>
					<?php echo $double_cont_left; ?>
				<?php } ?>
			</div>
			<div class="col-md-6">
				<?php if (get_sub_field('double_content_title_right')) { ?>
					<h2><?php echo $double_cont_title_right; ?></h2>
				<?php } ?>
				<?php if (get_sub_field('double_content_right')) { ?>
					<?php echo $double_cont_right; ?>
				<?php } ?>
			</div>
		</div>
	
</div>
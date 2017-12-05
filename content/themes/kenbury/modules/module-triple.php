<?php
	$title_left = get_sub_field( 'triple_title_left' );
	$left = get_sub_field( 'triple_left_column' );
	$title_middle = get_sub_field( 'triple_title_middle' );
	$middle = get_sub_field( 'triple_middle_column' );
	$title_right = get_sub_field( 'triple_title_right' );
	$right = get_sub_field('triple_right_column');
?>

<div id="trp-clmn">
	
		<div class="row">
			<div class="col-md-4">
				<?php if (get_sub_field('show_the_titles')) : ?>
					<?php if (get_sub_field('triple_title_left')) { ?>
						<h3><?php echo $title_left; ?></h3>
					<?php } ?>
				<?php endif; ?>
				<?php if (get_sub_field('triple_left_column')) { ?>
					<?php echo $left; ?>
				<?php } ?>
			</div>
			<div class="col-md-4">
				<?php if (get_sub_field('show_the_titles')) : ?>
				<?php if (get_sub_field('triple_title_middle')) { ?>
					<h3><?php echo $title_middle; ?></h3>
				<?php } ?>
				<?php endif; ?>
				<?php if (get_sub_field('triple_middle_column')) { ?>
					<?php echo $middle; ?>
				<?php } ?>
			</div>
			<div class="col-md-4">
				<?php if (get_sub_field('show_the_titles')) : ?>
				<?php if (get_sub_field('triple_title_right')) { ?>
					<h3><?php echo $title_right; ?></h3>
				<?php } ?>
				<?php endif; ?>
				<?php if (get_sub_field('triple_right_column')) { ?>
					<?php echo $right; ?>
				<?php } ?>
			</div>
		</div>
	
</div>
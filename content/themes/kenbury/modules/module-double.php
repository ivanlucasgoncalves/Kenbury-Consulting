<?php
	$left = get_sub_field( 'double_left_column' );
	$right = get_sub_field('double_right_column');
?>

<article id="dbl-clmn">
	
		<div class="row">
			<div class="col-md-6 lft-cnt">
				<?php if (get_sub_field('double_left_column')) { ?>
					<?php echo $left; ?>
				<?php } ?>
			</div>
			<div class="col-md-6 rgh-cnt">
				<?php if (get_sub_field('double_right_column')) { ?>
					<?php echo $right; ?>
				<?php } ?>
			</div>
		</div>
	
</article>
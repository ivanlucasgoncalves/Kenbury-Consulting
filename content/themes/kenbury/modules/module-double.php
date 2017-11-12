<?php
	$left = get_sub_field( 'double_left_column' );
	$right = get_sub_field('double_right_column');
?>

<article id="dbl-clmn">
	
	<div class="container">
		<div class="row">
			<article class="col-md-6 lft-cnt">
				<?php if (get_sub_field('double_left_column')) { ?>
					<?php echo $left; ?>
				<?php } ?>
			</article>
			<article class="col-md-6 rgh-cnt">
				<?php if (get_sub_field('double_right_column')) { ?>
					<?php echo $right; ?>
				<?php } ?>
			</article>
		</div>
	</div>
	
</article>
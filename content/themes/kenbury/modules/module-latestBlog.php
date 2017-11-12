

<div class="feature-bottom">
	
	<div id="get-in-touch" class="container">
		<div class="row justify-content-center">
			<div class="col-11">
				<div class="blk-getintouch">
					<div class="row justify-content-md-between align-items-center">
						<div class="col-md-4 ctn-left">
							<h2>Get in touch</h2>
							<p>We are always ready to help.</p>
						</div>
						<div class="col-md-5 ctn-right">
							<a href="tel:1300793724">1300 793 724</a>
							<a href="mailto:info@kenbury.com.au">info@kenbury.com.au</a>
							<br/>
							<p>Level 9, 167 Eagle St, Brisbane</p>
							<p>ABN – 38 610 492 012</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<?php $the_query = new WP_Query( 'posts_per_page=1' ); ?>
		<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
			
			<article id="lat-blog-clmn" <?php if ( has_post_thumbnail() ) : ?> style="background-image:url(<?php the_post_thumbnail_url('large'); ?>)" <?php endif; ?> >
				
				<div class="container">
					<div class="row justify-content-md-between align-items-center">

							<div class="col-md-5">
								<h4>Latest Blog Post</h4>
								<h2><?php the_title(); ?></h2>
							</div>
							
							<div class="col-md-6 col-lg-5">
								<div class="ctn-read">
									<?php the_content(__('')); //Adding more tag without using any default text?>
									<a href="<?php the_permalink() ?>" class="lnk-read">Read the article</a>
								</div>
							</div>
						
					</div>
				</div>
				
			</article>

	<?php 
		endwhile;
		wp_reset_postdata(); ?>
	
</div>


	
<?php 

/* Template Name: Homepage Template*/

get_header(); 

?>


<main id="content" class="shaun">
	<div class="gate-bg">
		<div class="container">
			<div class="columns-2 gate-spacer"></div>
			<div class="columns-6 gate-cta">
				<h4>The Hub exists to help West Virginia's communities most in need. Got some big ideas for your community? <span>We can help.</span></h4>
				<div id="dropdown-trigger" class="cta-dropdown">
					<h6>I'd like The Hub to help me...</h6>
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
					    <path d="M7 10l5 5 5-5z"/>
					</svg>
					<div class="dropdown-menu-type">
						<a href=""><h5>Help my community</h5></a>
						<a href=""><h5>Host an event</h5></a>
						<a href=""><h5>Be a better advocate</h5></a>
						<a href=""><h5>Strengthen my organization</h5></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="secondary-cta-group">
				<?php if (have_rows('callout_boxes')):while (have_rows('callout_boxes')):the_row();
								$background = get_sub_field('cb_background_image');
								$background_url = $background['sizes']['large'];
								$callout_text = get_sub_field('callout_text');
								$page_link = get_sub_field('page_link');;
						?>
							<div class="columns-4 secondary-cta">
								<h4><?php echo $callout_text; ?></h4>
              					<div class="screen" style="background-image: url('<?php echo $background_url; ?>')"></div>
							</div>
							<?php endwhile; endif; ?>
			</div>
		</div>
	</div>

</main><!-- End of Content -->

<?php get_footer(); ?>
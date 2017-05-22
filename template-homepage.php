<?php

/* Template Name: Homepage Template*/

get_header();

?>


<main id="content" class="shaun">
	<?php
		$background = get_field('wg_background_image');
		$background_url = $background['sizes']['large'];
		$callout_white_text = get_field('callout_text');
		$callout_green = get_field('callout_green_text');
		$dropdown = get_field('form_dropdowns');
	?>
	<div class="gate-bg has-parallax" style="background-image:url('<?php echo $background_url; ?>')">
		<div class="container">
			<div class="columns-2 gate-spacer"></div>
			<div class="columns-6 gate-cta">

				<h4><?php echo $callout_white_text; ?> <span><?php echo $callout_green; ?></span></h4>

				<div id="dropdown-trigger" class="cta-dropdown">
					<h6>I'd like The Hub to help me...</h6>
					<svg id="dropdown-indicator" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
					    <path d="M7 10l5 5 5-5z"/>
					</svg>
					<div class="dropdown-menu-type">
						<?php if(have_rows('form_dropdowns')):while(have_rows('form_dropdowns')):the_row();
							$d_link_text=get_sub_field('label');
							$d_link = get_sub_field('link');
						?>
						<a href="<?php echo $d_link; ?>"><h5><?php echo $d_link_text; ?></h5></a>
						<?php endwhile; endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="secondary-cta-group">
				<?php if (have_rows('callout_boxes')):while (have_rows('callout_boxes')):the_row();
								$background_cb = get_sub_field('cb_background_image');
								$background_url_cb = $background_cb['sizes']['large'];
								$callout_text = get_sub_field('callout_text');
								$page_link = get_sub_field('page_link');;
						?>
							<a href="<?php echo $page_link ?>" class="columns-4 secondary-cta">
								<h4><?php echo $callout_text; ?></h4>
              					<div class="cta-bg" style="background-image: url('<?php echo $background_url_cb; ?>')"></div>
							</a>
							<?php endwhile; endif; ?>
			</div>
		</div>
	</div>

</main><!-- End of Content -->

<?php get_footer(); ?>

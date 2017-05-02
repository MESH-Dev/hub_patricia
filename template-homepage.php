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
				<div class="columns-4 secondary-cta">
					<h4>Keep up with The Hub as we help communities in West Virginia</h4>
					<div class="screen" style="background-image: url('https://source.unsplash.com/random?landscape')"></div>
				</div>
				<div class="columns-4 secondary-cta">
					<h4>Get to know The Hub team</h4>
					<div class="screen" style="background-image: url('https://source.unsplash.com/random?buildings')"></div>
				</div>
				<div class="columns-4 secondary-cta">
					<h4>Help this group bring positive change to their community</h4>
					<div class="screen" style="background-image: url('https://source.unsplash.com/random?people')"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="columns-12">
<!-- 				<?php //if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

					<h1><?php //the_title(); ?></h1>

					<?php //the_content(); ?>

				<?php //endwhile; ?> -->
				
			</div>

<!-- 			<div class="columns-3">

				Change this to repeater of custom fields

				<?php //get_sidebar(); ?>
			</div> -->

		</div>
	</div>

</main><!-- End of Content -->

<?php get_footer(); ?>
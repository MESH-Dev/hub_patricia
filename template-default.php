<?php 

/* Template Name: Default Template*/

get_header(); 

?>


<main id="content" data-creator="shaun">

	<div class="container">
		<div class="row">
			<div class="columns-12">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

					<h1><?php //the_title(); ?></h1>

					<?php the_content(); ?>

				<?php endwhile; ?>
			</div>

<!-- 			<div class="columns-3">

				Change this to repeater of custom fields

				<?php//get_sidebar(); ?>
			</div> -->

		</div>
	</div>

</main><!-- End of Content -->

<?php get_footer(); ?>
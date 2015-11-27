<?php /* Template Name: inner-page */
get_header();
the_post();
?>

<div class="content inner-page">
	<?php the_content(); ?>
</div>

<?php get_footer(); ?>
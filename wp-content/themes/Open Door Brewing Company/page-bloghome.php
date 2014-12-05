<?php

    /*
        Template Name: Blog Homepage
    */

?>

<?php get_header(); ?>

<main id="blog-content" class="clear-fix content center">
	
	<h1>Hoppy Thoughts</h1>
	<h2>ODBC Beer Blog</h2>
	
	
	<?php
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		query_posts('posts_per_page=3&paged=' . $paged); 
	?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article class="post left" <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<h3 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
			<a href="<?php the_permalink() ?>"> <img class="post-thumbnail" src='<?php echo get_post_meta($post->ID,'post-image-small',true); ?> '/></a>
			<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
			<br/>
			<div class="entry">
			<p>
				<?php the_excerpt(); ?>
			</p>
			</div>
			 <a class="continue right moveUp" href="<?php the_permalink() ?>">Read More...</a>
       
		</article>
	
	<?php endwhile; ?>
 
 
	<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>
	

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>
</main>



<?php get_sidebar(); ?>

<?php get_footer(); ?>
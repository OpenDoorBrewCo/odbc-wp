<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="content center" <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<section class="post left">
				<table>
					<tr>
						<td>
							<?php echo get_avatar( get_the_author_email(), '162' ); ?>
						</td>
						<td>
							<h1 class="post-title"><?php the_title(); ?></h1>
							<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
						</td>
					</tr>
				</table>

				<div class="entry post-content">
					
					<?php the_content(); ?>

					<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
					
					<?php the_tags( 'Tags: ', ', ', ''); ?>

				</div>
				
				<?php comments_template(); ?>
				
			</section>
			
			<?php edit_post_link('Edit this entry','','.'); ?>
			
		</div>

	

	<?php endwhile; endif; ?>
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>
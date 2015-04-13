<?php get_header(); ?>
<div class="posts">
	<div class="container-fluid">
		<?php
		if (have_posts()) :
			while (have_posts()) : the_post(); ?>
		<div class="row">
			<div class="col-lg-12 col-md-12">
				
				<div class="post <?php post_class(); ?>">
					<?php if ( has_post_thumbnail() ) { ?>
					<div class="thumbnail">
						<?php the_post_thumbnail(); ?>
					</div>
					<?php } ?>
					<p class=" category"><?php echo the_category(', '); ?></p>
					<h2 class="title" id="post-<?php the_ID(); ?>">
						<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php echo get_the_title(); ?></a>
					</h2>
					<p class="meta text-muted">
						<small>Posted by <?php the_author_posts_link(); ?> on <?php echo get_the_date(); ?></small>
					</p>
					<div class="content">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</div>
		<?php
			endwhile;
		endif;
		?>

		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="page_nav_links">
					<?php if ( is_active_sidebar( 'single_post_bottom_sidebar' ) ) : ?>
						<div id="single-post-bottom-sidebar" class="single_post_bottom_sidebar widget-area" role="complementary">
							<?php dynamic_sidebar( 'single_post_bottom_sidebar' ); ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="comments">
					<?php comments_template(); ?> 
				</div>
			</div>
		</div>
		
	</div>
</div>
<?php get_footer(); ?>

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
					<div class="excerpt">
						<?php echo get_the_excerpt(); ?>
					</div>
					<p class="comments"><small><?php comments_number( 'no responses', 'one response', '% responses' ); ?></small></p>
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
					<p><small><?php posts_nav_link(); ?></small></p>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>

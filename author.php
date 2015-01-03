<?php get_header(); ?>
<div class="posts">
	<div class="container-fluid">
		<div class="row prepend-top">
			<div class="col-md-12">
				<?php $curauth = get_userdata($author); ?>
				<div class="media author-card">
					<a class="pull-left" href="#">
						<img src="<?php echo get_gravatar_url($curauth->user_email); ?>" />
					</a>
					<div class="media-body">
						<h4 class="media-heading"><?php echo $curauth->display_name; ?></h4>
						<p class="lead"><?php echo $curauth->description; ?></p>
					</div>
				</div>
			</div>
		</div>
		<?php
		if (have_posts()) :
			while (have_posts()) : the_post(); ?>
		<div class="row">
			<div class="col-lg-12 col-md-12">
				
				<div class="post <?php post_class(); ?>">
					<h4 class="title" id="post-<?php the_ID(); ?>">
						<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php echo get_the_title(); ?></a>
					</h4>
					<p class="meta text-muted">
						<small>Posted by <?php the_author_posts_link(); ?> on <?php echo get_the_date(); ?></small>
					</p>
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

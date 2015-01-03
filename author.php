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
						<p class="lead description"><?php echo $curauth->description; ?></p>
						<p class="social-icons icon-rounded icon-zoom">
							<?php if(isset($curauth->user_url) && strlen($curauth->user_url)) { ?>
								<a target="_blank" title="<?php echo $curauth->display_name; ?>'s Website" href="<?php echo $curauth->user_url; ?>"><i class="fa fa-lg fa-globe"></i></a>
							<?php } ?>
							<?php if(isset($curauth->facebook_url) && strlen($curauth->facebook_url)) { ?>
								<a target="_blank" title="<?php echo $curauth->display_name; ?> on Facebook" href="<?php echo $curauth->facebook_url; ?>"><i class="fa fa-lg fa-facebook"></i></a>
							<?php } ?>
							<?php if(isset($curauth->twitter_url) && strlen($curauth->twitter_url)) { ?>
								<a target="_blank" title="<?php echo $curauth->display_name; ?> on Twitter" href="<?php echo $curauth->twitter_url; ?>"><i class="fa fa-lg fa-twitter"></i></a>
							<?php } ?>
							<?php if(isset($curauth->linkedin_url) && strlen($curauth->linkedin_url)) { ?>
								<a target="_blank" title="<?php echo $curauth->display_name; ?> on LinkedIn" href="<?php echo $curauth->linkedin_url; ?>"><i class="fa fa-lg fa-linkedin"></i></a>
							<?php } ?>
							<?php if(isset($curauth->googleplus_url) && strlen($curauth->googleplus_url)) { ?>
								<a target="_blank" title="<?php echo $curauth->display_name; ?> on Google+" href="<?php echo $curauth->googleplus_url; ?>"><i class="fa fa-lg fa-google-plus"></i></a>
							<?php } ?>
							<?php if(isset($curauth->instagram_url) && strlen($curauth->instagram_url)) { ?>
								<a target="_blank" title="<?php echo $curauth->display_name; ?> on Instagram" href="<?php echo $curauth->instagram_url; ?>"><i class="fa fa-lg fa-instagram"></i></a>
							<?php } ?>
							<?php if(isset($curauth->soundcloud_url) && strlen($curauth->soundcloud_url)) { ?>
								<a target="_blank" title="<?php echo $curauth->display_name; ?> on Soundcloud" href="<?php echo $curauth->soundcloud_url; ?>"><i class="fa fa-lg fa-soundcloud"></i></a>
							<?php } ?>
							<?php if(isset($curauth->lastfm_url) && strlen($curauth->lastfm_url)) { ?>
								<a target="_blank" title="<?php echo $curauth->display_name; ?> on Last.fm" href="<?php echo $curauth->lastfm_url; ?>"><i class="fa fa-lg fa-lastfm"></i></a>
							<?php } ?>
						</p>
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

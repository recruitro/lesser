<?php defined('ABSPATH') or die();

require_once( get_stylesheet_directory() . '/includes/header.php' ); 

?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="post">
				<h1 class="title"><?php the_title(); ?></h1>
				<div class="content">
					<?php the_content(); ?>
				</div>
			</div>
			<?php endwhile; ?>
			
		</div>
	</div>
</div>

<?php require_once( get_stylesheet_directory() . '/includes/footer.php' ); ?>
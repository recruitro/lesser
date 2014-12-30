
	<div class="footer">
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <?php
	            wp_nav_menu( array(
	                'menu'              => 'footer-menu',
	                'theme_location'    => 'footer-menu',
	                'depth'             => 2,
	                'menu_class'        => 'nav navbar-nav',
	            ));
	        ?>
		  </div>
		</nav>
	</div>	
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<?php wp_footer(); ?>
	</body>
</html>
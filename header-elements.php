<div class="container">
		
		<div class="gravatar">
			<?php 
				// grab admin email and their photo
				$admin_email = get_option('admin_email');
				echo get_avatar( $admin_email, 100 ); 
			?>
		</div><!--/ author -->
		
		<div id="brand">
			<h1 class="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php //bloginfo( 'name' ); ?>
					<img src="<?php echo get_template_directory_uri() ?>/img/logo_bianco.png" alt="Kludge.it logo">
				</a>
			</h1>
		</div><!-- /brand -->
	
		<!-- <nav role="navigation" class="site-navigation main-navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav> --><!-- .site-navigation .main-navigation -->
		
		
		<div class="clear"></div>
	</div><!--/container -->

	<nav class="push-menu">
		<div class="menu-link">
			<div class="box-shadow-menu"></div>
		</div>
		<div class="menu-content">
			<?php wp_nav_menu( array( 
				'theme_location' => 'primary',
				'items_wrap'      	=> '<ul><li><h3>Menu</h3></li>%3$s</ul>' ) ); ?>
			<?php wp_nav_menu( array( 
				'theme_location' 	=> 'linguaggi',
				'items_wrap'      	=> '<ul><li><h3>Linguaggi</h3></li>%3$s</ul>' ) ); ?>
			<p class="copy">L'intero universo fisico potrebbe un giorno collassare in uno spazio infinitamente piccolo. Qualora da tale processo dovesse in seguito riemergere un altro universo, l'esistenza di questo blog nel nuovo universo non potra' essere garantita. - <a href="http://www.curromatteo.com" title="Questo blog &egrave; sporadicamente scritto e curato da Matteo &ograve;">Matteo Curr&ograve;</a></p>
		</div>	
	</nav>
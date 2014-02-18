<?php get_header(); ?>


<?php
	/*-----------------------------------------------------------------------------------*/
	/* Start header
	/*-----------------------------------------------------------------------------------*/
?>

<header id="masthead" class="site-header" role="banner">
	<?php get_template_part( 'header', 'image' ); ?>
	<?php get_template_part( 'header', 'elements' ); ?>
		
</header><!-- #masthead .site-header -->

<div class="container">

	<div id="primary">
		<div id="content" role="main">

	
<?php
	/*-----------------------------------------------------------------------------------*/
	/* Start Page loop
	/*-----------------------------------------------------------------------------------*/
	
	if( is_404()) {
?>

					<article class="post">
					
						<h1 class="title">OPS!</h1>
						
						<div class="the-content">
						<br>
							<p>Sembra che quello che stavi cercando non ci sia pi&ugrave;...<br>
							Prova a dare un'occhiata alla <a href="/" title="Kludge Home page">home page</a>.</p>
						</div><!-- the-content -->
						
					</article>

	<?php } // end is_404(); ?>

		</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->

</div><!-- / container-->

<?php get_footer(); ?>
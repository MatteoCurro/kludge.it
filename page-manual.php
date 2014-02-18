<?php
/*
Template Name: Manuale
*/
?>
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
	
	if( is_page()) {
?>

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<article class="post">
					
						<h1 class="title"><?php the_title() ?></h1>
						
						<div class="the-content">
							<?php the_content(); ?>
							<?php 
								$args = array( 'taxonomy' => 'linguaggio' );

								$terms = get_terms('linguaggio', $args);

								$count = count($terms); $i=0;
								if ($count > 0) {
								    $term_list = '<ul class="linguaggio">';
								    foreach ($terms as $term) {
								        $i++;
								    	$term_list .= '<a href="' . get_term_link( $term ) . '" title="' . sprintf(__('Visualizza il linguaggio %s', 'my_localization_domain'), $term->name) . '"><li>' . $term->name . '</li></a>';
								    }
								    $term_list .= "</ul>";
								    echo $term_list;
								}
							?>

							
							
							<?php wp_link_pages(); ?>
						</div><!-- the-content -->
						
					</article>

				<?php endwhile; ?>

			<?php else : ?>
				
				<article class="post error">
					<h1 class="404">Nothing posted yet</h1>
				</article>

			<?php endif; ?>

	<?php } // end is_page(); ?>

		</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->

</div><!-- / container-->

<?php get_footer(); ?>
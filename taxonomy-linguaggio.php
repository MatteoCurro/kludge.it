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
	/* Start Home loop
	/*-----------------------------------------------------------------------------------*/
	
	if( is_home() || is_archive() ) {
	
?>
	<?php
		if( is_tax() ) {
		    global $wp_query;
		    $term = $wp_query->get_queried_object();
		    $title = $term->name;
		    $description = $term->description;

		    echo "<h1 class=\"title\">$title</h1>";
		    echo (!empty($description)) ? "<p>$description</p>" : "";
		} 
	?>
			<?php 
			$args=array(
  'linguaggio' => $title,
  'post_type' => 'manuale',
  'post_status' => 'publish',
  'posts_per_page' => -1,
  'caller_get_posts'=> 1,
  'orderby' => 'title', 
  'order' => 'asc'
);
$my_query = null;
$my_query = new WP_Query($args);
			if ( $my_query->have_posts() ) : ?>

			<article class="no-line">
						
				<ul class="linguaggio">

				<?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
							
<a href="<?php the_permalink(); ?>" title="<?php echo $title.": ";the_title(); ?>">
							<li>
								
									<?php the_title() ?>
								
							</li></a>

				<?php endwhile; ?>

				</ul>
				
			</article>
				


			<?php else : ?>
				
				<article class="post error">
					<h1 class="404">Nothing posted yet</h1>
				</article>

			<?php endif; ?>

		
	<?php } //end is_home(); ?>



		</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->

</div><!-- / container-->

<?php get_footer(); ?>
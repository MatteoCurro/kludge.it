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
	/* Start Single loop
	/*-----------------------------------------------------------------------------------*/
	
	if( is_single() ) {
?>
		

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

				

					<article class="post">
						<h1 class="title"><?php
				$term_list = wp_get_post_terms($post->ID, 'linguaggio', array("fields" => "all"));
				foreach ($term_list as $linguaggio) {
					echo $linguaggio->name;
				}
				?>: <?php the_title() ?></h1>
						<div class="post-meta">
							<?php if( comments_open() ) : ?>
								<span class="comments-link">
									<?php comments_popup_link( __( 'Comment', 'less' ), __( '1 Comment', 'less' ), __( '% Comments', 'less' ) ); ?>
								</span>
							<?php endif; ?>
						
						</div><!--/post-meta -->
						
						<div class="the-content">
							<?php the_content( 'Continue...' ); ?>
							
							<?php wp_link_pages(); ?>
						</div><!-- the-content -->
						
						<div class="meta clearfix">
							<div class="category">
							
							</div>
							<div class="tags"><?php echo get_the_tag_list( '| &nbsp;', '&nbsp;' ); ?></div>
						</div><!-- Meta -->						
						
					</article>
					<?php
				$term_list = wp_get_post_terms($post->ID, 'linguaggio', array("fields" => "all"));
				foreach ($term_list as $linguaggio) {
					echo "<a href=\"".get_site_url()."/?linguaggio=$linguaggio->name\">&larr; Visualizza il manuale $linguaggio->name</a><br/>";
				}
				?>
				<?php endwhile; ?>
				
				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template( '', true );
				?>


			<?php else : ?>
				
				<article class="post error">
					<h1 class="404">Nothing posted yet</h1>
				</article>

			<?php endif; ?>


	<?php } //end is_single(); ?>

		</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->

</div><!-- / container-->

<?php get_footer(); ?>
<?php
/*
Template Name: CSS Pseudo classi tester
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

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article class="group" id="post-<?php the_ID(); ?>">

			<h1 class="article_title rounded"><?php the_title(); ?></h1>

		<div class="entry nth-child">
		<p><?php the_content(); ?></p>
          <form>
            <select id="container-value">
              <option value="div.tester-container ">div.tester-container</option>
              <option value="div.tester-container article ">article</option>
            </select>
            &nbsp;
            <select id="selector-value">
                <option id="article" value="article">article</option>
                <option value="h3">h3</option>
                <option value="p">p</option>
                <option value="img">img</option>
            </select>
            :<select id="pseudo-class-value">
                <option value="nth-child">nth-child</option>
                <option value="nth-last-child">nth-last-child</option>
                <option value="nth-of-type">nth-of-type</option>
                <option value="nth-last-of-type">nth-last-of-type</option>
            </select>(
              <input type="text" id="nth-value" value="2n+1">
            )
          </form>

      <div class="tester-container">
        <article class="group">
          <h3>Titolo</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <img src="/images/sample_img_100x100.png" alt="Sample Image">
          <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
          <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </article>

        <article class="group">
          <h3>Titolo</h3>
          <img src="/images/sample_img_100x100.png" alt="Sample Image">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        </article>

        <article class="group">
          <h3>Titolo</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <img src="/images/sample_img_100x100.png" alt="Sample Image">
          <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
          <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </article>

        <article class="group">
          <h3>Titolo</h3>
          <img src="/images/sample_img_100x100.png" alt="Sample Image">
          <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <img src="/images/sample_img_100x100.png" alt="Sample Image">
          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
          <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </article>

        <article class="group">
          <h3>Titolo</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
          <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
          <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          
        </article>

        <article class="group">
          <h3>Titolo</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <img src="/images/sample_img_100x100.png" alt="Sample Image">
          <img src="/images/sample_img_100x100.png" alt="Sample Image">
          <img src="/images/sample_img_100x100.png" alt="Sample Image">
          <img src="/images/sample_img_100x100.png" alt="Sample Image">
          <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </article>

      </div><!-- FINE TESTER CONTAINER -->
			
		</article>

	<?php endwhile; endif; ?>
    </div><!-- #content .site-content -->
  </div><!-- #primary .content-area -->

</div><!-- / container-->

<?php get_footer(); ?>

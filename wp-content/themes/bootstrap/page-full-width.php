<?php
/*
Template Name: Full Width Page
*/
?>

<?php get_header(); ?>
			
			<div id="content" class="clearfix row-fluid">
			
				<div id="main" class="span12 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						<header>
                            <div id="homepage-carousel" data-wrap="true" class="carousel slide">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#homepage-carousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#homepage-carousel" data-slide-to="1"></li>
                                    <li data-target="#homepage-carousel" data-slide-to="2"></li>
                                    <li data-target="#homepage-carousel" data-slide-to="3"></li>
                                    <li data-target="#homepage-carousel" data-slide-to="4"></li>
                                    <li data-target="#homepage-carousel" data-slide-to="5"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="http://atlantic-scrap.dev/wp-content/themes/bootstrap/images/shutterstock_147029552.jpg"/>
                                    </div>
                                    <div class="item">
                                        <img src="http://atlantic-scrap.dev/wp-content/themes/bootstrap/images/shutterstock_100173707.jpg"/>
                                    </div>
                                    <div class="item">
                                        <img src="http://atlantic-scrap.dev/wp-content/themes/bootstrap/images/shutterstock_122519407.jpg"/>
                                    </div>
                                </div>

                            </div>
                            <script type="text/javascript">
                                $('.carousel').carousel();
                            </script>
						</header> <!-- end article header -->
					
						<section class=" post_content">
							<?php the_content(); ?>
					
						</section> <!-- end article section -->
						
						<footer>
			
							<p class="clearfix"><?php the_tags('<span class="tags">' . __("Tags","bonestheme") . ': ', ', ', '</span>'); ?></p>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					<?php endwhile; ?>	
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "bonestheme"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "bonestheme"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    
				<?php //get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
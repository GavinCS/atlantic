<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
  
  <header>
  
  </header> <!-- end article header -->

  <section class="post_content clearfix">
    <?php the_content( __("Read more &raquo;","bonestheme") ); ?>
  </section> <!-- end article section -->
  
  <footer>

    <p class="tags"><?php the_tags('<span class="tags-title">' . __("Tags","bonestheme") . ':</span> ', ' ', ''); ?></p>
    
  </footer> <!-- end article footer -->

</article> <!-- end article -->

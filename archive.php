<?php get_header(); ?>

<div class="archive-title">
  <h2>-Blog-</h2>
  <h4>お役立ち記事</h4>
</div>
              
                      <div class="blogLists">
                       
<?php
if ( have_posts() ):
  while ( have_posts() ) : the_post();
    get_template_part( 'content-archive' );
  endwhile;
endif;
?>
                        
                      </div>
                      <div class="pager">
                        <ul class="pagerlist">
<?php
if (function_exists( 'page_navi' )):
  page_navi();
endif;
?>
                        </ul>
                      </div>
<?php get_footer(); ?>
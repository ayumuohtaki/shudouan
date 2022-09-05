  
                      <div class="blog">
                      <h2 class="page-title"><?php echo get_the_title(); ?></h2>
                        <!-- <p class='title'><?php the_title(); ?></p> -->
                        <div class="blog-body"><?php the_content(); ?></div>                        
                      </div>
                      <div class="blog-news">
<?php
$next_post = get_next_post();
$prev_post = get_previous_post();
if ( $next_post ):
?>

                        <div class="prev">
                          <a class="another-link" href="<?php echo get_permalink( $next_post->ID ); ?>">←NEXT</a>
                        </div>
<?php
endif;
if ( $prev_post ):
?>

                        <div class="next">
                          <a class="another-link" href="<?php echo get_permalink( $prev_post->ID );?>">PREV→</a>
                        </div>
<?php endif; ?>

                      </div>

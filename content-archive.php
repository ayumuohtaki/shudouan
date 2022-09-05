<li class="blog-item">       
  <a class="blog-link" href="<?php the_permalink(); ?>">
    <div class="blog-contents">
      <div class="thumbnail">
        <?php the_post_thumbnail(); ?>
      </div>
      <div class="blog-contents-text">
        <!-- <time class="blog-time"><?php the_time('Y.m.d'); ?></time> --> <!-- 投稿数が増えてきたら投稿日時を追加 -->
        <h4 class="blog-title"><?php the_title(); ?></h4>
        <p class="blog-text"><?php echo get_the_excerpt(); ?></p>
      </div>
    </div>  
  </a>
</li>


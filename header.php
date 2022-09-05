<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta name="keywords" content="共通キーワード" />
  <meta name="description" content="<?php bloginfo( 'description' ); ?>" />
  <title><?php bloginfo( 'name' ); ?></title>
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/60agent_favicon.png" />

  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/styles.css" media="screen">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/slick.css" media="screen">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/slick-theme.css" media="screen">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/common.css" media="screen">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
  <script src="https://kit.fontawesome.com/ddad10e19a.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=源暎Nuゴシック EB" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=コーポレート・ロゴ ver2" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&family=Yrsa:ital,wght@1,700&display=swap" rel="stylesheet">
  <script type="text/javascript" src="//webfonts.xserver.jp/js/xserver.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- <script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
  -->

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div class="container">
    <header id="header">
      <div class="header__pc">
        <nav>
            <ul>
              <div class="top-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/head-logo.png" alt="クリプトエージェント" /></li></a></div>
              <a href="<?php echo esc_url( home_url( '/' ) ); ?> #job"><li>案件</li></a>
              <a href="<?php echo esc_url( home_url( '/' ) ); ?> #feature"><li>特徴</li></a>
              <a href="<?php echo esc_url( home_url( '/archives/category/blog' ) ); ?>"><li>お役立ち記事</li></a>
              <a href="<?php echo esc_url( home_url( '/' ) ); ?> #mission"><li>ミッション</li></a>
              <a  class="for-corporate" href="https://docs.google.com/forms/d/1q77AMzhX9cNzFXosQBBDzZmE_lQCu2QE1CTlCgXAI7I/edit"><li>企業様</li></a>
              <div class="header-button">
                <button type="button" class="button button-ghost zoomInClickTrigger" onclick="javascript:location.href = '#entry';">無料で登録する</button>
              </div>
            </ul>
        </nav>
      </div>
      <div class="header__sp">
        <div class="menubtn">
          <div class="openbtn8 ">
            <div class="openbtn-area ">
              <span></span><span></span><span></span>
            </div>
          </div>
        </div>
      </div>
      
      <div class="w1000">     
      <nav>
        <h1>60代エージェント.com</h1>
          <ul>
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><li>ホーム</li></a>
              <a href="<?php echo esc_url( home_url( '/' ) ); ?> #job"><li>案件</li></a>
              <a href="<?php echo esc_url( home_url( '/' ) ); ?> #feature"><li>特徴</li></a>
              <a href="<?php echo esc_url( home_url( '/archives/category/blog' ) ); ?>"><li>お役立ち記事</li></a>
              <a href="<?php echo esc_url( home_url( '/' ) ); ?> #mission"><li>ミッション</li></a>
              <a  class="for-corporate" href="https://docs.google.com/forms/d/1q77AMzhX9cNzFXosQBBDzZmE_lQCu2QE1CTlCgXAI7I/edit"><li>企業様</li></a>
          </ul>
       </nav>
      </div>
    </header>
    
    <?php if( is_front_page() ): ?>
    <?php else: ?>
      
        <?php endif; ?>
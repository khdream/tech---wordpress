<!doctype html>
<html <?php language_attributes(); ?> style="margin: 0 0 !important;">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/assets/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/logical/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/logical/smart-phone.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/logical/tablet.css">

    <?php wp_head(); ?>
</head>
<body>
    <header id="header">
      <nav>
        <div class="navbar">
          <div class="nav">
          <div class="logo">
                <img id="logo-img" onclick="location.href = '#header';" style="cursor: pointer;" src="<?php echo get_template_directory_uri();?>/assets/img/img/logo.svg" alt="" />
              </div>
              <div class="nav-list-1">
              <a class="nav-a" href="<?php echo home_url('about'); ?>">会社情報</a>
              <a class="nav-a" href="<?php echo home_url('service'); ?>">事業内容</a>
              <a class="nav-a" href="<?php echo home_url('products'); ?>">製品一覧</a>
              <a class="nav-a" href="<?php echo home_url('logical'); ?>">採用情報</a>
              <a class="nav-a" href="<?php echo home_url('news'); ?>">ニュース</a>
              </div>
            <!-- ============side============== -->
            <div id="mySidenav" class="sidenav pt-0 pb-0">
              <div
                class="footer-second"
                style="height: 100%; padding-top: 121px"
              >
                <div class="navbar-1">
                  <div class="nav-1 gap-1">
                    <div class="nav-list list-size">
                      <div class="list-size-div-1 div-list-1">
                        <a href="<?php echo home_url('about'); ?>" class="color-white">会社情報</a>
                        <hr class="footer-hr-1 w-366 pt-0 pb-0" />
                      </div>
                      <div class="list-size-div-1 div-list-1">
                        <a href="<?php echo home_url('service'); ?>" class="color-white">事業内容</a>
                        <hr class="footer-hr-1 w-366 pt-0 pb-0" />
                      </div>
                      <div class="list-size-div-1 div-list-1">
                        <a href="<?php echo home_url('products'); ?>" class="color-white">製品一覧</a>
                        <hr class="footer-hr-1 w-366 pt-0 pb-0" />
                      </div>
                      <div class="list-size-div-1 div-list-1">
                        <a href="<?php echo home_url('logical'); ?>" class="color-white">採用情報</a>
                        <hr class="footer-hr-1 w-366 pt-0 pb-0" />
                      </div>
                      <div class="list-size-div-1 div-list-1">
                        <a href="<?php echo home_url('news'); ?>" class="color-white">ニュース</a>
                        <hr class="footer-hr-1 w-366 pt-0 pb-0" />
                      </div>
                    </div>
                  </div>
                  <div class="header-btn size-change">
                    <a class="header-support-1 color-green size-edit" href="<?php echo home_url('user-support'); ?>"
                      >ユーザーサポート</a
                    >
                    <a class="header-ask-1 color-white pl-40 size-edit" href="<?php echo home_url('contact'); ?>"
                      >お問い合わせ</a
                    >
                  </div>
                </div>
              </div>
            </div>
            <!-- ==============end side============== -->
          </div>
          <div class="header-btn z-9999">
            <a class="header-support" href="<?php echo home_url('user-support'); ?>">ユーザーサポート</a>
            <a class="header-ask" href="<?php echo home_url('contact'); ?>">お問い合わせ</a>
            <a
              class="burger"
              id="burger"
              onclick="openNav()"
              onclick="this.classList.toggle('active');"
            ></a>
          </div>
        </div>
      </nav>
      <div class="header-main">
        <div class="left-img">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/logical/ventor1.png" alt="" />
        </div>
        <div class="center-text">
          <h2>ロジカルテック 採用情報</h2>
          <h1>
            LOGICAL TECH <br />
            RECRUIT
          </h1>
          <hr />
          <h3>
            セキュリティ技術で、<br />
            人々の未来を守る。
          </h3>
        </div>
        <div class="right-img">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/logical/image_2.png" alt="" />
        </div>
      </div>
      <div class="header-text">
        <h2>
          テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
        </h2>
        <h3>
          テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
        </h3>
        <h4>
          テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
        </h4>
      </div>
    </header>
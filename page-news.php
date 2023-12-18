<?php
 get_header('news');
?>

<main>
      <div class="main-top">
        <div class="main-top-text">
          <h2>お知らせ</h2>
          <h3>2023.09.30</h3>
        </div>
        <h1>HPをリニューアル致しました。</h1>
      </div>
      <div class="main-center">
        <h2>特徴 (※大見出し)</h2>
        <div id="progressbar">
          <div></div>
        </div>
        <div class="point">
          <ul>
            <li>中見出しがこちらに入ります。</li>
          </ul>
        </div>
        <div class="main-center-text">
          <h3 class="one">
            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
          </h3>
        </div>
        <div class="main-center-text">
          <h3>
            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
          </h3>
        </div>
        <div class="submit" onclick="location.href = '<?php echo home_url('news-1'); ?>'" style="cursor: pointer;">
          <div class="header-content-a">
            <a href="#">
              <p>ニュース一覧へ</p>
              <img src="<?php echo get_template_directory_uri();?>/assets/img/news/right.svg" alt="" />
            </a>
          </div>
        </div>
      </div>
    </main>


    <?php get_footer(); ?>
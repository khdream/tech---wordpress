<?php
 get_header('user-support');
?>

<main>
      <div class="main-left">
        <h2>ユーザー専門サポートページへのログインは下記より可能です。</h2>
        <div class="submit">
          <div class="header-content-a">
            <a onclick="location.href = '<?php echo home_url('login'); ?>'" style="cursor: pointer;">
              <p>ユーザーログイン</p>
              <img src="<?php echo get_template_directory_uri();?>/assets/img/user-support/right.svg" alt="" />
            </a>
          </div>
        </div>
        <div class="left-list">
          <a href="#info">
            <h3>サポートインフォ</h3>
            <img src="<?php echo get_template_directory_uri();?>/assets/img/user-support/right-out.svg" alt="" />
          </a>
          <a href="#hours">
            <h3>サポート受付時間</h3>
            <img src="<?php echo get_template_directory_uri();?>/assets/img/user-support/right-out.svg" alt="" />
          </a>
          <a href="#repairs">
            <h3>修理について</h3>
            <img src="<?php echo get_template_directory_uri();?>/assets/img/user-support/right-out.svg" alt="" />
          </a>
        </div>
      </div>
      <div class="main-right">
        <div class="black-div" id='info'>
          <h1>サポートインフォ</h1>
          <h2>SUPPORT INFO</h2>
        </div>
        <div class="right-list">
          <div class="list-item">
            <h2>重要なお知らせ</h2>
            <h3>2023.09.30</h3>
            <h4>
              【LOCK STAR-ACご利用のお客様へ】「LOCK STAR-AC」販売終了のお知らせ
            </h4>
          </div>
          <div class="list-item">
            <h2>重要なお知らせ</h2>
            <h3>2023.09.30</h3>
            <h4>
              【LOCK STAR-ACご利用のお客様へ】「LOCK STAR-AC」販売終了のお知らせ
            </h4>
          </div>
          <div class="list-item">
            <h2>重要なお知らせ</h2>
            <h3>2023.09.30</h3>
            <h4>
              【LOCK STAR-ACご利用のお客様へ】「LOCK STAR-AC」販売終了のお知らせ
            </h4>
          </div>
          <div class="list-item">
            <h2>重要なお知らせ</h2>
            <h3>2023.09.30</h3>
            <h4>
              【LOCK STAR-ACご利用のお客様へ】「LOCK STAR-AC」販売終了のお知らせ
            </h4>
          </div>
          <div class="list-item">
            <h2>重要なお知らせ</h2>
            <h3>2023.09.30</h3>
            <h4>
              【LOCK STAR-ACご利用のお客様へ】「LOCK STAR-AC」販売終了のお知らせ
            </h4>
          </div>
        </div>
        <div class="list-item-btn" onclick="location.href = '<?php echo home_url('support-info'); ?>'" style="cursor: pointer;">
          <h2>全てのサポートインフォを見る</h2>
          <img src="<?php echo get_template_directory_uri();?>/assets/img/user-support/right-green.svg" alt="" />
        </div>
        <div class="black-div" id='hours'>
          <h1>サポート受付時間</h1>
          <h2>RECEPTION HOURS</h2>
        </div>
        <div class="hours">
          <h2>
            受付時間 9:00~12:00 / 13:00~18:00 (土日祝日、弊社指定休日を除く)
          </h2>
          <div id="progressbar">
            <div></div>
          </div>
          <h3>
            弊社製品のサポート内容およびお問い合わせ方法は、製品によって異なります。各製品のマニュアルまたは製品納品時付属の用紙などをご確認ください。なお、お問い合わせの受付時間につきましては全製品共通で以下の通りです。
            受付時間 9:00～12:00/13:00～18:00（土日祝日、弊社指定休日を除く）
          </h3>
        </div>
        <div class="black-div" id='repairs'>
          <h1>修理について</h1>
          <h2>ABOUT REPAIRS</h2>
        </div>
        <div class="repairs">
          <h2>
            製品の修理をご依頼される場合は、事前に各製品のサポート宛に症状等をご連絡くださるようお願いいたします。（製品の不具合ではなく、設定や利用方法によって問題が解決することがございます。弊社にて検証後、修理が必要の場合は弊社からご連絡いたします。）なお、修理に出される際の送料は、お客様のご負担にてお願いいたします。また、ユーザ登録をされていないお客様やサポート期間が終了している製品につきましては、修理のご依頼をお断りする場合もございますので、ご了承くださるようお願いいたします。
          </h2>
        </div>
        <div class="right-bottom">
          <h2>ユーザー専門サポートページへの<br/>ログインは下記より可能です。</h2>
          <div class="submit">
            <div class="header-content-a" onclick="location.href = '<?php echo home_url('login'); ?>'" style="cursor: pointer;">
              <a href="#">
                <p>ユーザーログイン</p>
                <img src="<?php echo get_template_directory_uri();?>/assets/img/user-support/right.svg" alt="" />
              </a>
            </div>
          </div>
        </div>
      </div>
    </main>

        

    <?php get_footer('second'); ?>

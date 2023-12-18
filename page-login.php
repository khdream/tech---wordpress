<?php
 get_header('login');
?>

<main>
      <div class="container">
        <p class="first-p">
          ロジカルテック各製品のユーザ専用サポートページの共通ログオン画面です。
        </p>
        <div class="login-hr">
          <hr class="first" />
          <hr class="second" />
        </div>
        <div class="list-1">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/login/point.svg" alt="" />
          <p>ユーザーサポートページをご利用できる条件</p>
        </div>
        <div class="list-2">
          <ul>
            <li>
              製品購入後2週間以内のユーザ登録をされていて、なおかつサポート期間中の方
            </li>
            <li>有償サポートをご契約中の方</li>
          </ul>
        </div>
        <div class="list-1">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/login/point.svg" alt="" />
          <p>ご利用のブラウザ</p>
        </div>
        <div class="list-2">
          <p>
            LOCK STAR-SKシリーズとLOCK STAR
            認証ガードマン(メモリなし)のサポートページ内でセキュリティキーの初期化を行う場合は、ActiveXを利用するため、Internet
            Explorerでログオンする必要があります。Internet
            Explorerを管理者権限で実行し、信頼済みサイトに登録してください。また、Internet
            Explorerの署名済みのActiveXコントロールのダウンロードを許可してください。Edge(Chromium)をご利用の場合は、署名済みのActiveXコントロールのダウンロードの許可、IEモードでの再読み込み、互換表示でお試しください。ただし、OSやEdgeのバージョンなどの環境や、お客様のブラウザの設定により動作しない場合もありますのでご了承ください。
          </p>
        </div>
        <div class="list-1">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/login/point.svg" alt="" />
          <p>ご利用のブラウザ</p>
        </div>
        <div class="list-2">
          <ul>
            <li>
              ユーザIDとパスワードは、必ずご担当者様本人が責任を持って管理するようにしてください。
            </li>
            <li>
              ユーザIDとパスワードは、第三者に利用させたり、貸与・譲渡をしないようにしてください。
            </li>
            <li>
              ユーザIDとパスワードは、複数人で共有しないようにしてください。
            </li>
            <li>
              ユーザIDとパスワード使用上の過失および第三者の利用に伴う損害について、弊社は一切の責任を負いません。
            </li>
          </ul>
        </div>
        <div class="list-1">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/login/point.svg" alt="" />
          <p>ご利用のブラウザ</p>
        </div>
        <div class="list-2">
          <p>
            ログオンするには、弊社発行のユーザIDとパスワードが必要です。製品名を選択後、ユーザIDとパスワードを入力して「ログオン」ボタンをクリックしてください。ログオンできない場合は、ユーザIDとパスワードを正しく入力しているか、サポート期間が切れていないかをご確認ください。どうしてもログオンできない場合は、お手数ですが弊社までご連絡ください。
          </p>
        </div>
      </div>
      <div class="login-window">
        <h2>ログインフォーム</h2>
        <div class="name">
          <h3>製品名</h3>
          <select name="" id="">
            <option value="">企業へのお問い合わせ</option>
            <option value="">ご利用の製品を選択してください。</option>
            <option value="">ご利用の製品を選択してください。</option>
          </select>
        </div>
        <div class="id">
          <h3>ユーザーID</h3>
          <input type="text" placeholder="例：冨士 太郎" />
        </div>
        <div class="id">
          <h3>パスワード</h3>
          <input type="text" placeholder="例：ロジカルテック株式会社" />
        </div>
        <div class="submit">
          <div class="header-content-a">
            <a href="#">
              <p>送信する</p>
              <img src="<?php echo get_template_directory_uri();?>/assets/img/login/right.svg" alt="" />
            </a>
          </div>
        </div>
      </div>
    </main>

            

    <?php get_footer('second'); ?>

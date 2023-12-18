<?php
 get_header('lock-star');
?>

<main>
      <div class="main-left">
        <div class="left-list">
          <a href='#feature' style="cursor: pointer;">
            <h3>概要・特徴</h3>
            <img src=" <?php echo get_template_directory_uri();?>/assets/img/lock-star/right-out.svg" alt="" />
          </a>
          <a href='#demo' style="cursor: pointer;">
            <h3>デモ動画</h3>
            <img src=" <?php echo get_template_directory_uri();?>/assets/img/lock-star/right-out.svg" alt="" />
          </a>
          <a href='#case' style="cursor: pointer;">
            <h3>利用シーン</h3>
            <img src=" <?php echo get_template_directory_uri();?>/assets/img/lock-star/right-out.svg" alt="" />
          </a>
          <a href="#MN管理">
            <h3>MN管理</h3>
            <img src=" <?php echo get_template_directory_uri();?>/assets/img/lock-star/right-out.svg" alt="" />
          </a>
          <a href="#導入事例">
            <h3>導入事例</h3>
            <img src=" <?php echo get_template_directory_uri();?>/assets/img/lock-star/right-out.svg" alt="" />
          </a>
          <a href="#仕様・動作環境">
            <h3>仕様・動作環境</h3>
            <img src=" <?php echo get_template_directory_uri();?>/assets/img/lock-star/right-out.svg" alt="" />
          </a>
          <a href="#FAQ">
            <h3>FAQ</h3>
            <img src=" <?php echo get_template_directory_uri();?>/assets/img/lock-star/right-out.svg" alt="" />
          </a>
        </div>
        <div class="submit bg-add" onclick="location.href = '<?php echo home_url('login'); ?>'" style="cursor: pointer;">
          <div class="header-content-a">
            <a href="../login/index.html">
              <p>ユーザーログイン</p>
              <img src=" <?php echo get_template_directory_uri();?>/assets/img/lock-star/right.svg" alt="" />
            </a>
          </div>
        </div>
      </div>
      <div class="main-right">
        <div class="black-div" id="feature">
          <h1>概要・特徴</h1>
          <h2>FEATURE</h2>
        </div>
        <h6>概要</h6>
        <div id="progressbar">
          <div></div>
        </div>
        <h1 class="feature-top">
          LOCK STAR-SGateは仮想ディスク機能により、通信経路だけでなく、VPNを経由して取り扱ったファイルのセキュリティまでも確保した、まったく新しいSSL-VPNリモートアクセスソリューションです。本システムを経由したファイルは、クライアントPCのローカルディスクや各種外部記憶装置への保存だけでなく、印刷・スクリーンコピーも禁止することができます。利用者のモラルに左右されることなく情報漏洩対策の強化ができるため、マイナンバー制度のセキュリティ対策やイントラネットから在宅勤務などのテレワークまであらゆる用途に活用することができます。
        </h1>
        <div class="feature-img-1">
          <img src=" <?php echo get_template_directory_uri();?>/assets/img/lock-star/image 6.png" alt="" />
        </div>
        <h6>概要</h6>
        <div id="progressbar">
          <div></div>
        </div>
        <div class="green-list">
          <ul>
            <li>プログラム単位での仮想化によるネットワーク分離</li>
          </ul>
        </div>
        <div class="feature-center">
          <h2>
            クライアント端末から分離したいネットワークとの間にSGateサーバを導入し、SGateサーバ経由で分離先サーバを利用することで、一台の端末で2つの分離されたネットワーク環境を利用できます。(ローカルから直接接続可能なネットワーク、ローカルからSGateを利用した場合のみ接続可能なネットワーク)
          </h2>
          <h2>
            SGateから実行したアプリケーションは、クライアント端末上に作られる仮想環境で動作します。(総務省のガイドラインでは、アプリケーションラッピング方式やセキュアコンテナ方式に分類される方式)仮想環境はローカルとはネットワーク分離された領域になるため、操作しているファイルやデータをローカルに持ち出すことはできず、また、ローカルのデータを仮想環境に持ち込むことはできません。※ファイル無害化製品と組み合わせて利用することで、セキュア且つシームレスにネットワーク間のファイル移動を行うこともできます。
          </h2>
          <h3>
            また、SGateを終了すると、仮想領域は削除されるため、クライアント端末にデータが残ることもありません。
          </h3>
        </div>
        <div class="green-list">
          <ul>
            <li>ローカル環境と同等の操作性</li>
          </ul>
        </div>
        <div class="feature-bottom">
          <h2>
            SGate内ではクライアント端末にインストールされているアプリケーションをそのまま利用できるため、ローカルで利用する際と操作性が変わりません。
          </h2>
          <div class="bottom-div">
            <h4>
              【例】ブラウザ(IE,MS Edge (Chromium),Google Chrome)、MS
              Office、Adobe Acrobat
              Reader、一太郎、校務支援システム、C/Sアプリ、Web会議システム(Teams,Webex,Zoom)など
            </h4>
          </div>
          <h2>
            また、FileShareというファイルブラウザからファイルサーバを利用することもできます。
            FileShare上ではOfficeの排他制御やVSSなども利用でき、エクスプローラと同等の操作性です。
          </h2>
        </div>
        <div class="black-div" id="demo">
          <h1>デモ動画</h1>
          <h2>DEMO VIDEO</h2>
        </div>
        <div class="hours">
          <h2>
            「LOCK STAR-SGate」の簡単な説明と実際の操作を、動画でご紹介いたします。初回のインストールやログインの方法、Web閲覧やファイルの操作を行ってもデータが外部に取り出せない様子を是非ご覧ください。
          </h2>
          <div class="feature-img-2">
              <img src=" <?php echo get_template_directory_uri();?>/assets/img/lock-star/image 9.png" alt="" />
          </div>
          <h3>
            もしエラーが出てご覧いただけない場合は、下の動画をご覧ください。
          </h3>
          <a href="#">MP4形式(33.4MB)</a>
          <h4>
            こちらの動画視聴にはメディアプレーヤーが必要となります。また、お使いの通信環境により動画がご覧頂けない場合があります。<br />
            どちらの動画もご覧いただけない場合は、お手数ですが弊社までお問い合わせください。
          </h4>
          <h5>
            また、上記動画を2つに分けたYouTube動画もございますので、お急ぎの場合は必要な部分をご覧ください。
          </h5>
          <a href="#"
            >LOCK STAR-SGate インストールからのログインまで（YouTubeへのリンク）</a
          ><br>
          <a href="#">LOCK STAR-SGate 実際の操作（YouTubeへのリンク）</a>
        </div>
        <div class="black-div" id="case">
          <h1>利用シーン</h1>
          <h2>CASE STUDY</h2>
        </div>
        <div class="case">
          <div class="green-list">
            <ul>
              <li>ローカル環境と同等の操作性</li>
            </ul>
          </div>
          <div class="case-div-1">
            <h2>
              インターネット接続はクライアント環境から、重要なデータが入ったサーバへのアクセスはSGate経由で行うことで、1台のPC内で論理的なネットワーク分離が可能になります。マイナンバーなどの機微情報の情報漏洩対策や、クライアントPCからSGate経由で利用するサーバへのマルウエア侵入防止対策を実現できます。
            </h2>
            <img src=" <?php echo get_template_directory_uri();?>/assets/img/lock-star/image 7.png" alt="" />
          </div>
          <div class="green-list">
            <ul>
              <li>インターネット環境の分離（インターネット強靭化）</li>
            </ul>
          </div>
          <div class="case-div-1">
            <h2>
              重要なデータが入ったサーバへのアクセスはクライアント環境から、インターネット接続（ブラウジングやWebメール利用）はSGate経由で行うことで、外部ネットワークから内部ネットワークへのマルウエア侵入を防止することができ、インターネット強靭化を実現できます。また、SGateサーバをプロキシサーバの手前に置くことで、既存のプロキシサーバの機能（フィルタリングやログ取得）をそのまま利用できます。
            </h2>
            <img src=" <?php echo get_template_directory_uri();?>/assets/img/lock-star/image 8.png" alt="" />
          </div>
        </div>
      </div>
    </main>

    <?php get_footer(); ?>
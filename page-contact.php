<?php
 get_header('contact');
?>

<main>
      <div class="main-top">
        <h2>企業や、製品、採用についてなど、お気軽にお問い合わせください。</h2>
        <h3>
          以下のフォームに必要事項をご入力のうえ、送信ください。​「必須」がついている項目は必須です。
        </h3>
        <h4>
          ※フリーメール(Gmail、Yahoo!メール等)をご利用の場合、弊社からの返信のメールが迷惑フォルダに振り分けられる可能性がございます。​事前に弊社のメールアドレスを受信許可等の設定にしていただくか、既に送信済みで弊社からの返信が2,3日営業日以内に届かない場合は、迷惑フォルダなどをご確認いただき、迷惑メール設定を解除していただくようお願いいたします。
        </h4>
      </div>
      <form action="#" method="post">
        <div class="form-element">
          <label for=""
            >お問い合わせ種別&nbsp;
            <h2>*必須</h2></label
          >
          <select name="" id="">
            <option value="">企業へのお問い合わせ</option>
            <option value="">企業へのお問い合わせ</option>
            <option value="">企業へのお問い合わせ</option>
          </select>
        </div>
        <div class="form-element">
          <label for=""
            >氏名&nbsp;
            <h2>*必須</h2></label
          >
          <input type="text" name="" id="" placeholder="例：冨士 太郎" />
        </div>
        <div class="form-element">
          <label for="">会社名</label>
          <input
            type="text"
            name=""
            id=""
            placeholder="例：ロジカルテック株式会社"
          />
        </div>
        <div class="form-element">
          <label for=""
            >メールアドレス&nbsp;
            <h2>*必須</h2></label
          >
          <input type="text" name="" id="" placeholder="例：sample@gmail.com" />
        </div>
        <div class="form-element">
          <label for=""
            >電話番号&nbsp;
            <h2>*必須</h2></label
          >
          <input type="text" name="" id="" placeholder="例：09012345678" />
        </div>
        <div class="form-element">
          <label for=""
            >お問い合わせ内容&nbsp;
            <h2>*必須</h2></label
          >
          <textarea
            name=""
            id=""
            placeholder="お問い合わせ内容を入力してください。"
          >
          </textarea>
        </div>
        <div class="form-element-1">
            <input
              type="checkbox"
              name=""
              id="checkbox"
              value=""
            />
            <h2><u>個人情報保護方針</u>に同意する</h2>
        </div>
        <div class="submit" onclick="location.href = '<?php echo home_url('contact-complete'); ?>'" style="cursor: pointer;">
          <div class="header-content-a">
            <a href="#">
              <p>送信する</p>
              <img src="<?php echo get_template_directory_uri();?>/assets/img/contact/right.svg" alt="" />
            </a>
          </div>
        </div>
      </form>
      <div class="main-bottom">
        <div class="telephone-div">
          <h2>電話でのお問い合わせはこちら</h2>
          <div class="telephone">
            <h1>03-5496-0211</h1>
            <h3>受付時間 9:00~12:00 / 13:00~18:00</h3>
          </div>
        </div>
      </div>
    </main>

    

    <?php get_footer('second'); ?>
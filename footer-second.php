<footer>
<div class="footer-second">
            <div class="navbar-1">
                <div class="nav-1 gap-1">
                    <div class="logo-1">
                        <img onclick="location.href = '#header';" style="cursor: pointer;" src="<?php echo get_template_directory_uri();?>/assets/img/img/logo.svg" alt="" />
                    </div>
                    <div class="nav-list list-size">
                        <div class="list-size-div  div-list">
                            <a href="<?php echo home_url('about'); ?>">会社情報</a>
                            <hr class="footer-hr" />
                        </div>
                        <div class="list-size-div div-list">
                            <a href="<?php echo home_url('service'); ?>">事業内容</a>
                            <hr class="footer-hr" />
                        </div>
                        <div class="list-size-div div-list">
                            <a href="<?php echo home_url('products'); ?>">製品一覧</a>
                            <hr class="footer-hr" />
                        </div>
                        <div class="list-size-div div-list">
                            <a href="<?php echo home_url('logical'); ?>">採用情報</a>
                            <hr class="footer-hr" />
                        </div>
                        <div class="list-size-div div-list">
                            <a href="<?php echo home_url('news'); ?>">ニュース</a>
                            <hr class="footer-hr" />
                        </div>
                    </div>
                </div>
                <div class="header-btn size-change">
                    <a class="header-support-1 size-edit" href="<?php echo home_url('user-support'); ?>">ユーザーサポート</a>
                    <a class="header-ask-1 size-edit" href="<?php echo home_url('contact'); ?>">お問い合わせ</a>
                </div>
            </div>
            <p>Copyright © LOGICAL TECH All Rights Reserved.</p>
        </div>
    </footer>

    <?php wp_footer(); ?>

</body>
<script src="<?php echo get_template_directory_uri();?>./assets/js/style.js"></script>
</html>
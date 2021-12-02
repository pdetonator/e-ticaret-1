<div class="body">
    <div class="container-fluid form-container">
        <div class="user__form">
            <div class="form__links">
                <ul>
                    <li class="active tab__link">
                        <a href="<?=base_url('giris-yap')?>">Giriş Yap</a>
                    </li>
                    <li class="tab__link">
                        <a href="<?=base_url('kayit-ol')?>">Kayıt Ol</a>
                    </li>
                </ul>
            </div>
            <div class="forms">
                <?php if ( $this -> session -> flashdata ('msg_succes')) : ?>
                <div class="validation__errors">
                    <ul>
                        <?=$this -> session -> flashdata ('msg_succes');?>
                    </ul>
                </div>
                <?php elseif ( $this -> session -> flashdata ('msg_error')) : ?>
                <div class="validation__errors">
                    <ul>
                        <?=$this -> session -> flashdata ('msg_error');?>
                    </ul>
                </div>
                <?php endif; ?>
                <div class="login__form form__user active">
                    <form action="<?=base_url('user/login');?>" method="post">
                        <div class="input__group">
                            <label for="user-email">E-Mail</label>
                            <input type="text" name="user-email" id="user-email" placeholder="ad.soyad@example.com" value="<?=set_value ('user-email');?>">
                        </div>
                        <div class="input__group">
                            <label for="user-password">Şifre</label>
                            <div class="show__input">
                                <input type="password" name="user-password" id="user-password" placeholder="****" value="<?=set_value ('user-password');?>">
                                <i class="fa fa-eye show-password" aria-hidden="true"></i>
                            </div>
                        </div>
                        <input type="hidden" name="<?=$this -> security -> get_csrf_token_name ();?>" value="<?=$this -> security -> get_csrf_hash ();?>">
                        <button type="submit" id="login-btn" name="login-btn">GİRİŞ YAP</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="assets/js/index.js"></script>
<script>
    let showBtn = document.querySelectorAll('.show-password');

    showBtn.forEach(btn => {
        btn.addEventListener('click', e => {
            let thisInput = e.target.closest('.show__input').children[0];

            if (thisInput.getAttribute('type') === 'text') thisInput.setAttribute('type', 'password');
            else {
                thisInput.setAttribute('type', 'text');
            }
        });
    });
</script>
</body>
</html>
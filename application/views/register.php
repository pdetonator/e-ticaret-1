<div class="body">
    <div class="container-fluid form-container">
        <div class="user__form">
            <div class="form__links">
                <ul>
                    <li class="tab__link">
                        <a href="<?=base_url('giris-yap')?>">Giriş Yap</a>
                    </li>
                    <li class="tab__link active">
                        <a href="<?=base_url('kayit-ol')?>">Kayıt Ol</a>
                    </li>
                </ul>
            </div>
            <div class="forms">
                <?php if ( $this -> session -> flashdata ('msg_error')) : ?>
                <div class="validation__errors">
                    <ul>
                        <?=$this -> session -> flashdata ('msg_error');?>
                    </ul>
                </div>
                <?php endif; ?>
                <div class="register__form form__user active">
                    <form action="<?=base_url('user/register')?>" method="post">
                        <div class="input__group">
                            <label for="user-name">İsim Soyisim</label>
                            <input type="text" name="user-name" id="user-name" placeholder="ad soyad" value="<?=set_value('user-name')?>">
                        </div>
                        <div class="input__group">
                            <label for="user-email">E-Mail</label>
                            <input type="text" name="user-email" id="user-email" placeholder="ad.soyad@example.com" value="<?=set_value('user-email')?>">
                        </div>
                        <div class="input__group">
                            <label for="user-password">Şifre</label>
                            <div class="show__input">
                                <input type="password" name="user-password" id="user-password" placeholder="****" value="<?=set_value('user-password')?>">
                                <i class="fa fa-eye show-password" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="input__group">
                            <label for="user-repassword">Şifre(Tekrar)</label>
                            <div class="show__input">
                                <input type="password" name="user-repassword" id="user-repassword" placeholder="****" value="<?=set_value('user-repassword')?>">
                                <i class="fa fa-eye show-password" aria-hidden="true"></i>
                            </div>
                        </div>
                        <input type="hidden" name="<?=$this -> security -> get_csrf_token_name ();?>" value="<?=$this -> security -> get_csrf_hash ();?>">
                        <button type="submit" id="register-btn" name="login-btn">KAYIT OL</button>
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
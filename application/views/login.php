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
                <div class="login__form form__user active">
                    <form action="" method="post">
                        <div class="input__group">
                            <label for="login-mail">E-Mail</label>
                            <input type="text" name="" id="login-mail" placeholder="ad.soyad@example.com">
                        </div>
                        <div class="input__group">
                            <label for="login-password">E-Mail</label>
                            <div class="show__input">
                                <input type="text" name="" id="login-password" placeholder="****">
                                <i class="fa fa-eye show-password" aria-hidden="true"></i>
                            </div>
                        </div>
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
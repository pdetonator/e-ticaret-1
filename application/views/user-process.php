    <div class="body">
        <div class="container-fluid form-container">
            <div class="user__form">
                <div class="form__links">
                    <ul>
                        <li class="active tab__link">Giriş Yap</li>
                        <li class="tab__link">Üye Ol</li>
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
                    <div class="register__form form__user">
                        <form action="" method="post">
                            <div class="input__group">
                                <label for="register-name">İsim Soyisim</label>
                                <input type="text" name="" id="login-mail" placeholder="ad.soyad@example.com">
                            </div>
                            <div class="input__group">
                                <label for="login-mail">E-Mail</label>
                                <input type="text" name="" id="login-mail" placeholder="ad.soyad@example.com">
                            </div>
                            <div class="input__group">
                                <label for="login-password">Şifre</label>
                                <div class="show__input">
                                    <input type="text" name="" id="login-password" placeholder="****">
                                    <i class="fa fa-eye show-password" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="input__group">
                                <label for="login-password">Şifre(Tekrar)</label>
                                <div class="show__input">
                                    <input type="text" name="" id="login-password" placeholder="****">
                                    <i class="fa fa-eye show-password" aria-hidden="true"></i>
                                </div>
                            </div>
                            <button type="submit" id="login-btn" name="login-btn">KAYIT OL</button>
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
        let tabLinks = document.querySelectorAll('.tab__link');
        let tabContent = document.querySelectorAll('.form__user')

        function removeAllActives(item) {
            item.forEach(link => {
               link.classList.remove('active'); 
            });
        } 

        tabLinks.forEach((item, key) => {
            item.addEventListener('click', e => {
                removeAllActives(tabLinks);
                removeAllActives(tabContent);
                e.target.classList.add('active');
                tabContent[key].classList.add('active');
            });
        });

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
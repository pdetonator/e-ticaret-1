<div class="body">
    <section id="slider" class="py-4">
        <div class="container">
            <div class="swiper thumbs-gallery">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="https://cdn.vatanbilgisayar.com/Upload/BANNER//yeni-tasarim/anasayfa/10-2021/asus-notebook-1-11-ILAN_WEB.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://cdn.vatanbilgisayar.com/Upload/BANNER//yeni-tasarim/anasayfa/10-2021/philips-20-10-ILAN_WEB.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://cdn.vatanbilgisayar.com/Upload/BANNER//yeni-tasarim/anasayfa/10-2021/1336x380-Vatan.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://cdn.vatanbilgisayar.com/Upload/BANNER//yeni-tasarim/anasayfa/10-2021/Vatan_iPad_mini_Web.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://cdn.vatanbilgisayar.com/Upload/BANNER//yeni-tasarim/anasayfa/10-2021/asus-notebook-1-11-ILAN_WEB.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://cdn.vatanbilgisayar.com/Upload/BANNER//yeni-tasarim/anasayfa/10-2021/philips-20-10-ILAN_WEB.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://cdn.vatanbilgisayar.com/Upload/BANNER//yeni-tasarim/anasayfa/10-2021/1336x380-Vatan.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://cdn.vatanbilgisayar.com/Upload/BANNER//yeni-tasarim/anasayfa/10-2021/Vatan_iPad_mini_Web.jpg" alt="">
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-pagination-mb"></div>
            </div>
        </div>
    </section>
    <section id="products" style="padding: 50px 0;">
        <div class="container">
            <div class="product__list">
                <span>G??n??n F??rsatlar??</span>
                <div class="all__products">
                    <a href="#">T??M FIRSAT ??R??NLER??
                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <div class="products">
                <?php foreach ($products as $product) : ?>
                <div class="product">
                    <div class="product__header">
                        <div class="product__image">
                            <a href="<?=base_url($product -> productUrl);?>">
                                <img src="<?=base_url('public/uploads/' . $product -> productImage);?>" alt="">
                            </a>
                        </div>
                        <div class="product__code py-2">
                            <a href="<?=base_url($product -> productUrl);?>"><?=$product -> categoryName?> / <?=$product -> productID?></a>
                        </div>
                        <div class="product__title">
                            <a href="<?=base_url($product -> productUrl);?>"><?=$product -> productName;?></a>
                        </div>
                    </div>
                    <div class="product__bottom">
                        <div class="product__price">
                            <p><?=number_format($product -> productPrice, 2, ',', '.')?><span>TL</span></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <section id="best-seller">
        <div class="container">
            <div class="title">
                <p>En ??ok Satan ??r??nler</p>
            </div>
            <div class="best__seller">
                <div class="swiper top-seller">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="product">
                                <div class="product__image">
                                    <a href="#">
                                        <img src="https://www.vatanbilgisayar.com/UPLOAD/PRODUCT/samsung/thumb/121933_small.jpg" alt="">
                                    </a>
                                </div>
                                <div class="product__title">
                                    <p>Xiaomi Redmi 9c 128 Gb Ak??ll?? Telefon Mavi</p>
                                </div>
                                <div class="product__price">
                                    <p>9.999<span>TL</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product">
                                <div class="product__image">
                                    <a href="#">
                                        <img src="https://www.vatanbilgisayar.com/UPLOAD/PRODUCT/samsung/thumb/121933_small.jpg" alt="">
                                    </a>
                                </div>
                                <div class="product__title">
                                    <p>Xiaomi Redmi 9c 128 Gb Ak??ll?? Telefon Mavi</p>
                                </div>
                                <div class="product__price">
                                    <p>9.999<span>TL</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="<?=base_url('public/js/index.js')?>"></script>
<script>
    const bestSeller = new Swiper('.swiper.top-seller', {
        direction: 'horizontal',
        loop: true,
        slidesPerView: 'auto',
        spaceBetween: 20,
    });
</script>
<?php if ($this -> session -> flashdata ('login_success')) : ?>
<script>
    Swal.fire ({
        title: 'Ho??geldin!',
        text: 'Hesab??na giri?? yapt??n, al????veri??e ba??layabilirsin.',
        icon: 'success',
        confirmButtonText: 'TAMAM'
    });
</script>
<?php endif; ?>
</body>
</html>
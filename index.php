<?php $data["title"] = "Hasaki.vn | Mỹ Phẩm & Clinic"; ?>
<?php $bodyClass = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<?php require "template-parts/layouts/data.php"; ?>
<!--Home banner-->
<div class="home__bannerpc uk-visible@m uk-background-default">
    <div class="uk-container">
        <div class="uk-grid-match uk-grid-5" uk-grid>
            <div class="uk-width-expand">
                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="autoplay: true;max-height: 260">

                    <ul class="uk-slideshow-items">
                        <?php
                        $data = array(
                            '1663757012image_2022_09_21t03_31_53_411z.png',
                            '1662348045web.jpeg',
                            '1663328252home---254.jpeg',
                            '1663578894homecogia.jpeg',
                            '1663583493home---260d.jpeg',
                            '1663843668home---265.jpeg',
                            '1663843954home---266.jpeg',
                            '1663843985homecogia-(1)-(1).jpeg',
                            '1663903262bb_hasaki-846x250_thang-9.jpeg',
                            '1663235860864x250.jpeg',
                        );
                        foreach ($data as $k=>$v): ?>
                        <li>
                            <img src="images/hsk/slider/<?= $v ?>" alt="" uk-cover="">
                        </li>
                        <?php endforeach; ?>
                    </ul>

                    <a class="uk-position-center-left home__bannerpc__slidenav home__bannerpc__slidenav--prev" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                    <a class="uk-position-center-right home__bannerpc__slidenav home__bannerpc__slidenav--next" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

                    <ul class="home__bannerpc__dotnav uk-slideshow-nav uk-dotnav uk-position-bottom-center uk-position-small"></ul>

                </div>
            </div>
            <div class="uk-width-1-3@m">
                <div class="uk-child-width-1-1 uk-grid-match uk-grid-5" uk-grid>
                    <div>
                        <div class="uk-cover-container">
                            <img src="images/hsk/1661421191nowfree_3-846x250.jpeg" alt="" uk-cover="">
                            <canvas width="870" height="256"></canvas>
                            <a href="" class="uk-position-cover"></a>
                        </div>
                    </div>
                    <div>
                        <div class="uk-cover-container">
                            <img src="images/hsk/1653555653banner-check-gia-web-v2-435x128.jpeg" alt="" uk-cover="">
                            <canvas width="870" height="256"></canvas>
                            <a href="" class="uk-position-cover"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-section-xsmall home__bannerpc__category">
            <div class="uk-child-width-expand" uk-grid>
                <?php
                $data = array(
                    array(
                        'icon' => 'images/hsk/icon/deals.svg',
                        'txt' => 'Deals',
                    ),
                    array(
                        'icon' => 'images/hsk/icon/now-free.svg',
                        'txt' => 'Giao 2h',
                    ),
                    array(
                        'icon' => 'images/hsk/icon/special.svg',
                        'txt' => 'Bán chạy',
                    ),
                    array(
                        'icon' => 'images/hsk/icon/spa.svg',
                        'txt' => 'Clinic & S.P.A',
                    ),
                    array(
                        'icon' => 'images/hsk/icon/bang-gia.svg',
                        'txt' => 'Bảng giá',
                    ),
                    array(
                        'icon' => 'images/hsk/icon/flash-deal.svg',
                        'txt' => 'Deal 22h - 24h',
                    ),
                    array(
                        'icon' => 'images/hsk/icon/dat-lich.svg',
                        'txt' => 'Đặt hẹn',
                    ),
                    array(
                        'icon' => 'images/hsk/icon/cam-nang.svg',
                        'txt' => 'Cẩm nang',
                    ),
                );
                foreach ($data as $k=>$v): ?>
                <div>
                    <div class="uk-text-center uk-position-relative home__bannerpc__category__box">
                        <div class="item__5"><img class="home__bannerpc__category__img" src="<?= $v['icon'] ?>" alt=""></div>
                        <div class="item__5">
                            <span class="home__bannerpc__category__txt"><?= $v['txt'] ?></span>
                        </div>
                        <a href="" class="uk-position-cover"></a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<!--/Home banner-->

<!--Content PC-->
<div class="uk-section-xsmall uk-visible@m">
    <div class="uk-container">
        <!--Deals đang diễn ra-->
        <div class="uk-margin home__block__flashsale">
            <div class="home__block__flashsale__header">
                <div class="uk-flex-middle" uk-grid>
                    <div class="uk-width-expand">
                        <div class="uk-child-width-auto uk-grid-20 uk-flex-middle" uk-grid>
                            <div class="home__block__flashsale__header__column">
                                <h2 class="uk-h2 home__block__flashsale__header__title">Deals đang diễn ra</h2>
                            </div>
                            <div class="home__block__flashsale__header__column">
                                <div class="uk-child-width-auto uk-grid-10 uk-flex-middle" uk-grid>
                                    <div>
                                        <div class="home__block__flashsale__header__txt">kết thúc trong</div>
                                    </div>
                                    <div>
                                        <div class="uk-grid-5 uk-child-width-auto uk-flex-middle" uk-grid uk-countdown="date: 2022-11-05T13:11:36+00:00">
                                            <div>
                                                <div class="home__block__flashsale__header__countdown__number uk-countdown-number uk-countdown-days"></div>
                                            </div>
                                            <div class="home__block__flashsale__header__countdown__separator uk-countdown-separator">:</div>
                                            <div>
                                                <div class="home__block__flashsale__header__countdown__number uk-countdown-number uk-countdown-hours"></div>
                                            </div>
                                            <div class="home__block__flashsale__header__countdown__separator uk-countdown-separator">:</div>
                                            <div>
                                                <div class="home__block__flashsale__header__countdown__number uk-countdown-number uk-countdown-minutes"></div>
                                            </div>
                                            <div class="home__block__flashsale__header__countdown__separator uk-countdown-separator">:</div>
                                            <div>
                                                <div class="home__block__flashsale__header__countdown__number uk-countdown-number uk-countdown-seconds"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-auto">
                        <a href="" class="home__block__flashsale__header__btnViewall uk-button uk-button-default">Xem tất cả</a>
                    </div>
                </div>
            </div>
            <div id="slideshow1" class="uk-position-relative uk-visible-toggle" tabindex="-1" uk-slider>

                <ul class="uk-slider-items uk-grid-match uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-child-width-1-6@l">
                    <?php foreach ($products as $product): ?>
                    <li class="product__li">
                        <?php require "template-parts/layouts/product.php"; ?>
                    </li>
                    <?php endforeach; ?>
                </ul>

                <a class="uk-position-center-left home__bannerpc__slidenav home__bannerpc__slidenav--prev" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                <a class="uk-position-center-right home__bannerpc__slidenav home__bannerpc__slidenav--next" href="#" uk-slidenav-next uk-slider-item="next"></a>

            </div>
        </div>
        <!--/Deals đang diễn ra-->

        <!--DANH MỤC BẠN QUAN TÂM-->
        <div class="uk-margin-top">

        </div>
        <!--/DANH MỤC BẠN QUAN TÂM-->


        <div class="uk-margin-top">

        </div>
    </div>
</div>
<!--/Content PC-->

<!--Content mobile-->
<div class="content_mobile uk-section-xsmall uk-position-relative uk-hidden@m uk-height-viewport-2">
    <div class="uk-position-top content_mobile__bg"></div>
    <div class="uk-position-relative uk-position-z-index">
        <div class="uk-container">
            <div class="uk-margin content_mobile__boxslider uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="autoplay: true;max-height: 148">

                <ul class="uk-slideshow-items">
                    <?php
                    $data = array(
                        '1663757012image_2022_09_21t03_31_53_411z.png',
                        '1662348045web.jpeg',
                        '1663328252home---254.jpeg',
                        '1663578894homecogia.jpeg',
                        '1663583493home---260d.jpeg',
                        '1663843668home---265.jpeg',
                        '1663843954home---266.jpeg',
                        '1663843985homecogia-(1)-(1).jpeg',
                        '1663903262bb_hasaki-846x250_thang-9.jpeg',
                        '1663235860864x250.jpeg',
                    );
                    foreach ($data as $k=>$v): ?>
                        <li>
                            <img src="images/hsk/slider/<?= $v ?>" alt="" uk-cover="">
                        </li>
                    <?php endforeach; ?>
                </ul>

                <a class="uk-position-center-left home__bannerpc__slidenav home__bannerpc__slidenav--prev uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                <a class="uk-position-center-right home__bannerpc__slidenav home__bannerpc__slidenav--next uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

                <ul class="home__bannerpc__dotnav uk-slideshow-nav uk-dotnav uk-position-bottom-center uk-position-small"></ul>

            </div>

            <!--Category-->
            <div class="uk-margin-top">
                <div class="uk-child-width-1-5 uk-grid-match uk-grid-10" uk-grid>
                    <?php
                    $data = array(
                        array(
                            'icon' => 'images/hsk/icon/mobile/menu-category.png',
                            'txt' => 'Danh mục',
                        ),
                        array(
                            'icon' => 'images/hsk/icon/mobile/menu-deals.png',
                            'txt' => 'Deals',
                        ),
                        array(
                            'icon' => 'images/hsk/icon/mobile/now-free-mobile.gif',
                            'txt' => 'Giao 2H',
                        ),
                        array(
                            'icon' => 'images/hsk/icon/mobile/menu-spa.png',
                            'txt' => 'Clinic & S.P.A',
                        ),
                        array(
                            'icon' => 'images/hsk/icon/mobile/menu-spa-services.png',
                            'txt' => 'Bảng giá',
                        ),
                        array(
                            'icon' => 'images/hsk/icon/mobile/track-order-70.png',
                            'txt' => 'Tra cứu đơn hàng',
                        ),
                        array(
                            'icon' => 'images/hsk/icon/mobile/icon-covid.png',
                            'txt' => 'Covid',
                        ),
                        array(
                            'icon' => 'images/hsk/icon/mobile/menu-bestseller.png',
                            'txt' => 'Bán chạy',
                        ),
                        array(
                            'icon' => 'images/hsk/icon/mobile/menu-booking.png',
                            'txt' => 'Đặt hẹn',
                        ),
                        array(
                            'icon' => 'images/hsk/icon/mobile/menu-blog.png',
                            'txt' => 'Cẩm nang',
                        ),
                    );
                    foreach ($data as $k=>$v): ?>
                    <div>
                        <div class="uk-position-relative uk-text-center">
                            <div class="item__5">
                                <img class="content_mobile__category__img" src="<?= $v['icon'] ?>" alt="">
                            </div>
                            <div class="item__5 content_mobile__category__txt"><?= $v['txt'] ?></div>
                            <a href="" class="uk-position-cover"></a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <!--/Category-->
        </div>
    </div>
</div>
<!--/Content mobile-->
<?php require "template-parts/layouts/footer.php"; ?>
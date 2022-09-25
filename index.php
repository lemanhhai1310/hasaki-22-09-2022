<?php $data["title"] = "Hasaki.vn | Mỹ Phẩm & Clinic"; ?>
<?php $bodyClass = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
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
<div class="content_mobile uk-section-xsmall uk-position-relative uk-hidden@m uk-height-viewport-2">
    <div class="uk-position-top content_mobile__bg"></div>
    <div class="uk-position-relative uk-position-z-index">
        <div class="uk-container">
            <div class="content_mobile__boxslider uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="autoplay: true;max-height: 148">

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
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>
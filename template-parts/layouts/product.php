<div class="product__item uk-position-relative">
    <div class="product__box1">
        <img src="<?= $product['img'] ?>" alt="">
    </div>
    <div class="product__box2">
        <div class="item__3">
            <div class="uk-flex-middle uk-grid-collapse" uk-grid>
                <div class="uk-width-expand">
                    <div class="product__price"><?= $product['price'] ?></div>
                </div>
                <div class="uk-width-auto">
                    <div class="uk-child-width-auto uk-flex-middle uk-grid-5" uk-grid>
                        <div>
                            <del class="product__priceold"><?= $product['price_old'] ?></del>
                        </div>
                        <div>
                            <div class="product__percent"><?= $product['percent'] ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item__3">
            <h4 class="uk-h4 product__brand"><?= $product['brand'] ?></h4>
        </div>
        <div class="item__3">
            <div class="item__5">
                <div class="product__name"><?= $product['vn_name'] ?></div>
                <div class="product__name"><?= $product['en_name'] ?></div>
            </div>
            <div class="item__5">
                <div class="uk-child-width-auto uk-grid-14 uk-flex-middle" uk-grid>
                    <div class="uk-flex-inline">
                        <div class="product__star">
                            <div style="width: 70%" class="product__star__numberStart" data-src="images/hsk/bg_start_small.jpeg" uk-img></div>
                            <div class="product__star__startBackground" data-src="images/hsk/bg_start_small.jpeg" uk-img></div>
                        </div>
                        <span class="product__star__txt">(56)</span>
                    </div>
                    <div class="product__line">
                        <div class="product__cartNumber" data-src="images/hsk/cart.svg" uk-img>1.648</div>
                    </div>
                </div>
            </div>
            <div class="item__5">
                <div class="uk-grid-10 uk-flex-middle" uk-grid>
                    <div class="uk-width-expand">
                        <div class="uk-position-relative product__boxProcess uk-border-pill">
                            <div style="width: 62%" class="product__boxProcess__fill uk-position-left uk-border-pill"></div>
                            <div class="uk-position-center-left product__countdown" uk-countdown="date: 2022-10-06T02:40:37+00:00">
                                còn
                                <span class="uk-countdown-number uk-countdown-days"></span>
                                ngày
                                <span class="uk-countdown-number uk-countdown-hours"></span>
                                <span class="uk-countdown-separator">:</span>
                                <span class="uk-countdown-number uk-countdown-minutes"></span>
                                <span class="uk-countdown-separator">:</span>
                                <span class="uk-countdown-number uk-countdown-seconds"></span>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-auto">
                        <span class="product__percent_deal">62%</span>
                    </div>
                </div>
                <div class="product__gift"><?= $product['gift'] ?></div>
            </div>
        </div>
    </div>
    <a href="" class="uk-position-cover"></a>
</div>
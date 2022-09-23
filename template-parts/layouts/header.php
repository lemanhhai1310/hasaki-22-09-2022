<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="REFRESH" content="1800"/>
    <title><?= /** @var TYPE_NAME  */
        (isset($data['title'])) ? $data['title'] : ''; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <!--CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.15.10/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="style.css?v=<?php echo(time()) ?>">

    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/@shinsenter/defer.js/dist/defer_plus.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.15.10/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.15.10/dist/js/uikit-icons.min.js"></script>
    <script src="js/placeholderTypewriter.js?v=<?php echo(time()) ?>"></script>
    <script src="js/app.js?v=<?php echo(time()) ?>"></script>
</head>
<body class="<?= (isset($bodyClass))?$bodyClass:'' ?>">
<?php require "template-parts/commons/facebook_chat.php"; ?>
<!--app-->
<div id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden uk-position-relative">
    <header class="header" uk-sticky>
        <div id="top-bar-banner" class="uk-position-relative uk-visible@m uk-background-norepeat uk-background-center-center" style="min-height: 50px" data-src="images/hsk/16358251591320x50-ship.jpeg" uk-img>
            <a href="" class="uk-position-cover"></a>
        </div>
        <div class="uk-visible@m header__pc">
            <div class="uk-container">
                <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
                    <div class="uk-navbar-left">
                        <div class="uk-navbar-item">
                            <a href="" class="header__pc__btnMenu">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                        <a href="" class="uk-navbar-item uk-logo"><img src="images/hsk/logo-new.svg" alt=""></a>
                        <div class="uk-navbar-item uk-position-relative">
                            <div class="uk-position-top uk-flex uk-flex-nowrap header__pc__txtSearch">
                                <a class="uk-link-toggle" href="">Kem Chống Nắng</a>
                                <a class="uk-link-toggle" href="">Tẩy Trang</a>
                                <a class="uk-link-toggle" href="">Toner</a>
                                <a class="uk-link-toggle" href="">Sữa Rửa Mặt</a>
                                <a class="uk-link-toggle" href="">Tẩy tế bào chết</a>
                                <a class="uk-link-toggle" href="">Retinol</a>
                            </div>
                            <form class="uk-grid-collapse header__pc__boxSearch" uk-grid>
                                <div class="uk-width-expand">
                                    <div class="uk-search uk-search-default header__pc__boxSearch__search">
                                        <input id="search" class="header__pc__boxSearch__input uk-search-input" type="search" placeholder="Siêu Hội Hàng Tiêu Dùng">
                                    </div>
                                </div>
                                <div class="uk-width-auto">
                                    <button type="submit" class="header__pc__boxSearch__btnSubmit uk-button uk-button-default" uk-icon="icon: search; ratio: 1">
                                        <img class="uk-position-center" src="images/hsk/icon_search_48x48_white.png" alt="">
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="uk-navbar-right">
                        <div class="uk-navbar-item">
                            <div class="uk-position-relative">
                                <div class="uk-child-width-auto uk-grid-10 uk-flex-middle" uk-grid>
                                    <div>
                                        <img src="images/hsk/icon_header_2.svg" alt="">
                                    </div>
                                    <div>
                                        <div class="header__pc__txt">
                                            <a href="#">Đăng nhập</a>
                                            /
                                            <a href="#">Đăng ký</a>
                                        </div>
                                        <div class="header__pc__txt header__pc__txt--acc uk-flex uk-flex-middle">Tài khoản</div>
                                    </div>
                                </div>
                                <div class="uk-width-medium" uk-dropdown>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                            </div>
                        </div>
                        <div class="uk-navbar-item">
                            <div class="uk-position-relative">
                                <div class="uk-child-width-auto uk-grid-10 uk-flex-middle" uk-grid>
                                    <div>
                                        <img src="images/hsk/icon_header_store.svg" alt="">
                                    </div>
                                    <div>
                                        <div class="header__pc__txt">
                                            Hệ thống
                                            <br>
                                            cửa hàng
                                        </div>
                                    </div>
                                </div>
                                <a href="" class="uk-position-cover"></a>
                            </div>
                        </div>
                        <div class="uk-navbar-item">
                            <div class="uk-position-relative">
                                <div class="uk-child-width-auto uk-grid-10 uk-flex-middle" uk-grid>
                                    <div>
                                        <img src="images/hsk/icon_header_3.svg" alt="">
                                    </div>
                                    <div>
                                        <div class="header__pc__txt">
                                            Hỗ trợ
                                            <br>
                                            khách hàng
                                        </div>
                                    </div>
                                </div>
                                <a href="" class="uk-position-cover"></a>
                            </div>
                        </div>
                        <div class="uk-navbar-item">
                            <a href="" class="uk-position-relative header__pc__cart">
                                <img src="images/hsk/icon_header_1.svg" alt="">
                                <span>1</span>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="uk-hidden@m header__mobile">

        </div>
    </header>

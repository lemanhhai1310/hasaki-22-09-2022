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
                            <a href="#offcanvas-overlay-menupc" uk-toggle class="header__pc__btnMenu">
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
                            <div class="uk-position-relative" id="box_acc">
                                <div class="uk-child-width-auto uk-grid-10 uk-flex-middle" uk-grid>
                                    <div>
                                        <img src="images/hsk/icon_header_2.svg" alt="">
                                    </div>
                                    <div>
                                        <div class="header__pc__txt">
                                            <a href="#modal-close-outside-login" uk-toggle>Đăng nhập</a>
                                            /
                                            <a href="#modal-close-outside-register" uk-toggle>Đăng ký</a>
                                        </div>
                                        <div class="header__pc__txt header__pc__txt--acc uk-flex uk-flex-middle">Tài khoản</div>
                                    </div>
                                </div>
                                <div class="uk-width-medium header__pc__boxLogin" uk-dropdown="pos: bottom-center">
                                    <div class="header__pc__boxLogin__item">
                                        <div class="uk-form-stacked">
                                            <label class="uk-form-label header__pc__boxLogin__txt" for="form-stacked-text">Đăng nhập với</label>
                                            <div class="uk-form-controls">
                                                <div class="uk-child-width-expand uk-grid-5" uk-grid>
                                                    <div>
                                                        <a href="javascript:void(0)"><img class="uk-width-1-1" src="images/hsk/img_login_fb.jpeg" alt=""></a>
                                                    </div>
                                                    <div>
                                                        <a href="javascript:void(0)"><img class="uk-width-1-1" src="images/hsk/img_login_gg.jpeg" alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="header__pc__boxLogin__item">
                                        <div class="uk-form-stacked uk-text-center">
                                            <label class="uk-form-label header__pc__boxLogin__txt" for="form-stacked-text">Hoặc đăng nhập với Hasaki.vn</label>
                                            <div class="uk-form-controls">
                                                <a href="#modal-close-outside-login" uk-toggle class="header__pc__boxLogin__btnLogin uk-width-1-1 uk-button uk-button-default">Đăng nhập</a>
                                            </div>
                                            <div class="uk-margin-small-top header__pc__boxLogin__txt uk-text-left">Bạn chưa có tài khoản? <a href="#modal-close-outside-register" uk-toggle>ĐĂNG KÝ NGAY</a></div>
                                        </div>
                                    </div>
                                </div>
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
            <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>

                <div class="uk-navbar-left">
                    <a class="uk-navbar-toggle header__mobile__menu" href="#offcanvas-overlay-menumobile" uk-toggle aria-label="Open Menu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </div>

                <div class="uk-navbar-center">
                    <a href="" class="uk-navbar-item uk-logo"><img style="height: 35px" src="images/hsk/new_logo_500x114.svg" alt=""></a>
                </div>

                <div class="uk-navbar-right">
                    <a href="" class="uk-navbar-item header__mobile__cart">
                        <div class="uk-position-relative">
                            <img style="width: 25px" src="images/graphics/cart_top.svg" alt="">
                            <span class="uk-position-top-right header__mobile__cart__count">1</span>
                        </div>
                    </a>
                </div>
            </nav>
            <div class="header__mobile__search">
                <div class="uk-container">
                    <form class="uk-search uk-search-default uk-width-1-1">
                        <span uk-search-icon></span>
                        <input class="uk-search-input" type="search" placeholder="Tìm sản phẩm, thương hiệu bạn mong muốn...">
                    </form>
                </div>
            </div>
        </div>
    </header>

    <div class="uk-visible@m top_bar_hasaki uk-position-z-index uk-position-relative">
        <div class="uk-container">
            <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>

                <div class="uk-navbar-left">
                    <div class="uk-navbar-item">
                        <a href="" class="top_bar_hasaki__btn top_bar_hasaki__btn--maps uk-button uk-button-default uk-button-small">Phường 8, Quận 10, TP Hồ Chí Minh</a>
                    </div>
                    <ul class="uk-navbar-nav">
                        <li><a href="#">HASAKI DEALS</a></li>
                        <li><a href="#">HOT DEALS</a></li>
                        <li><a href="#">THƯƠNG HIỆU</a></li>
                        <li><a href="#">HÀNG MỚI VỀ</a></li>
                        <li><a href="#">BÁN CHẠY</a></li>
                        <li><a href="#">CLINIC & SPA</a></li>
                    </ul>

                </div>

                <div class="uk-navbar-right">
                    <div class="uk-navbar-item">
                        <a href="" class="top_bar_hasaki__btn top_bar_hasaki__btn--taiapp uk-button uk-button-default uk-button-small">Tải ứng dụng</a>
                    </div>
                    <div class="uk-navbar-item">
                        <a href="" class="top_bar_hasaki__btn top_bar_hasaki__btn--tracuu uk-button uk-button-default uk-button-small">Tra cứu đơn hàng</a>
                    </div>
                </div>

            </nav>
        </div>
    </div>

    <div class="uk-overlay-primary mask_menu"></div>

    <div id="offcanvas-overlay-menumobile" uk-offcanvas="overlay: true">
        <div class="uk-offcanvas-bar">

            <button class="uk-offcanvas-close" type="button" uk-close></button>


            <h3>Title</h3>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

        </div>
    </div>

    <div id="offcanvas-overlay-menupc" uk-offcanvas="overlay: true">
        <div class="uk-offcanvas-bar">

            <button class="uk-offcanvas-close" type="button" uk-close></button>


            <h3>Title</h3>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

        </div>
    </div>

    <!--Modal login-->
    <div id="modal-close-outside-login" class="modal__acc" uk-modal>
        <div class="uk-modal-dialog uk-modal-body modal__acc__body modal__acc__dialog">
            <button class="uk-modal-close-outside modal__acc__close" type="button" uk-close></button>
            <div>
                <div class="modal__acc__item">
                    <div class="uk-form-stacked">
                        <label class="uk-form-label header__pc__boxLogin__txt" for="form-stacked-text">Đăng nhập với</label>
                        <div class="uk-form-controls">
                            <div class="uk-child-width-1-2 uk-grid-10 uk-grid-match" uk-grid>
                                <div>
                                    <a href="javascript:void(0)"><img class="uk-width-1-1@m uk-responsive-height" src="images/hsk/img_login_fb_2.jpeg" alt=""></a>
                                </div>
                                <div>
                                    <a href="javascript:void(0)"><img class="uk-width-1-1@m uk-responsive-height" src="images/hsk/img_login_gg_2.jpeg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal__acc__item">
                    <form>
                        <fieldset class="uk-fieldset">

                            <legend class="uk-legend header__pc__boxLogin__txt uk-text-center">Hoặc đăng nhập với Hasaki.vn</legend>

                            <div class="uk-margin-small">
                                <div class="uk-position-relative">
                                    <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: mail; ratio: 0.8"></span>
                                    <input class="uk-input modal__acc__input uk-form-small" type="text" placeholder="Nhập email hoặc số điện thoại">
                                </div>
                            </div>

                            <div class="uk-margin-small">
                                <div class="uk-position-relative">
                                    <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock; ratio: 0.8"></span>
                                    <input class="uk-input modal__acc__input uk-form-small" type="password" placeholder="Nhập password">
                                </div>
                            </div>

                            <div class="uk-margin-small">
                                <div class="uk-child-width-auto uk-grid-5 uk-flex-middle" uk-grid>
                                    <div class="uk-width-expand">
                                        <label class="header__pc__boxLogin__txt"><input class="uk-checkbox modal__acc__checkbox" type="checkbox"> Nhớ mật khẩu</label>
                                    </div>
                                    <div>
                                        <div class="header__pc__boxLogin__txt"><a href="#modal-close-outside-forgotpass" uk-toggle>Quên mật khẩu</a></div>
                                    </div>
                                </div>
                            </div>

                            <div class="uk-margin-small">
                                <button type="submit" class="header__pc__boxLogin__btnLogin header__pc__boxLogin__btnLogin--submit uk-width-1-1 uk-button uk-button-default">Đăng nhập</button>
                            </div>

                            <div class="uk-margin-small-top">
                                <div class="header__pc__boxLogin__txt">Bạn chưa có tài khoản? <a href="#modal-close-outside-register" uk-toggle>ĐĂNG KÝ NGAY</a></div>
                            </div>

                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--/Modal login-->

    <!--Modal register-->
    <div id="modal-close-outside-register" class="modal__acc" uk-modal>
        <div class="uk-modal-dialog uk-modal-body modal__acc__body modal__acc__dialog">
            <button class="uk-modal-close-outside modal__acc__close" type="button" uk-close></button>
            <div>
                <div class="modal__acc__item">
                    <form>
                        <fieldset class="uk-fieldset">

                            <legend class="uk-legend header__pc__boxLogin__txt">Đăng ký tài khoản</legend>

                            <div class="uk-margin-small">
                                <div class="uk-position-relative">
                                    <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: mail; ratio: 0.8"></span>
                                    <input class="uk-input modal__acc__input uk-form-small" type="text" placeholder="Nhập email hoặc số điện thoại">
                                </div>
                            </div>

                            <div class="uk-margin-small">
                                <div class="uk-position-relative">
                                    <input class="uk-input modal__acc__input modal__acc__input--code uk-form-small" type="text" placeholder="Nhập mã xác thực 6 số">
                                    <button class="modal__acc__btnOtp uk-button uk-button-secondary uk-button-small uk-position-right">Lấy mã</button>
                                </div>
                            </div>

                            <div class="uk-margin-small">
                                <div class="uk-position-relative">
                                    <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock; ratio: 0.8"></span>
                                    <input class="uk-input modal__acc__input uk-form-small" type="password" placeholder="Nhập mật khẩu từ 6 - 32 ký tự">
                                </div>
                            </div>

                            <div class="uk-margin-small">
                                <div class="uk-position-relative">
                                    <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: user; ratio: 0.8"></span>
                                    <input class="uk-input modal__acc__input uk-form-small" type="text" placeholder="Họ tên">
                                </div>
                            </div>

                            <div class="uk-margin-small uk-grid-small uk-child-width-auto uk-grid">
                                <label class="header__pc__boxLogin__txt"><input class="uk-radio modal__acc__radio" type="radio" name="radio2"> Không xác định</label>
                                <label class="header__pc__boxLogin__txt"><input class="uk-radio modal__acc__radio" type="radio" name="radio2" checked> Nam</label>
                                <label class="header__pc__boxLogin__txt"><input class="uk-radio modal__acc__radio" type="radio" name="radio2"> Nữ</label>
                            </div>

                            <div class="uk-margin-small uk-grid uk-child-width-1-3 uk-grid-10">
                                <div>
                                    <select class="uk-select modal__acc__select uk-form-small">
                                        <option value="">Ngày</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                    </select>
                                </div>
                                <div>
                                    <select class="uk-select modal__acc__select uk-form-small">
                                        <option value="">Tháng</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </div>
                                <div>
                                    <select class="uk-select modal__acc__select uk-form-small">
                                        <option value="">Năm</option>
                                        <option value="2008">2008</option>
                                        <option value="2007">2007</option>
                                        <option value="2006">2006</option>
                                        <option value="2005">2005</option>
                                        <option value="2004">2004</option>
                                        <option value="2003">2003</option>
                                        <option value="2002">2002</option>
                                        <option value="2001">2001</option>
                                        <option value="2000">2000</option>
                                        <option value="1999">1999</option>
                                        <option value="1998">1998</option>
                                        <option value="1997">1997</option>
                                        <option value="1996">1996</option>
                                        <option value="1995">1995</option>
                                        <option value="1994">1994</option>
                                        <option value="1993">1993</option>
                                        <option value="1992">1992</option>
                                        <option value="1991">1991</option>
                                        <option value="1990">1990</option>
                                        <option value="1989">1989</option>
                                        <option value="1988">1988</option>
                                        <option value="1987">1987</option>
                                        <option value="1986">1986</option>
                                        <option value="1985">1985</option>
                                        <option value="1984">1984</option>
                                        <option value="1983">1983</option>
                                        <option value="1982">1982</option>
                                        <option value="1981">1981</option>
                                        <option value="1980">1980</option>
                                        <option value="1979">1979</option>
                                        <option value="1978">1978</option>
                                        <option value="1977">1977</option>
                                        <option value="1976">1976</option>
                                        <option value="1975">1975</option>
                                        <option value="1974">1974</option>
                                        <option value="1973">1973</option>
                                        <option value="1972">1972</option>
                                        <option value="1971">1971</option>
                                        <option value="1970">1970</option>
                                        <option value="1969">1969</option>
                                        <option value="1968">1968</option>
                                        <option value="1967">1967</option>
                                        <option value="1966">1966</option>
                                        <option value="1965">1965</option>
                                        <option value="1964">1964</option>
                                        <option value="1963">1963</option>
                                        <option value="1962">1962</option>
                                        <option value="1961">1961</option>
                                        <option value="1960">1960</option>
                                        <option value="1959">1959</option>
                                        <option value="1958">1958</option>
                                        <option value="1957">1957</option>
                                        <option value="1956">1956</option>
                                        <option value="1955">1955</option>
                                        <option value="1954">1954</option>
                                        <option value="1953">1953</option>
                                        <option value="1952">1952</option>
                                        <option value="1951">1951</option>
                                        <option value="1950">1950</option>
                                        <option value="1949">1949</option>
                                        <option value="1948">1948</option>
                                        <option value="1947">1947</option>
                                        <option value="1946">1946</option>
                                        <option value="1945">1945</option>
                                        <option value="1944">1944</option>
                                        <option value="1943">1943</option>
                                        <option value="1942">1942</option>
                                        <option value="1941">1941</option>
                                        <option value="1940">1940</option>
                                        <option value="1939">1939</option>
                                    </select>
                                </div>
                            </div>

                            <div class="uk-margin-small">
                                <label class="header__pc__boxLogin__txt"><input class="uk-checkbox modal__acc__checkbox" type="checkbox" checked> Nhận thông tin khuyến mãi qua e-mail</label>
                            </div>

                            <div class="uk-margin-small">
                                <div class="header__pc__boxLogin__txt">Tôi đã đọc và đồng ý thực hiện mọi giao dịch mua bán theo <a href="" target="_blank">điều kiện sử dụng và chính sách</a> của Hasaki.vn</div>
                            </div>

                            <div class="uk-margin-small-top">
                                <button type="submit" class="header__pc__boxLogin__btnLogin header__pc__boxLogin__btnLogin--submit uk-width-1-1 uk-button uk-button-default">Đăng ký</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="modal__acc__item">
                    <div class="header__pc__boxLogin__txt">Bạn đã có tài khoản? <a href="#modal-close-outside-login" uk-toggle>ĐĂNG NHẬP</a></div>
                    <div class="uk-form-stacked">
                        <label class="uk-form-label header__pc__boxLogin__txt" for="form-stacked-text">Hoặc đăng nhập với:</label>
                        <div class="uk-form-controls">
                            <div class="uk-child-width-1-2 uk-grid-10 uk-grid-match" uk-grid>
                                <div>
                                    <a href="javascript:void(0)"><img class="uk-width-1-1@m uk-responsive-height uk-responsive-width" src="images/hsk/img_login_fb_2.jpeg" alt=""></a>
                                </div>
                                <div>
                                    <a href="javascript:void(0)"><img class="uk-width-1-1@m uk-responsive-height uk-responsive-width" src="images/hsk/img_login_gg_2.jpeg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/Modal register-->

    <!--Modal forgot password-->
    <div id="modal-close-outside-forgotpass" class="modal__acc" uk-modal>
        <div class="uk-modal-dialog uk-modal-body modal__acc__body modal__acc__dialog">
            <button class="uk-modal-close-outside modal__acc__close" type="button" uk-close></button>
            <form>
                <fieldset class="uk-fieldset">

                    <legend class="uk-legend header__pc__boxLogin__txt header__pc__boxLogin__txt--title">Quên mật khẩu tài khoản</legend>

                    <div class="uk-margin-small">
                        <div class="header__pc__boxLogin__txt">Nhập địa chỉ email hoặc số điện thoại của bạn dưới đây và hệ thống sẽ gửi cho bạn một liên kết để đặt lại mật khẩu của bạn</div>
                    </div>

                    <div class="uk-margin-small">
                        <input class="uk-input modal__acc__input" type="text" placeholder="Nhập email hoặc số điện thoại">
                    </div>

                    <div class="uk-margin-small">
                        <div class="uk-child-width-auto uk-grid-collapse uk-grid-match" uk-grid>
                            <div>
                                <img src="images/hsk/ajax.json" alt="">
                            </div>
                            <div class="uk-width-expand">
                                <input class="uk-input modal__acc__input" type="text" placeholder="Nhập captcha">
                            </div>
                        </div>
                    </div>

                    <div class="uk-margin-small-top uk-text-center">
                        <button type="submit" class="header__pc__boxLogin__btnLogin header__pc__boxLogin__btnLogin--send uk-button uk-button-default">Gửi</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
    <!--/Modal forgot password-->

    <script>
        // UIkit.modal('#modal-close-outside-register').show();
    </script>

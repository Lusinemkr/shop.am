<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$this->title = 'My Yii Application';

?>

<!--<div class="menu d-flex flex-column align-items-start justify-content-start menu_mm trans_400">-->
<!--    <div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>-->
<!--    <div class="menu_top d-flex flex-row align-items-center justify-content-start">-->
<!---->
<!--        <!-- Language -->-->
<!--        <div class="info_languages has_children">-->
<!--            <div class="language_flag"><img src="images/flag_1.svg" alt="https://www.flaticon.com/authors/freepik"></div>-->
<!--            <div class="dropdown_text">english</div>-->
<!--            <div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>-->
<!---->
<!--            <!-- Language Dropdown Menu -->-->
<!--            <ul>-->
<!--                <li><a href="#">-->
<!--                        <div class="language_flag"><img src="images/flag_2.svg" alt="https://www.flaticon.com/authors/freepik"></div>-->
<!--                        <div class="dropdown_text">french</div>-->
<!--                    </a></li>-->
<!--                <li><a href="#">-->
<!--                        <div class="language_flag"><img src="images/flag_3.svg" alt="https://www.flaticon.com/authors/freepik"></div>-->
<!--                        <div class="dropdown_text">japanese</div>-->
<!--                    </a></li>-->
<!--                <li><a href="#">-->
<!--                        <div class="language_flag"><img src="images/flag_4.svg" alt="https://www.flaticon.com/authors/freepik"></div>-->
<!--                        <div class="dropdown_text">russian</div>-->
<!--                    </a></li>-->
<!--                <li><a href="#">-->
<!--                        <div class="language_flag"><img src="images/flag_5.svg" alt="https://www.flaticon.com/authors/freepik"></div>-->
<!--                        <div class="dropdown_text">spanish</div>-->
<!--                    </a></li>-->
<!--            </ul>-->
<!---->
<!--        </div>-->
<!---->
<!--        <!-- Currency -->-->
<!--        <div class="info_currencies has_children">-->
<!--            <div class="dropdown_text">usd</div>-->
<!--            <div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>-->
<!---->
<!--            <!-- Currencies Dropdown Menu -->-->
<!--            <ul>-->
<!--                <li><a href="#"><div class="dropdown_text">EUR</div></a></li>-->
<!--                <li><a href="#"><div class="dropdown_text">YEN</div></a></li>-->
<!--                <li><a href="#"><div class="dropdown_text">GBP</div></a></li>-->
<!--                <li><a href="#"><div class="dropdown_text">CAD</div></a></li>-->
<!--            </ul>-->
<!---->
<!--        </div>-->
<!---->
<!--    </div>-->
<!--    <div class="menu_search">-->
<!--        <form action="#" class="header_search_form menu_mm">-->
<!--            <input type="search" class="search_input menu_mm" placeholder="Search" required="required">-->
<!--            <button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">-->
<!--                <i class="fa fa-search menu_mm" aria-hidden="true"></i>-->
<!--            </button>-->
<!--        </form>-->
<!--    </div>-->
<!--    <nav class="menu_nav">-->
<!--        <ul class="menu_mm">-->
<!--            <li class="menu_mm"><a href="index.html">home</a></li>-->
<!--            <li class="menu_mm"><a href="#">woman</a></li>-->
<!--            <li class="menu_mm"><a href="#">man</a></li>-->
<!--            <li class="menu_mm"><a href="#">lookbook</a></li>-->
<!--            <li class="menu_mm"><a href="blog.html">blog</a></li>-->
<!--            <li class="menu_mm"><a href="contact.html">contact</a></li>-->
<!--        </ul>-->
<!--    </nav>-->
<!--    <div class="menu_extra">-->
<!--        <div class="menu_social">-->
<!--            <ul>-->
<!--                <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>-->
<!--                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>-->
<!--                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>-->
<!--                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<!-- Sidebar -->

<div class="sidebar">

    <!-- Info -->
    <div class="info">
        <div class="info_content d-flex flex-row align-items-center justify-content-start">

            <!-- Language -->
            <div class="info_languages has_children">
                <div class="language_flag"><img src="images/flag_1.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                <div class="dropdown_text">english</div>
                <div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>

                <!-- Language Dropdown Menu -->
                <ul>
                    <li><a href="#">
                            <div class="language_flag"><img src="images/flag_2.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                            <div class="dropdown_text">french</div>
                        </a></li>
                    <li><a href="#">
                            <div class="language_flag"><img src="images/flag_3.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                            <div class="dropdown_text">japanese</div>
                        </a></li>
                    <li><a href="#">
                            <div class="language_flag"><img src="images/flag_4.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                            <div class="dropdown_text">russian</div>
                        </a></li>
                    <li><a href="#">
                            <div class="language_flag"><img src="images/flag_5.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                            <div class="dropdown_text">spanish</div>
                        </a></li>
                </ul>

            </div>

            <!-- Currency -->
            <div class="info_currencies has_children">
                <div class="dropdown_text">usd</div>
                <div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>

                <!-- Currencies Dropdown Menu -->
                <ul>
                    <li><a href="#"><div class="dropdown_text">EUR</div></a></li>
                    <li><a href="#"><div class="dropdown_text">YEN</div></a></li>
                    <li><a href="#"><div class="dropdown_text">GBP</div></a></li>
                    <li><a href="#"><div class="dropdown_text">CAD</div></a></li>
                </ul>

            </div>

        </div>
    </div>

    <!-- Logo -->
    <div class="sidebar_logo">
        <a href="#"><div>a<span>star</span></div></a>
    </div>

    <!-- Sidebar Navigation -->
    <nav class="sidebar_nav">
        <ul>
            <li><a href="index.html">home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
            <li><a href="#">woman<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
            <li><a href="#">man<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
            <li><a href="#">lookbook<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
            <li><a href="blog.html">blog<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
            <li><a href="#">contact<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
        </ul>
    </nav>

    <!-- Search -->
    <div class="search">
        <form action="#" class="search_form" id="sidebar_search_form">
            <input type="text" class="search_input" placeholder="Search" required="required">
            <button class="search_button"><i class="fa fa-search" aria-hidden="true"></i></button>
        </form>
    </div>

    <!-- Cart -->
    <div class="cart d-flex flex-row align-items-center justify-content-start">
        <div class="cart_icon"><a href="cart.html">
                <img src="images/bag.png" alt="">
                <div class="cart_num">2</div>
            </a></div>
        <div class="cart_text">bag</div>
        <div class="cart_price">$39.99 (1)</div>
    </div>
</div>

<!-- Home -->

<div class="home">
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/categories.jpg" data-speed="0.8"></div>
    <div class="home_container">
        <div class="home_content">
            <div class="home_title">Shop</div>
            <div class="breadcrumbs">
                <ul class="d-flex flex-row align-items-center justify-content-start">
                    <li><a href="">Home</a></li>
                    <li><a href="#">Woman</a></li>
                    <li>Accessories</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Products -->

<div class="products">

    <!-- Sorting & Filtering -->
    <div class="products_bar">
        <div class="section_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="products_bar_content d-flex flex-column flex-xxl-row align-items-start align-items-xxl-center justify-content-start">
                            <div class="product_categories">
                                <ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
                                    <li class="active"><a href="#">All</a></li>
                                    <li><a href="#">Hot Products</a></li>
                                    <li><a href="#">New Products</a></li>
                                    <li><a href="#">Sale Products</a></li>
                                </ul>
                            </div>
                            <div class="products_bar_side ml-xxl-auto d-flex flex-row align-items-center justify-content-start">
                                <div class="products_dropdown product_dropdown_sorting">
                                    <div class="isotope_sorting_text"><span>Default Sorting</span><i class="fa fa-caret-down" aria-hidden="true"></i></div>
                                    <ul>
                                        <li class="item_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'>Default</li>
                                        <li class="item_sorting_btn" data-isotope-option='{ "sortBy": "price" }'>Price</li>
                                        <li class="item_sorting_btn" data-isotope-option='{ "sortBy": "name" }'>Name</li>
                                    </ul>
                                </div>
                                <div class="product_view d-flex flex-row align-items-center justify-content-start">
                                    <div class="view_item active"><img src="images/view_1.png" alt=""></div>
                                    <div class="view_item"><img src="images/view_2.png" alt=""></div>
                                    <div class="view_item"><img src="images/view_3.png" alt=""></div>
                                </div>
                                <div class="products_dropdown text-right product_dropdown_filter">
                                    <div class="isotope_filter_text"><span>Filter</span><i class="fa fa-caret-down" aria-hidden="true"></i></div>
                                    <ul>
                                        <li class="item_filter_btn" data-filter="*">All</li>
                                        <li class="item_filter_btn" data-filter=".hot">Hot</li>
                                        <li class="item_filter_btn" data-filter=".new">New</li>
                                        <li class="item_filter_btn" data-filter=".sale">Sale</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="products_container grid">

                        <!-- Product -->
                        <div class="product grid-item hot">
                            <div class="product_inner">
                                <div class="product_image">
                                    <img src="images/product_1.jpg" alt="">
                                    <div class="product_tag">hot</div>
                                </div>
                                <div class="product_content text-center">
                                    <div class="product_title"><a href="product.html">long red shirt</a></div>
                                    <div class="product_price">$39.90</div>
                                    <div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
                                </div>
                            </div>
                        </div>

                        <!-- Product -->
                        <div class="product grid-item">
                            <div class="product_inner">
                                <div class="product_image"><img src="images/product_2.jpg" alt=""></div>
                                <div class="product_content text-center">
                                    <div class="product_title"><a href="product.html">hype grey shirt</a></div>
                                    <div class="product_price">$19.50</div>
                                    <div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
                                </div>
                            </div>
                        </div>

                        <!-- Product -->
                        <div class="product grid-item sale">
                            <div class="product_inner">
                                <div class="product_image">
                                    <img src="images/product_3.jpg" alt="">
                                    <div class="product_tag">sale</div>
                                </div>
                                <div class="product_content text-center">
                                    <div class="product_title"><a href="product.html">long sleeve jacket</a></div>
                                    <div class="product_price">$32.20<span>RRP 64.40</span></div>
                                    <div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
                                </div>
                            </div>
                        </div>

                        <!-- Product -->
                        <div class="product grid-item">
                            <div class="product_inner">
                                <div class="product_image">
                                    <img src="images/product_4.jpg" alt="">
                                </div>
                                <div class="product_content text-center">
                                    <div class="product_title"><a href="product.html">denim men shirt</a></div>
                                    <div class="product_price">$59.90</div>
                                    <div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
                                </div>
                            </div>
                        </div>

                        <!-- Product -->
                        <div class="product grid-item">
                            <div class="product_inner">
                                <div class="product_image">
                                    <img src="images/product_5.jpg" alt="">
                                </div>
                                <div class="product_content text-center">
                                    <div class="product_title"><a href="product.html">long red shirt</a></div>
                                    <div class="product_price">$79.90</div>
                                    <div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
                                </div>
                            </div>
                        </div>

                        <!-- Product -->
                        <div class="product grid-item new">
                            <div class="product_inner">
                                <div class="product_image">
                                    <img src="images/product_6.jpg" alt="">
                                    <div class="product_tag">new</div>
                                </div>
                                <div class="product_content text-center">
                                    <div class="product_title"><a href="product.html">hype grey shirt</a></div>
                                    <div class="product_price">$59.90</div>
                                    <div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
                                </div>
                            </div>
                        </div>

                        <!-- Product -->
                        <div class="product grid-item">
                            <div class="product_inner">
                                <div class="product_image">
                                    <img src="images/product_7.jpg" alt="">
                                </div>
                                <div class="product_content text-center">
                                    <div class="product_title"><a href="product.html">long sleeve jacket</a></div>
                                    <div class="product_price">$15.90</div>
                                    <div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
                                </div>
                            </div>
                        </div>

                        <!-- Product -->
                        <div class="product grid-item sale">
                            <div class="product_inner">
                                <div class="product_image">
                                    <img src="images/product_8.jpg" alt="">
                                    <div class="product_tag">sale</div>
                                </div>
                                <div class="product_content text-center">
                                    <div class="product_title"><a href="product.html">denim men shirt</a></div>
                                    <div class="product_price">$43.99<span>RRP 64.40</span></div>
                                    <div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
                                </div>
                            </div>
                        </div>

                        <!-- Product -->
                        <div class="product grid-item hot">
                            <div class="product_inner">
                                <div class="product_image">
                                    <img src="images/product_9.jpg" alt="">
                                    <div class="product_tag">hot</div>
                                </div>
                                <div class="product_content text-center">
                                    <div class="product_title"><a href="product.html">long red shirt</a></div>
                                    <div class="product_price">$39.90</div>
                                    <div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
                                </div>
                            </div>
                        </div>

                        <!-- Product -->
                        <div class="product grid-item">
                            <div class="product_inner">
                                <div class="product_image"><img src="images/product_10.jpg" alt=""></div>
                                <div class="product_content text-center">
                                    <div class="product_title"><a href="product.html">hype grey shirt</a></div>
                                    <div class="product_price">$19.50</div>
                                    <div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
                                </div>
                            </div>
                        </div>

                        <!-- Product -->
                        <div class="product grid-item sale">
                            <div class="product_inner">
                                <div class="product_image">
                                    <img src="images/product_11.jpg" alt="">
                                    <div class="product_tag">sale</div>
                                </div>
                                <div class="product_content text-center">
                                    <div class="product_title"><a href="product.html">long sleeve jacket</a></div>
                                    <div class="product_price">$32.20<span>RRP 64.40</span></div>
                                    <div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
                                </div>
                            </div>
                        </div>

                        <!-- Product -->
                        <div class="product grid-item">
                            <div class="product_inner">
                                <div class="product_image">
                                    <img src="images/product_12.jpg" alt="">
                                </div>
                                <div class="product_content text-center">
                                    <div class="product_title"><a href="product.html">denim men shirt</a></div>
                                    <div class="product_price">$59.90</div>
                                    <div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
                                </div>
                            </div>
                        </div>

                        <!-- Product -->
                        <div class="product grid-item hot">
                            <div class="product_inner">
                                <div class="product_image">
                                    <img src="images/product_13.jpg" alt="">
                                    <div class="product_tag">hot</div>
                                </div>
                                <div class="product_content text-center">
                                    <div class="product_title"><a href="product.html">long red shirt</a></div>
                                    <div class="product_price">$39.90</div>
                                    <div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
                                </div>
                            </div>
                        </div>

                        <!-- Product -->
                        <div class="product grid-item new">
                            <div class="product_inner">
                                <div class="product_image">
                                    <img src="images/product_14.jpg" alt="">
                                    <div class="product_tag">new</div>
                                </div>
                                <div class="product_content text-center">
                                    <div class="product_title"><a href="product.html">hype grey shirt</a></div>
                                    <div class="product_price">$19.50</div>
                                    <div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
                                </div>
                            </div>
                        </div>

                        <!-- Product -->
                        <div class="product grid-item sale">
                            <div class="product_inner">
                                <div class="product_image">
                                    <img src="images/product_15.jpg" alt="">
                                    <div class="product_tag">sale</div>
                                </div>
                                <div class="product_content text-center">
                                    <div class="product_title"><a href="product.html">long sleeve jacket</a></div>
                                    <div class="product_price">$32.20<span>RRP 64.40</span></div>
                                    <div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
                                </div>
                            </div>
                        </div>

                        <!-- Product -->
                        <div class="product grid-item">
                            <div class="product_inner">
                                <div class="product_image">
                                    <img src="images/product_16.jpg" alt="">
                                </div>
                                <div class="product_content text-center">
                                    <div class="product_title"><a href="product.html">denim men shirt</a></div>
                                    <div class="product_price">$59.90</div>
                                    <div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Newsletter -->

<div class="newsletter">
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/newsletter.jpg" data-speed="0.8"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="newsletter_content text-center">
                    <div class="newsletter_title_container">
                        <div class="newsletter_title">subscribe to our newsletter</div>
                        <div class="newsletter_subtitle">we won't spam, we promise!</div>
                    </div>
                    <div class="newsletter_form_container">
                        <form action="#" id="newsletter_form" class="newsletter_form">
                            <input type="email" class="newsletter_input" placeholder="your e-mail here" required="required">
                            <button class="newsletter_button">submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
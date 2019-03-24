<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
       // 'css/site.css',
        'styles/bootstrap-4.1.3/bootstrap.css',
        'plugins/font-awesome-4.7.0/css/font-awesome.min.css',
        'plugins/font-awesome-4.7.0/css/font-awesome.min.css',
        'plugins/OwlCarousel2-2.2.1/owl.carousel.css',
        'plugins/OwlCarousel2-2.2.1/owl.theme.default.css',
        'plugins/OwlCarousel2-2.2.1/animate.css',
//        'styles/product.css',
//        'styles/product_responsive.css',
//        'styles/blog_responsive.css',
//        'styles/blog.css',
//        'styles/cart.css',
//        'styles/cart_responsive.css',
        'styles/main_styles.css',
        'styles/responsive.css',
//        'styles/categories.css',
//        'styles/categories_responsive.css',
//        'styles/checkout.css',
//        'styles/checkout_responsive.css',

    ];
    public $js = [
//        'js/jquery-3.2.1.min.js',
//        'styles/bootstrap-4.1.3/popper.js',
        'styles/bootstrap-4.1.3/bootstrap.min.js',
        'plugins/greensock/TweenMax.min.js',
        'plugins/greensock/TimelineMax.min.js',
        'plugins/scrollmagic/ScrollMagic.min.js',
        'plugins/greensock/animation.gsap.min.js',
        'plugins/greensock/ScrollToPlugin.min.js',
        'plugins/OwlCarousel2-2.2.1/owl.carousel.js',
        'plugins/easing/easing.js',
        'plugins/parallax-js-master/parallax.min.js',
        'plugins/Isotope/isotope.pkgd.min.js',
        'plugins/Isotope/fitcolumns.js ',
        //'js/product.js',
        'js/custom.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}

<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppPublicAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'public-assets/css/animate.css',
        'public-assets/css/owl.carousel.min.css',
        'public-assets/css/owl.theme.default.min.css',
        'public-assets/css/magnific-popup.css',
        'public-assets/css/bootstrap-datepicker.css',
        'public-assets/css/jquery.timepicker.css',
        'public-assets/css/flaticon.css',
        'public-assets/css/style.css',
    ];
    public $js = [
        'public-assets/js/jquery.min.js',
        'public-assets/js/jquery-migrate-3.0.1.min.js',
        'public-assets/js/popper.min.js',
        'public-assets/js/bootstrap.min.js',
        'public-assets/js/jquery.easing.1.3.js',
        'public-assets/js/jquery.waypoints.min.js',
        'public-assets/js/jquery.stellar.min.js',
        'public-assets/js/jquery.animateNumber.min.js',
        'public-assets/js/jquery.timepicker.min.js',
        'public-assets/js/owl.carousel.min.js',
        'public-assets/js/jquery.magnific-popup.min.js',
        'public-assets/js/scrollax.min.js',
        'public-assets/https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false',
        'public-assets/js/google-map.js',
        'public-assets/js/main.js',
        'public-assets/js/bootstrap-datepicker.js'
    ];
    public $depends = [
    ];
}

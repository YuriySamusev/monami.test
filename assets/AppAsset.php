<?php


namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/main.css',
    ];
    public $js = [
        'scripts/jquery-2.1.4.min.js',
        'scripts/swiper.js',
        'scripts/jquery.nicescroll.min.js',
        'scripts/component.js',
        'scripts/hash-nav.js',
        'scripts/main.js',
        'scripts/lang-select.js',
        'scripts/select-block.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}

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
        'css/main.css',
        'css/site.css',
        'css/bootstrap.css',
        'css/bootstrap-grid.min.css',
        'css/bootstrap-reboot.css',
        'css/bootstrap-reboot.min.css',
        'css/bootstrap.min.css',
    ];
    public $js = [
        'js/bootstrap.bundle.js',
        'js/bootstrap.bundle.min.js',
        'js/bootstrap.js',
        'js/bootstrap.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}

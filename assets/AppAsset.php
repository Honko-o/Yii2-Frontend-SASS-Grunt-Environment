<?php

namespace frontend\assets;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $basePath = "@webroot";
    public $baseUrl = "@web";

    public $css = [
        YII_ENV_DEV ?
            "build/css/all.css" :
            "build/css/all.min.css",
    ];
    public $js = [
        YII_ENV_DEV ?
            "build/css/all.js" :
            "build/css/all.min.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'frontend\assets\BootstrapAssets'
    ];
}

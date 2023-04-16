<?php

namespace frontend\assets;

use yii\web\AssetBundle;

class BootstrapAssets extends AssetBundle
{
    public $basePath = "@webroot";
    public $baseUrl = "@web";

    public $css = [
        YII_ENV_DEV ?
            "node_modules/bootstrap/dist/css/bootstrap.css" :
            "node_modules/bootstrap/dist/css/bootstrap.min.css",


    ];
    public $js = [
        YII_ENV_DEV ?
            "node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" :
            "node_modules/bootstrap/dist/js/bootstrap.bundle.js",
    ];
    public $depends = [
        'yii\web\YiiAsset'
    ];
}

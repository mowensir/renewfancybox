<?php

namespace renewfancybox\fancybox;

use yii\web\AssetBundle;

class FancyBoxAsset extends AssetBundle
{
    public $sourcePath = '@bower/fancyBox';

    public $js = [];
    
    public $css = [
        'source/jquery.fancybox.css'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
    
    public function registerAssetFiles($view) {
        $this->js[] = 'source/jquery.fancybox' . (!YII_DEBUG ? '.pack' : '') . '.js';
        parent::registerAssetFiles($view);
    }
} 
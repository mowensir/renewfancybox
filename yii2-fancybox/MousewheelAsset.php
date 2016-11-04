<?php
/**
 * Created by mulat.
 * User: mulat
 * Date: 07.05.2015
 * Time: 13:17
 */
namespace renewfancybox\fancybox;

use yii\web\AssetBundle;

class MousewheelAsset extends AssetBundle
{
    public $sourcePath = '@bower/jquery-mousewheel';

    public $js = [];

    public $css = [];

    public $depends = [
        'yii\web\JqueryAsset',
        'renewfancybox\fancybox\FancyBoxAsset',
    ];

    public function registerAssetFiles($view) {
        $this->js[] = 'jquery.mousewheel' . (!YII_DEBUG ? '.min' : '') . '.js';
        parent::registerAssetFiles($view);
    }
}

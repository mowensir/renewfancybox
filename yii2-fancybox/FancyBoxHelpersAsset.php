<?php
/**
 * Created by mulat.
 * User: mulat
 * Date: 07.05.2015
 * Time: 13:17
 */
namespace renewfancybox\fancybox;

use yii\web\AssetBundle;

class FancyBoxHelpersAsset extends AssetBundle
{
    public $sourcePath = '@bower/fancyBox';

    public $js = [
        'source/helpers/jquery.fancybox-buttons.js',
        'source/helpers/jquery.fancybox-media.js',
        'source/helpers/jquery.fancybox-thumbs.js'
    ];

    public $css = [
        'source/helpers/jquery.fancybox-buttons.css',
        'source/helpers/jquery.fancybox-thumbs.css'
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'renewfancybox\fancybox\FancyBoxAsset',
    ];

}

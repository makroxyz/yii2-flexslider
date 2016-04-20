<?php

namespace bupy7\flexslider;

use yii\web\AssetBundle;

class EasingAsset extends AssetBundle
{
    public $sourcePath = '@bower/jquery.easing';
    
    public $basePath = '@webroot/assets';
    
    public $js = [
        'js/jquery.easing.min.js'
    ];
    
    public $depends = [
        'yii\web\JqueryAsset'
    ];

}
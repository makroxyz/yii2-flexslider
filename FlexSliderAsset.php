<?php

namespace bupy7\flexslider;

use yii\web\AssetBundle;

/**
 * Assets of FlexSlider.
 */
class FlexSliderAsset extends AssetBundle
{

    public $sourcePath = '@bower/flexslider';

    public $css = [
        'flexslider.css',
    ];

    public $js = [
        'jquery.flexslider-min.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'bupy7\flexslider\EasingAsset',
    ];

}

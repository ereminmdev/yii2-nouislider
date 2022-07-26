<?php

namespace ereminmdev\yii2\nouislider;

use yii\web\AssetBundle;

class NouisliderAsset extends AssetBundle
{
    public $sourcePath = '@npm/nouislider/dist';

    public $js = [
        YII_DEBUG ? 'nouislider.js' : 'nouislider.min.js',
    ];

    public $css = [
        YII_DEBUG ? 'nouislider.css' : 'nouislider.min.css',
    ];
}

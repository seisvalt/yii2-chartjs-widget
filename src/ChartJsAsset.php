<?php

namespace seisvalt\chartjs;

use yii\web\AssetBundle;

/**
 *
 * ChartPluginAsset
 */
class ChartJsAsset extends AssetBundle
{
    public $sourcePath = null;

    public $js = [
        'https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}

<?php
namespace seisvalt\chartjs;

use yii\web\AssetBundle;

/**
 *
 * ChartPluginAsset
 */
class ChartJsLocalAsset extends AssetBundle
{
    public $sourcePath = '@npm/chart.js/dist';

    public $js = [
        'chart.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}

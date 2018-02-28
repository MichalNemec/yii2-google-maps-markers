<?php

namespace nexen\google\maps\markers;

use yii\web\AssetBundle;

/**
 * Class GoogleMapsAsset
 *
 * @package yii2mod\google\maps\markers
 */
class GoogleMapsAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@vendor/nexen/yii2-google-maps-markers-with-icon/assets';

    /**
     * @var array
     */
    public $js = [
        'markerclusterer_compiled.js',
        'googlemap.js',
    ];

    /**
     * @var array
     */
    public $depends = [
        'yii\web\YiiAsset',
    ];
}

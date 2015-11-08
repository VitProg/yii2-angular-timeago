<?php

namespace vitprog\angular\timeago;

/**
 * AngularTimeagoAsset
 *
 * @author VitProg <vitprog@gmail.com>
 */
class AngularTimeagoAsset extends \yii\web\AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@bower/angular-timeago/src';

    /**
     * @inheritdoc
     */
    public $js = [
        'angular-timeago.js',
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'dee\angular\AngularAsset'
    ];
}
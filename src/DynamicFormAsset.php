<?php

namespace edifference\dynamicform;

use yii\web\AssetBundle;

/**
 * Asset bundle for dynamicform Widget
 *
 */
class DynamicFormAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\widgets\ActiveFormAsset'
    ];

    /**
     * @inheritdoc
     */
    public $sourcePath = '@vendor/edifference/yii2-dynamicform/src/assets';

    /**
     * @inheritdoc
     */
    public $js = ['yii2-dynamic-form.js'];
}

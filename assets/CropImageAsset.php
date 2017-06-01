<?php

namespace zozoh94\filemanager\assets;

use yii\web\AssetBundle;

class CropImageAsset extends AssetBundle
{
    public $sourcePath = '@filemanager/assets/module.blocks/cropper';
    
    public $css = [
        //'cropper.css',
    ];
    
    public $js = [
		'cropper.js',
    ];
    
    public $depends = [
        'zozoh94\filemanager\assets\CropperAsset',
    ];
}
<?php
namespace ilusha2012\filemanager\assets;

use yii\web\AssetBundle;

class CropperAsset extends AssetBundle
{
    public $sourcePath = '@bower/cropper';
    
    public $css = [
        'dist/cropper.min.css',
    ];
    
    public $js = [
		'dist/cropper.min.js',
    ];
    
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
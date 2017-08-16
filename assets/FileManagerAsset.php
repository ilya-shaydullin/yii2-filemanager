<?php

namespace ilusha2012\filemanager\assets;

use yii\web\AssetBundle;

class FileManagerAsset extends AssetBundle
{
    public $sourcePath = '@filemanager/assets/module.blocks/file-manager';
    
    public $css = [
        'controls-item.css',
        'file-manager.css',
        'header-bar.css',
        'spin-icon.css',
    ];
    
    public $js = [
        'file-manager.js',
    ];
    
    public $depends = [
        'ilusha2012\filemanager\assets\FileGalleryAsset',
        'ilusha2012\filemanager\assets\DetailsFormAsset',
        'ilusha2012\filemanager\assets\CropImageAsset',
        'ilusha2012\filemanager\assets\FontAwesomeAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\web\JqueryAsset',
    ];
}

<?php

namespace zozoh94\filemanager\assets;

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
        'zozoh94\filemanager\assets\FileGalleryAsset',
        'zozoh94\filemanager\assets\DetailsFormAsset',
        'zozoh94\filemanager\assets\CropImageAsset',
        'zozoh94\filemanager\assets\FontAwesomeAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\web\JqueryAsset',
    ];
}

<?php
namespace ilusha2012\filemanager\assets;

use yii\web\AssetBundle;

class FileGalleryAsset extends AssetBundle
{
    public $sourcePath = '@filemanager/assets/module.blocks/file-gallery';
    
    public $css = [
        'file-gallery.css',
    ];
    
    public $js = [
		'file-gallery.js',
    ];
    
    public $depends = [
        'ilusha2012\filemanager\assets\GalleryPagerAsset',
        'ilusha2012\filemanager\assets\GallerySummaryAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
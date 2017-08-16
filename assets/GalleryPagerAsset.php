<?php
namespace ilusha2012\filemanager\assets;

use yii\web\AssetBundle;

class GalleryPagerAsset extends AssetBundle
{
    public $sourcePath = '@filemanager/assets/module.blocks/gallery-pager';
    
    public $js = [
		'gallery-pager.js',
    ];
    
    public $depends = [
        'ilusha2012\filemanager\assets\DomUrlAsset',
    ];
}
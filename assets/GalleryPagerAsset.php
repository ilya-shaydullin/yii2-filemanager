<?php
namespace zozoh94\filemanager\assets;

use yii\web\AssetBundle;

class GalleryPagerAsset extends AssetBundle
{
    public $sourcePath = '@filemanager/assets/module.blocks/gallery-pager';
    
    public $js = [
		'gallery-pager.js',
    ];
    
    public $depends = [
        'zozoh94\filemanager\assets\DomUrlAsset',
    ];
}
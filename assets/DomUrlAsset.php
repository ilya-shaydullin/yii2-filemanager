<?php
namespace ilusha2012\filemanager\assets;

use yii\web\AssetBundle;

class DomUrlAsset extends AssetBundle
{
    public $sourcePath = '@bower/domurl';
    
    public $js = [
        'url.min.js',
    ];
}

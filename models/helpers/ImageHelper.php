<?php
/**
 * Created by PhpStorm.
 * User: ilya
 * Date: 16.08.17
 * Time: 14:16
 */

namespace ilusha2012\filemanager\models\helpers;


use Imagine\Gd\Imagine;
use Imagine\Image\Box;
use Imagine\Image\Point;
use Yii;

class ImageHelper
{

    CONST WATERMARK_LOGO = __DIR__ . '/../../assets/module.blocks/images/logo-watermark.png';

    /**
     * Insert watermark at image with proportional resize.
     * @param $imagePath
     * @param $markPath
     * @return bool
     */
    public static function pasteWatermark($imagePath, $imagePathTo, $markPath = self::WATERMARK_LOGO)
    {

        if (!file_exists($imagePath)) {
            Yii::error('Image file not exist!' . $imagePath);
            return 0;
        }

        if (!file_exists($markPath)) {
            Yii::error('Mark file not exist!' . $markPath);
            return 0;
        }

        $imagine = new Imagine();

        $watermark = $imagine->open($markPath);
        $image = $imagine->open($imagePath);

        //Size of watermark
        $wSize = $watermark->getSize();
        $wWidth = $wSize->getWidth();
        $wHeight = $wSize->getHeight();

        //Size of image
        $size = $image->getSize();
        $width = $size->getWidth();
        $height = $size->getHeight();

        if (($width < $wWidth) || $height < $wHeight) {
            Yii::error('Image is very small' . $imagePath);
            return 0;
        }

        $percentage = ($width / 4) / $wWidth;
        $percentageMargin = ($width / 16) / $wWidth;

        $watermark->resize(new Box($wWidth * $percentage, $wHeight * $percentage));
        $x = $width - $wWidth * $percentage;
        $y = $height - $wHeight * $percentage;

        $bottomRight = new Point($x - ($percentageMargin * 100), $y - ($percentageMargin * 100));

        $image->paste($watermark, $bottomRight);
        $image->save($imagePathTo);

        return true;
    }

}
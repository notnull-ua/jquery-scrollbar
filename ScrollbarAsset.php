<?php

namespace yii\jquery\scrollbar;

use yii\web\AssetBundle;

class ScrollbarAsset extends AssetBundle
{

    public $sourcePath = '@bower/jquery.scrollbar';

    public $depends = ['yii\web\JqueryAsset'];

    public $js = ['jquery.scrollbar.min.js'];

    public $css = ['jquery.scrollbar.css'];
}

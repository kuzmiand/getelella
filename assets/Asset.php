<?php

namespace yiister\gentelella\assets;

class Asset extends \yii\web\AssetBundle
{
    public $depends = [
        'yiister\gentelella\assets\ThemeAsset',
        'yiister\gentelella\assets\ExtensionAsset',
    ];
}

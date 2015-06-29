<?php

namespace roman444uk\jsAjaxFileUploader;

class JsAjaxFileUploaderAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/roman444uk/yii2-js-ajax-file-uploader/assets';
    
    public $css = [
        'css/JQuery.JSAjaxFileUploader.css'
    ];
    
    public $js = [
        'js/JQuery.JSAjaxFileUploader.js'
    ];
    
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
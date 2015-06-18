<?php

namespace roman444uk\jsAjaxFileUploader;

class JsAjaxFileUploaderAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@roman444uk/jsAjaxFileUploader/assets';
    
    public $css = [
        'css/JQuery.JSAjaxFileUploader.css'
    ];
    
    public $js = [
        'js/JQuery.JSAjaxFileUploader.js'
    ];
    
    public $depends = [
        'yii\web\JqueryAsset',
    ];
    
    public function init()
    {
        $this->sourcePath = __DIR__ . '/assets';
        
        parent::init();
    }
}
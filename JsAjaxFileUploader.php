<?php

namespace roman444uk\jsAjaxFileUploader;

use yii\helpers\Json;

class JsAjaxFileUploader extends \yii\base\Widget
{
    /**
     * @var array
     */
    public $options = [];
    
    /**
     * @var array
     */
    public $clientOptions = [];
    
    /**
     * @var array
     */
    public $clientEvents = [];
    
    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
    }
    
    /**
     * @inheritdoc
     */
    public function run()
    {
        $tag = isset($this->clientOptions['tag']) ? $this->clientOptions['tag'] : 'div';
        $id = isset($this->clientOptions['id']) ? $this->clientOptions['id'] : $this->id;
        echo \yii\helpers\Html::tag($tag, '', [
            'id' => $id
        ]);
        
        //$this->registerClientScript();
    }
    
    /**
     * @inheritdoc
     */
    public function registerClientScript()
    {
        $js = [];
        $view = $this->getView();

        JsAjaxFileUploaderAsset::register($view);

        $options = Json::encode($this->clientOptions);
        $id = isset($this->options['id']) ? $this->options['id'] : $this->id;
        
        $js[] = "jQuery('#$id').JSAjaxFileUploader($options);";
        if (!empty($this->clientEvents)) {
            foreach ($this->clientEvents as $event => $handler) {
                $js[] = "jQuery('#$id').on('$event', $handler);";
            }
        }
        
        $view->registerJs(implode("\n", $js));
    }
}
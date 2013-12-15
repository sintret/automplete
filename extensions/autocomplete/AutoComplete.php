<?php

/**
 * Autocomplete widget class
 *
 * @see https://github.com/sintret/autocomplete
 *
 * @author Andifitria <sintret@gmail.com>
 * @copyright Copyright &copy; sintret.com 2013-
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @package autocomplete.Automplete
 * 
 * Usage $array = array();
  $array[] = array('id'=>1,'name'=>'Bali');
  $array[] = array('id'=>2,'name'=>'Singapore');

  $this->widget('application.extensions.autocomplete.AutoComplete', array(
  'theme' => 'facebook',
  'name' => 'searchqueryid',
  //'prePopulate' => CJavaScript::encode($array),
  'sourceUrl' => Yii::app()->createUrl('//ajax/suggestSearch'),
  'hintText' => 'Try Typing places',
  //'htmlOptions' => array('class' => 'form-control', 'placeholder' => 'Try Typing Places'),
  //'widthInput' => '50px',
  //'widthToken' => '250px',
  ));
 * @link http://loopj.com/jquery-tokeninput/
 * @link tourexplora.com
 */
class AutoComplete extends CInputWidget
{

    public $htmlOptions;
    public $name;
    public $value;
    public $sourceUrl;
    public $theme;
    public $tokenLimit;
    public $searchDelay;
    public $minDelay;
    public $minChars;
    public $prePopulate;
    public $tokenDelimiter;
    public $hintText;
    public $widthInput;
    public $widthToken;

    function run()
    {
        if ($this->hasModel()) {
            echo CHtml::activeTextField($this->model, $this->htmlOptions);
        } else {
            echo CHtml::textField($this->name, $this->value, $this->htmlOptions);
        }
    }

    /**
     * Registers required client script for bootstrap typeahead. It is not used through bootstrap->registerPlugin
     * in order to attach events if any
     */
    public function init()
    {
        /* publish assets dir */
        $assetsPath = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'assets';
        $assetsUrl = Yii::app()->assetManager->publish($assetsPath, false, -1, YII_DEBUG);

        /* @var $cs CClientScript */
        $cs = Yii::app()->getClientScript();
        $cs->registerCssFile($assetsUrl . '/css/token-input-facebook.css');
        $cs->registerCoreScript('jquery');
        $cs->registerScriptFile($assetsUrl . '/js/jquery.tokeninput.js', CClientScript::POS_END);

        if ($this->widthInput)
            $cs->registerCss('autocompleteWidthInput', 'ul.token-input-list-facebook {width:' . $this->widthInput . ';}');
        if ($this->widthToken)
            $cs->registerCss('autocompleteWidthToken', 'div.token-input-dropdown-facebook {width:' . $this->widthToken . ';}');


        $script = '$(document).ready(function(){';
        $script .= '$("#' . $this->name . '").tokenInput("' . $this->sourceUrl . '",{';
        if ($this->theme)
            $script .= 'theme:"' . $this->theme . '",';
        if ($this->tokenLimit)
            $script .= 'tokenLimit:"' . $this->tokenLimit . '",';
        if ($this->searchDelay)
            $script .= 'searchDelay:"' . $this->searchDelay . '",';
        if ($this->minChars)
            $script .= 'minChars:"' . $this->minChars . '",';
        if ($this->prePopulate)
            $script .= 'prePopulate:' . $this->prePopulate . ',';
        if ($this->hintText)
            $script .= 'hintText:"' . $this->hintText . '",';
        $script .='});});';

        $cs->registerScript(uniqid(), $script, CClientScript::POS_END);
    }

}

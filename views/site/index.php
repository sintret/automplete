<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Congratulations! You have successfully created your Yii application.</p>

<?php
// Usage Sample
/*$array[] = array('id' => 1, 'name' => 'Bali');
$array[] = array('id' => 2, 'name' => 'Singapore');
*/

$this->widget('application.extensions.autocomplete.AutoComplete', array(
    'theme' => 'facebook',
    'name' => 'searchqueryid',
    //'prePopulate' => CJavaScript::encode($array),
    'sourceUrl' => Yii::app()->createUrl('ajax/city'),
    'hintText' => 'Try Typing places',
        //'htmlOptions' => array('class' => 'form-control', 'placeholder' => 'Try Typing Places'),
        //'widthInput' => '50px',
        //'widthToken' => '250px',
));
?>
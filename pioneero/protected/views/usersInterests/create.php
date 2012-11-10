<?php
/* @var $this UsersInterestsController */
/* @var $model UsersInterests */

$this->breadcrumbs=array(
	'Users Interests'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UsersInterests', 'url'=>array('index')),
	array('label'=>'Manage UsersInterests', 'url'=>array('admin')),
);
?>

<h1>Create UsersInterests</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
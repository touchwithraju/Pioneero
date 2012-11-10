<?php
/* @var $this UsersInterestsController */
/* @var $model UsersInterests */

$this->breadcrumbs=array(
	'Users Interests'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List UsersInterests', 'url'=>array('index')),
	array('label'=>'Create UsersInterests', 'url'=>array('create')),
	array('label'=>'View UsersInterests', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage UsersInterests', 'url'=>array('admin')),
);
?>

<h1>Update UsersInterests <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
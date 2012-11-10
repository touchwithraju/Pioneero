<?php
/* @var $this UsersInterestsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Users Interests',
);

$this->menu=array(
	array('label'=>'Create UsersInterests', 'url'=>array('create')),
	array('label'=>'Manage UsersInterests', 'url'=>array('admin')),
);
?>

<h1>Users Interests</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

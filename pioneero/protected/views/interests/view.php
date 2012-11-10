<?php
/* @var $this InterestsController */
/* @var $model Interests */

$this->breadcrumbs=array(
	'Interests'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Interests', 'url'=>array('index')),
	array('label'=>'Create Interests', 'url'=>array('create')),
	array('label'=>'Update Interests', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Interests', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Interests', 'url'=>array('admin')),
);
?>

<h1>View Interests #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'ip_address',
		'status',
		'date_added',
		'last_modified',
	),
)); ?>

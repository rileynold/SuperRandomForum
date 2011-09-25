<?php
$this->breadcrumbs=array(
	'Forums'=>array('index'),
	$model->ForumID,
);

$this->menu=array(
	array('label'=>'List Forum', 'url'=>array('index')),
	array('label'=>'Create Forum', 'url'=>array('create')),
	array('label'=>'Update Forum', 'url'=>array('update', 'id'=>$model->ForumID)),
	array('label'=>'Delete Forum', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ForumID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Forum', 'url'=>array('admin')),
);
?>

<h1>View Forum #<?php echo $model->ForumID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ForumID',
	),
)); ?>

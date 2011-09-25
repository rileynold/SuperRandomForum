<?php
$this->breadcrumbs=array(
	'Private Messages'=>array('index'),
	$model->MessageID,
);

$this->menu=array(
	array('label'=>'List PrivateMessage', 'url'=>array('index')),
	array('label'=>'Create PrivateMessage', 'url'=>array('create')),
	array('label'=>'Update PrivateMessage', 'url'=>array('update', 'id'=>$model->MessageID)),
	array('label'=>'Delete PrivateMessage', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->MessageID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PrivateMessage', 'url'=>array('admin')),
);
?>

<h1>View PrivateMessage #<?php echo $model->MessageID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'MessageID',
		'SenderID',
		'ReceiverID',
		'Subject',
		'Content',
		'DateSent',
	),
)); ?>

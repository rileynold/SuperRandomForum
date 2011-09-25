<?php
$this->breadcrumbs=array(
	'User Groups'=>array('index'),
	$model->GroupID=>array('view','id'=>$model->GroupID),
	'Update',
);

$this->menu=array(
	array('label'=>'List UserGroup', 'url'=>array('index')),
	array('label'=>'Create UserGroup', 'url'=>array('create')),
	array('label'=>'View UserGroup', 'url'=>array('view', 'id'=>$model->GroupID)),
	array('label'=>'Manage UserGroup', 'url'=>array('admin')),
);
?>

<h1>Update UserGroup <?php echo $model->GroupID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
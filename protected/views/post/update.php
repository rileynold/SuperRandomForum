<?php
$this->breadcrumbs=array(
	'Posts'=>array('index'),
	$model->PostID=>array('view','id'=>$model->PostID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Post', 'url'=>array('index')),
	array('label'=>'Create Post', 'url'=>array('create')),
	array('label'=>'View Post', 'url'=>array('view', 'id'=>$model->PostID)),
	array('label'=>'Manage Post', 'url'=>array('admin')),
);
?>

<h1>Update Post <?php echo $model->PostID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('PostID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->PostID), array('view', 'id'=>$data->PostID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Subject')); ?>:</b>
	<?php echo CHtml::encode($data->Subject); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Content')); ?>:</b>
	<?php echo CHtml::encode($data->Content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DateCreated')); ?>:</b>
	<?php echo CHtml::encode($data->DateCreated); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CreatorID')); ?>:</b>
	<?php echo CHtml::encode($data->CreatorID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ForumID')); ?>:</b>
	<?php echo CHtml::encode($data->ForumID); ?>
	<br />


</div>
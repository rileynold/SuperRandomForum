<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('MessageID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->MessageID), array('view', 'id'=>$data->MessageID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SenderID')); ?>:</b>
	<?php echo CHtml::encode($data->SenderID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ReceiverID')); ?>:</b>
	<?php echo CHtml::encode($data->ReceiverID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Subject')); ?>:</b>
	<?php echo CHtml::encode($data->Subject); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Content')); ?>:</b>
	<?php echo CHtml::encode($data->Content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DateSent')); ?>:</b>
	<?php echo CHtml::encode($data->DateSent); ?>
	<br />


</div>
<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'MessageID'); ?>
		<?php echo $form->textField($model,'MessageID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SenderID'); ?>
		<?php echo $form->textField($model,'SenderID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ReceiverID'); ?>
		<?php echo $form->textField($model,'ReceiverID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Subject'); ?>
		<?php echo $form->textField($model,'Subject',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Content'); ?>
		<?php echo $form->textField($model,'Content',array('size'=>60,'maxlength'=>2000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DateSent'); ?>
		<?php echo $form->textField($model,'DateSent'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
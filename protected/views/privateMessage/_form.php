<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'private-message-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'SenderID'); ?>
		<?php echo $form->textField($model,'SenderID'); ?>
		<?php echo $form->error($model,'SenderID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ReceiverID'); ?>
		<?php echo $form->textField($model,'ReceiverID'); ?>
		<?php echo $form->error($model,'ReceiverID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Subject'); ?>
		<?php echo $form->textField($model,'Subject',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'Subject'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Content'); ?>
		<?php echo $form->textField($model,'Content',array('size'=>60,'maxlength'=>2000)); ?>
		<?php echo $form->error($model,'Content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DateSent'); ?>
		<?php echo $form->textField($model,'DateSent'); ?>
		<?php echo $form->error($model,'DateSent'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
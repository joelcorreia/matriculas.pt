<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'escolas-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'escola_nome'); ?>
		<?php echo $form->textField($model,'escola_nome',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'escola_nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'escola_email'); ?>
		<?php echo $form->textField($model,'escola_email',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'escola_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'escola_url'); ?>
		<?php echo $form->textField($model,'escola_url',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'escola_url'); ?>
	</div>
	<div class="row">
		<?php
			echo $form->labelEx($model,'cabecalho');
			$this->widget('ext.editMe.ExtEditMe', array(
			    'model'=>$model,
			    'attribute'=>'cabecalho',
			    'htmlOptions'=>array('option'=>'value'),
			));
 		?>
	</div>

	<div class="row">
		<?php
			echo $form->labelEx($model,'coluna1');
			$this->widget('ext.editMe.ExtEditMe', array(
			    'model'=>$model,
			    'attribute'=>'coluna1',
			    'htmlOptions'=>array('option'=>'value'),
			));
 		?>
	</div>

	<div class="row">
		<?php
			echo $form->labelEx($model,'coluna2');
			$this->widget('ext.editMe.ExtEditMe', array(
			    'model'=>$model,
			    'attribute'=>'coluna2',
			    'htmlOptions'=>array('option'=>'value'),
			));
 		?>
	</div>

	<div class="row">
		<?php
			echo $form->labelEx($model,'coluna3');
			$this->widget('ext.editMe.ExtEditMe', array(
			    'model'=>$model,
			    'attribute'=>'coluna3',
			    'htmlOptions'=>array('option'=>'value'),
			));
 		?>
	</div>

	<div class="row">
		<?php
			echo $form->labelEx($model,'rodape');
			$this->widget('ext.editMe.ExtEditMe', array(
			    'model'=>$model,
			    'attribute'=>'rodape',
			    'htmlOptions'=>array('option'=>'value'),
			));
 		?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'logotipo'); ?>
		<?php echo $form->textField($model,'logotipo',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'logotipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email_remetente'); ?>
		<?php echo $form->textField($model,'email_remetente',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'email_remetente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email_destinatario'); ?>
		<?php echo $form->textField($model,'email_destinatario',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'email_destinatario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'url_matriculas'); ?>
		<?php echo $form->textField($model,'url_matriculas',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'url_matriculas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'observacoes'); ?>
		<?php echo $form->textArea($model,'observacoes',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'observacoes'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
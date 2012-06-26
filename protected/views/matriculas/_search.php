<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'nmatricula'); ?>
		<?php echo $form->textField($model,'nmatricula'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ano_a_se_inscreve'); ?>
		<?php echo $form->textField($model,'ano_a_se_inscreve',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lista_cursos'); ?>
		<?php echo $form->textField($model,'lista_cursos',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nomecompleto'); ?>
		<?php echo $form->textField($model,'nomecompleto',array('size'=>60,'maxlength'=>200)); ?>
	</div>


	<div class="row">
		<?php echo $form->label($model,'bi'); ?>
		<?php echo $form->textField($model,'bi',array('size'=>60,'maxlength'=>200)); ?>
	</div>


	<div class="row">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'n_cartao_estudante'); ?>
		<?php echo $form->textField($model,'n_cartao_estudante',array('size'=>60,'maxlength'=>200)); ?>
	</div>


	<div class="row">
		<?php echo $form->label($model,'observacoes_internas'); ?>
		<?php echo $form->textField($model,'observacoes_internas',array('size'=>60,'maxlength'=>2000)); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Procurar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
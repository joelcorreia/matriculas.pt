<?php

$cs = Yii::app()->getClientScript();
$cs->registerCoreScript('jquery');
$cs->registerScriptFile(Yii::app()->request->baseUrl.'/js/jquery.jstepper.min.js');
$cs->registerScriptFile(Yii::app()->request->baseUrl.'/js/jquery.price_format.1.5.js');
$cs->registerScriptFile(Yii::app()->request->baseUrl.'/js/adm_anos.js');

?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'anos-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'designacao'); ?>
		<?php echo $form->textField($model,'designacao',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'designacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_disponivel_de'); ?>
		<?php
				 Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
				    $this->widget('CJuiDateTimePicker',array(
				        'model'=>$model, //Model object
				        'attribute'=>'data_disponivel_de', //attribute name
				        'mode'=>'datetime', //use "time","date" or "datetime" (default)
				        'language'=>'',
				        'options'=>array(
				            'regional'=>'pt_pt',
				            'timeFormat'=>'hh:mm:ss',
				            'minDate'=>'new Date()',
				            'dateFormat'=>'yy-mm-dd'
				        ) // jquery plugin options
				    ));
		?>


		<?php echo $form->error($model,'data_disponivel_de'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_disponivel_ate'); ?>
		<?php
					Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
				    $this->widget('CJuiDateTimePicker',array(
				        'model'=>$model, //Model object
				        'attribute'=>'data_disponivel_ate', //attribute name
				        'mode'=>'datetime', //use "time","date" or "datetime" (default)
				        'language'=>'',
				        'options'=>array(
				            'regional'=>'pt_pt',
				            'timeFormat'=>'hh:mm:ss',
				            'minDate'=>'new Date()',
				            'dateFormat'=>'yy-mm-dd'
				        ) // jquery plugin options
				    ));
		?>
		<?php echo $form->error($model,'data_disponivel_ate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valor_a_pagar'); ?>
		<?php echo $form->textField($model,'valor_a_pagar',array('size'=>8,'maxlength'=>8)); ?>€
		<?php echo $form->error($model,'valor_a_pagar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'activo'); ?>
		<?php echo $form->checkBox($model,'activo',array('checked' => $model->activo,'value'=>'1', 'uncheckValue'=>'0')); ?>
		<?php echo $form->error($model,'activo'); ?>
	</div>
	<fieldset>
	<legend>Opções</legend>



	<div class="row">
		<?php echo $form->labelEx($model,'opcao_1_titulo'); ?>
		<?php echo $form->textField($model,'opcao_1_titulo',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'opcao_1_titulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'opcao_1_valor_a_pagar'); ?>
		<?php echo $form->textField($model,'opcao_1_valor_a_pagar',array('size'=>8,'maxlength'=>8)); ?>€
		<?php echo $form->error($model,'opcao_1_valor_a_pagar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'opcao_1_activo'); ?>
		<?php echo $form->checkBox($model,'opcao_1_activo',array('checked' => $model->opcao_1_activo,'value'=>'1', 'uncheckValue'=>'0')); ?>
		<?php echo $form->error($model,'opcao_1_activo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'opcao_2_titulo'); ?>
		<?php echo $form->textField($model,'opcao_2_titulo',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'opcao_2_titulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'opcao_2_valor_a_pagar'); ?>
		<?php echo $form->textField($model,'opcao_2_valor_a_pagar',array('size'=>8,'maxlength'=>8)); ?>€
		<?php echo $form->error($model,'opcao_2_valor_a_pagar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'opcao_2_activo'); ?>
		<?php echo $form->checkBox($model,'opcao_2_activo',array('checked' => $model->opcao_2_activo,'value'=>'1', 'uncheckValue'=>'0')); ?>
		<?php echo $form->error($model,'opcao_2_activo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'opcao_3_titulo'); ?>
		<?php echo $form->textField($model,'opcao_3_titulo',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'opcao_3_titulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'opcao_3_valor_a_pagar'); ?>
		<?php echo $form->textField($model,'opcao_3_valor_a_pagar',array('size'=>8,'maxlength'=>8)); ?>€
		<?php echo $form->error($model,'opcao_3_valor_a_pagar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'opcao_3_activo'); ?>
		<?php echo $form->checkBox($model,'opcao_3_activo',array('checked' => $model->opcao_3_activo,'value'=>'1', 'uncheckValue'=>'0')); ?>
		<?php echo $form->error($model,'opcao_3_activo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_tree'); ?>
		<?php echo $form->dropDownList($model,'id_tree',$model->get_id_tree_Options(),array('options'=>array(($model->id_tree)=>array('selected'=>'selected')))); ?>
		<?php echo $form->error($model,'id_tree'); ?>
	</div>

	</fieldset>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
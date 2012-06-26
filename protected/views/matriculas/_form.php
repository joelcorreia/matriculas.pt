<?php

$cs = Yii::app()->getClientScript();
$cs->registerCoreScript('jquery');
$cs->registerScriptFile(Yii::app()->request->baseUrl.'/js/jquery.jstepper.min.js');
$cs->registerScriptFile(Yii::app()->request->baseUrl.'/js/jquery.price_format.1.5.js');
$cs->registerScriptFile(Yii::app()->request->baseUrl.'/js/adm_matriculas.js');
?>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'matriculas-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ano_a_se_inscreve'); ?>
		<?php echo $form->textField($model,'ano_a_se_inscreve',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'ano_a_se_inscreve'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lista_cursos'); ?>
		<?php echo $form->textField($model,'lista_cursos',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'lista_cursos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lista_opcao_b'); ?>
		<?php echo $form->textField($model,'lista_opcao_b',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'lista_opcao_b'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lista_opcao_c'); ?>
		<?php echo $form->textField($model,'lista_opcao_c',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'lista_opcao_c'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'moral'); ?>
		<?php echo $form->textField($model,'moral',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'moral'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'saida'); ?>
		<?php echo $form->textField($model,'saida',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'saida'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'erenovacaomatricula'); ?>
		<?php echo $form->textField($model,'erenovacaomatricula',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'erenovacaomatricula'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estabelecimento'); ?>
		<?php echo $form->textField($model,'estabelecimento',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'estabelecimento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ano'); ?>
		<?php echo $form->textField($model,'ano',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'ano'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'anolectivode'); ?>
		<?php echo $form->textField($model,'anolectivode',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'anolectivode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'escola'); ?>
		<?php echo $form->textField($model,'escola',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'escola'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'campos_extra1'); ?>
		<?php echo $form->textField($model,'campos_extra1',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'campos_extra1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'campos_extra2'); ?>
		<?php echo $form->textField($model,'campos_extra2',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'campos_extra2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'campos_extra3'); ?>
		<?php echo $form->textField($model,'campos_extra3',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'campos_extra3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'campos_extra4'); ?>
		<?php echo $form->textField($model,'campos_extra4',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'campos_extra4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'transporte'); ?>
		<?php echo $form->textField($model,'transporte',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'transporte'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'embarque'); ?>
		<?php echo $form->textField($model,'embarque',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'embarque'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nomecompleto'); ?>
		<?php echo $form->textField($model,'nomecompleto',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'nomecompleto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nacionalidade'); ?>
		<?php echo $form->textField($model,'nacionalidade',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'nacionalidade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'naturaldafreguesia'); ?>
		<?php echo $form->textField($model,'naturaldafreguesia',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'naturaldafreguesia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'concelho'); ?>
		<?php echo $form->textField($model,'concelho',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'concelho'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'distrito'); ?>
		<?php echo $form->textField($model,'distrito',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'distrito'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'datanasc'); ?>
		<?php echo $form->textField($model,'datanasc',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'datanasc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bi'); ?>
		<?php echo $form->textField($model,'bi',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'bi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'segsocial'); ?>
		<?php echo $form->textField($model,'segsocial',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'segsocial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'residente'); ?>
		<?php echo $form->textField($model,'residente',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'residente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'localidade'); ?>
		<?php echo $form->textField($model,'localidade',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'localidade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'codpostal'); ?>
		<?php echo $form->textField($model,'codpostal',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'codpostal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefone'); ?>
		<?php echo $form->textField($model,'telefone',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'telefone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'filhoA'); ?>
		<?php echo $form->textField($model,'filhoA',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'filhoA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'profissaoA'); ?>
		<?php echo $form->textField($model,'profissaoA',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'profissaoA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'filhoB'); ?>
		<?php echo $form->textField($model,'filhoB',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'filhoB'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'profissaoB'); ?>
		<?php echo $form->textField($model,'profissaoB',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'profissaoB'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nomecompletoee'); ?>
		<?php echo $form->textField($model,'nomecompletoee',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'nomecompletoee'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'profissaoee'); ?>
		<?php echo $form->textField($model,'profissaoee',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'profissaoee'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'residenteee'); ?>
		<?php echo $form->textField($model,'residenteee',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'residenteee'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'localidadeee'); ?>
		<?php echo $form->textField($model,'localidadeee',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'localidadeee'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'codpostalee'); ?>
		<?php echo $form->textField($model,'codpostalee',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'codpostalee'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefoneresidenciaee'); ?>
		<?php echo $form->textField($model,'telefoneresidenciaee',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'telefoneresidenciaee'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefonetrabalhoee'); ?>
		<?php echo $form->textField($model,'telefonetrabalhoee',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'telefonetrabalhoee'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'parentescoee'); ?>
		<?php echo $form->textField($model,'parentescoee',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'parentescoee'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ultimoanolectivo'); ?>
		<?php echo $form->textField($model,'ultimoanolectivo',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'ultimoanolectivo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ultimoanoescolaridade'); ?>
		<?php echo $form->textField($model,'ultimoanoescolaridade',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'ultimoanoescolaridade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ultimoanoturma'); ?>
		<?php echo $form->textField($model,'ultimoanoturma',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'ultimoanoturma'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ultimoanocurso'); ?>
		<?php echo $form->textField($model,'ultimoanocurso',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'ultimoanocurso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ultimoanoescola'); ?>
		<?php echo $form->textField($model,'ultimoanoescola',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'ultimoanoescola'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apoioespecial'); ?>
		<?php echo $form->textField($model,'apoioespecial',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'apoioespecial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'precisaapoioespecial'); ?>
		<?php echo $form->textField($model,'precisaapoioespecial',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'precisaapoioespecial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estrangeira'); ?>
		<?php echo $form->textField($model,'estrangeira',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'estrangeira'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estrangeiraa'); ?>
		<?php echo $form->textField($model,'estrangeiraa',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'estrangeiraa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estrangeiraaa'); ?>
		<?php echo $form->textField($model,'estrangeiraaa',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'estrangeiraaa'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'disciplinas_melhoria'); ?>
		<?php echo $form->textField($model,'disciplinas_melhoria',array('size'=>60,'maxlength'=>2000)); ?>
		<?php echo $form->error($model,'disciplinas_melhoria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'disciplinas_em_atraso'); ?>
		<?php echo $form->textField($model,'disciplinas_em_atraso',array('size'=>60,'maxlength'=>2000)); ?>
		<?php echo $form->error($model,'disciplinas_em_atraso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'activa'); ?>
		<?php echo $form->checkBox($model,'activa',array('checked' => $model->activa,'value'=>'1', 'uncheckValue'=>'0')); ?>
		<?php echo $form->error($model,'activa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'paga'); ?>
		<?php echo $form->checkBox($model,'paga',array('checked' => $model->paga,'value'=>'1', 'uncheckValue'=>'0')); ?>
		<?php echo $form->error($model,'paga'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'anulada'); ?>
		<?php echo $form->checkBox($model,'anulada',array('checked' => $model->anulada,'value'=>'1', 'uncheckValue'=>'0')); ?>
		<?php echo $form->error($model,'anulada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'processada'); ?>
		<?php echo $form->checkBox($model,'processada',array('checked' => $model->processada,'value'=>'1', 'uncheckValue'=>'0')); ?>
		<?php echo $form->error($model,'processada'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'data_criacao'); ?>
		<?php
				 Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
				    $this->widget('CJuiDateTimePicker',array(
				        'model'=>$model, //Model object
				        'attribute'=>'data_criacao', //attribute name
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
		<?php echo $form->error($model,'data_criacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'observacoes'); ?>
		<?php echo $form->textField($model,'observacoes',array('size'=>60,'maxlength'=>2000)); ?>
		<?php echo $form->error($model,'observacoes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'identificacao_fiscal'); ?>
		<?php echo $form->textField($model,'identificacao_fiscal',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'identificacao_fiscal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'utente_saude'); ?>
		<?php echo $form->textField($model,'utente_saude',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'utente_saude'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'abono'); ?>
		<?php echo $form->textField($model,'abono',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'abono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vacinas'); ?>
		<?php echo $form->textField($model,'vacinas',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'vacinas'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'n_cartao_estudante'); ?>
		<?php echo $form->textField($model,'n_cartao_estudante',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'n_cartao_estudante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'observacoes_internas'); ?>
		<?php echo $form->textField($model,'observacoes_internas',array('size'=>60,'maxlength'=>2000)); ?>
		<?php echo $form->error($model,'observacoes_internas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'activa'); ?>
		<?php echo $form->textField($model,'activa',array('size'=>60,'maxlength'=>2000)); ?>
		<?php echo $form->error($model,'activa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'paga'); ?>
		<?php echo $form->textField($model,'paga',array('size'=>60,'maxlength'=>2000)); ?>
		<?php echo $form->error($model,'paga'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'anulada'); ?>
		<?php echo $form->textField($model,'anulada',array('size'=>60,'maxlength'=>2000)); ?>
		<?php echo $form->error($model,'anulada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'processada'); ?>
		<?php echo $form->textField($model,'processada',array('size'=>60,'maxlength'=>2000)); ?>
		<?php echo $form->error($model,'processada'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'data_criacao'); ?>
		<?php echo $form->textField($model,'data_criacao',array('size'=>60,'maxlength'=>2000)); ?>
		<?php echo $form->error($model,'data_criacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gerarreferenciamultibanco'); ?>
		<?php echo $form->textField($model,'gerarreferenciamultibanco',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'gerarreferenciamultibanco'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
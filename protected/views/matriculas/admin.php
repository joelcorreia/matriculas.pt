<?php

$cs = Yii::app()->getClientScript();
$cs->registerCoreScript('jquery');
$cs->registerCssFile(Yii::app()->clientScript->getCoreScriptUrl().'/jui/css/ui-lightness/jquery-ui.css');

$this->breadcrumbs=array(
	'Matriculas'=>array('index'),
	'Gerir',
);

$this->menu=array(
	array('label'=>'Listar Matriculas', 'url'=>array('index')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('matriculas-grid', {
		data: $(this).serialize()
	});
	return false;
});
");

$this->mensagem_info = $mensagem_info;
$this->mensagem_alerta = $mensagem_alerta;

?>

<h1>Gerir Matriculas</h1>

<p>
Pode usar operadores de comparação (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) no inicio de cada pesquisa.
</p>

<?php echo CHtml::link('Pesquisa avançada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'matriculas-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'nmatricula',
		'nomecompleto',
		'email',
		'bi',
		'ano_a_se_inscreve',
		'lista_cursos',
 		array(
 			'name'=>'processada',
            'header'=>'Processada',
            'type'=>'raw',
 			'value' => 'CHtml::link(CHtml::image(Yii::app()->request->baseUrl."/images/processada" . $data->processada . ".png", ($data->processada == 1 ? "Processada": "Por Processar")), array("matriculas/processada", "id"=>$data->nmatricula))',
 			'filter'=>Matriculas::get_processada_Options(),
        ),
 		array(
 			'name'=>'paga',
            'header'=>'Paga',
            'type'=>'raw',
 			'value' => 'CHtml::link(CHtml::image(Yii::app()->request->baseUrl."/images/paga" . $data->paga . ".png", ($data->paga == 1 ? "Paga": "Por pagar")), array("matriculas/paga", "id"=>$data->nmatricula))',
 			'filter'=> Matriculas::get_paga_Options(),
        ),
 		array(
 			'name'=>'anulada',
            'header'=>'Anulada',
            'type'=>'raw',
 			'value' => 'CHtml::link(CHtml::image(Yii::app()->request->baseUrl."/images/anulada" . $data->anulada . ".png", ($data->anulada == 1 ? "Anulada": "Activa")), array("matriculas/anulada", "id"=>$data->nmatricula))',
 			'filter'=>Matriculas::get_anulada_Options(),
        ),
 		array(
            'header'=>'Imprimir',
            'type'=>'raw',
 			'value' => 'CHtml::link(CHtml::image(Yii::app()->request->baseUrl."/images/imprimir.png"),array("matriculas/view", "id"=>$data->nmatricula),array("target"=>"_blank"))',
		),
 		array(
            'header'=>'Enviar email',
            'type'=>'raw',
 			'value' => 'CHtml::link(CHtml::image(Yii::app()->request->baseUrl."/images/email.png"),array("matriculas/email", "id"=>$data->nmatricula),array("target"=>"_blank"))',
		),
		array
		(
			'header'=>'Editar',
		    'class'=>'CButtonColumn',
		    'template'=>'{update}',
		),
	),
)); ?>

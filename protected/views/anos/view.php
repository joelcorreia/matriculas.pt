<?php
$this->breadcrumbs=array(
	'Anos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Anos', 'url'=>array('index')),
	array('label'=>'Update Anos', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Gerir Anos', 'url'=>array('admin')),
);
?>

<h1>View Anos #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'designacao',
		'data_disponivel_de',
		'data_disponivel_ate',
		'valor_a_pagar',
		'activo',
		'opcao_1_titulo',
		'opcao_1_valor_a_pagar',
		'opcao_1_activo',
		'opcao_2_titulo',
		'opcao_2_valor_a_pagar',
		'opcao_2_activo',
		'opcao_3_titulo',
		'opcao_3_valor_a_pagar',
		'opcao_3_activo',
		'id_tree',
	),
)); ?>

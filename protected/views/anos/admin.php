<?php
$this->breadcrumbs=array(
	'Anos'=>array('index'),
	'Gerir',
);

$this->menu=array(
	array('label'=>'Lista de anos', 'url'=>array('index')),
);


?>

<h1>Gerir Anos</h1>



<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'anos-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'id',
		'designacao',
		'data_disponivel_de',
		'data_disponivel_ate',
		'valor_a_pagar',
 		array(
            'header'=>'Activo',
            'type'=>'raw',
 			'value' => 'CHtml::link(CHtml::image(Yii::app()->request->baseUrl."/images/activa" . $data->activo . ".png", ($data->activo == 1 ? "Activo": "Desactivo")), array("anos/view", "id"=>$data->id))',

        ),
		array
		(
			'header'=>'Ver',
		    'class'=>'CButtonColumn',
		    'template'=>'{view}',
		),
		array
		(
			'header'=>'Editar',
		    'class'=>'CButtonColumn',
		    'template'=>'{update}',
		),
	),
)); ?>

<?php
$this->breadcrumbs=array(
	'Matriculas'=>array('index'),
	$model->nmatricula=>array('view','id'=>$model->nmatricula),
	'Editar',
);

$this->menu=array(
	array('label'=>'Listar Matriculas', 'url'=>array('index')),
	array('label'=>'Ver Matriculas', 'url'=>array('view', 'id'=>$model->nmatricula)),
	array('label'=>'Gerir Matriculas', 'url'=>array('admin')),
);
?>

<h1>Editar Matricula <?php echo $model->nmatricula; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
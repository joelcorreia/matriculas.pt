<?php
$this->breadcrumbs=array(
	'Anos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Listar Anos', 'url'=>array('index')),
	array('label'=>'Ver Anos', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gerir Anos', 'url'=>array('admin')),
);
?>

<h1>Update Anos <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
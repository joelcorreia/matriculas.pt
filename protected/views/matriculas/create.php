<?php
$this->breadcrumbs=array(
	'Matriculas'=>array('index'),
	'Criar',
);

$this->menu=array(
	array('label'=>'Listar Matriculas', 'url'=>array('index')),
	array('label'=>'Gerir Matriculas', 'url'=>array('admin')),
);
?>

<h1>Criar Matriculas</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
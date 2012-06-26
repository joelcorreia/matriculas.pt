<?php
$this->breadcrumbs=array(
	'Matriculas',
);

$this->menu=array(
	array('label'=>'Criar Matriculas', 'url'=>array('create')),
	array('label'=>'Gerir Matriculas', 'url'=>array('admin')),
);
?>

<h1>Matriculas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

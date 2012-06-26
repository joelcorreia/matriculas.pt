<?php
$this->breadcrumbs=array(
	'Anos',
);

$this->menu=array(
	array('label'=>'Gerir Anos', 'url'=>array('admin')),
);
?>

<h1>Anoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

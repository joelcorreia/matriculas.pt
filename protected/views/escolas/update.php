<?php

$this->menu=array(
	array('label'=>'Actualizar Info Escola', 'url'=>array('update', 'id'=>$model->id_escola)),
);




?>

<h1>Actualizar Informação da Escola</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
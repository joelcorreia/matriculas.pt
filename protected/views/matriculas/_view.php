<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nmatricula')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nmatricula), array('view', 'id'=>$data->nmatricula)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ano_a_se_inscreve')); ?>:</b>
	<?php echo CHtml::encode($data->ano_a_se_inscreve); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nomecompleto')); ?>:</b>
	<?php echo CHtml::encode($data->nomecompleto); ?>
	<br />


</div>
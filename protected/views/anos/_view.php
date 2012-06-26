<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('designacao')); ?>:</b>
	<?php echo CHtml::encode($data->designacao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_disponivel_de')); ?>:</b>
	<?php echo CHtml::encode($data->data_disponivel_de); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_disponivel_ate')); ?>:</b>
	<?php echo CHtml::encode($data->data_disponivel_ate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor_a_pagar')); ?>:</b>
	<?php echo CHtml::encode($data->valor_a_pagar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activo')); ?>:</b>
	<?php echo CHtml::encode($data->activo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('opcao_1_titulo')); ?>:</b>
	<?php echo CHtml::encode($data->opcao_1_titulo); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('opcao_1_valor_a_pagar')); ?>:</b>
	<?php echo CHtml::encode($data->opcao_1_valor_a_pagar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('opcao_1_activo')); ?>:</b>
	<?php echo CHtml::encode($data->opcao_1_activo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('opcao_2_titulo')); ?>:</b>
	<?php echo CHtml::encode($data->opcao_2_titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('opcao_2_valor_a_pagar')); ?>:</b>
	<?php echo CHtml::encode($data->opcao_2_valor_a_pagar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('opcao_2_activo')); ?>:</b>
	<?php echo CHtml::encode($data->opcao_2_activo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('opcao_3_titulo')); ?>:</b>
	<?php echo CHtml::encode($data->opcao_3_titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('opcao_3_valor_a_pagar')); ?>:</b>
	<?php echo CHtml::encode($data->opcao_3_valor_a_pagar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('opcao_3_activo')); ?>:</b>
	<?php echo CHtml::encode($data->opcao_3_activo); ?>
	<br />

	*/ ?>

</div>
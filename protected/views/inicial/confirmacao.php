<?php

$conn = Yii::app()->db;
$command= $conn->createCommand('SELECT rodape FROM escolas WHERE id_escola=1');
$row = $command->queryRow();

$rodape=$row['rodape'];

$cs = Yii::app()->getClientScript();
$cs->registerCoreScript('jquery');


?>

<div class="container" >
	Matricula Online registada com sucesso N.º = <?php echo $id;?> </br>
	<?php  echo  Matriculas::devolve_html_referencia_multibanco($id,$model->ano_a_se_inscreve);  ?>

<div id="footer">
	<div class="container">
    	<div id="footer-right">
			<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php" target="_self">Voltar à página inicial</a>
        </div>
			<?php echo $rodape; ?>
        <br class="clear">
  </div>
</div>



<?php

	$conn = Yii::app()->db;
	$command= $conn->createCommand('SELECT cabecalho,coluna1,coluna2,coluna3,rodape FROM escolas WHERE id_escola=1');
	$row = $command->queryRow();

	$cabecalho=$row['cabecalho'];
	$coluna1=$row['coluna1'];
	$coluna2=$row['coluna2'];
	$coluna3=$row['coluna3'];
	$rodape=$row['rodape'];

?>

<div id="head-break">
	<p>Matriculas On-line?</p>
	<h1>Plataforma Online de inscrições</h1>
</div>

<div class="container">
	<?php echo $cabecalho; ?>
</div>


<div id="feature-tiles">

	<div class="container">

        <div class="feature left">
					<table align="center" style="width:100%">
						<tr valign="middle">
							<td>
								<img src="css/images/ico1.png" alt="" />
							</td>
							<td><h3>Renovação da Matrícula</h3></td>
						</tr>
					</table>
					<p><a href="<?php  echo Yii::app()->request->baseUrl . '/index.php?r=inicial/registar'; ?>" class="more">Renovação de Matrícula.</a></p>
					<!-- coluna1 -->
					<?php echo $coluna1; ?>
        </div>

        <div class="feature border">
				<!-- Column 2 start -->
					<table align="center" style="width:100%">
						<tr valign="middle">
							<td>
								<img src="css/images/ico2.png" alt="" />
							</td>
							<td><h3>Visualização do Estado da Matrícula</h3></td>
						</tr>
					</table>
						<form
							action="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=inicial/estado"
							method="post"
							name="inicial-estado-form"
							id="inicial-estado-form">
							<p>Bilhete de Identidade/Cartão do Cidadão nº:
							<input
								type="text"
								name="txt_bi"
								id="txt_bi" />
							<br /> <br />
							<input type="submit"
								name="botaoverestado"
								id="botaoverestado"
								value="Ver Estado da Matrícula" />
								<br /> <br />
							</p>
						</form>
						<!-- coluna2 -->
						<?php echo $coluna2; ?>
        </div>

        <div class="feature last">
					<table align="center" style="width:100%">
						<tr valign="middle">
							<td>
								<img src="css/images/ico3.png" alt="" />
							</td>
							<td><h3>Ver dados de pagamento</h3></td>
						</tr>
					</table>
						<form
						<form
							action="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=inicial/pagamento"
							method="post"
							name="inicial-pagamento-form"
							id="inicial-pagamento-form">
								<p>Bilhete de Identidade nº/Cartão do Cidadão n.º:
									<input type="text"
										name="txt_bi"
										id="txt_bi" />
									<br /> <br />
									<input type="submit"
										name="botaorecuperarreferencia"
										id="botaorecuperarreferencia"
										value="Recuperar Referência" /> <br /> <br />
								</p>
						</form>
						<!-- coluna3 -->
						<?php echo $coluna3; ?>

        </div>
        <br class="clear">
    </div>
</div>



<div id="footer">
	<div class="container">

    	<div id="footer-right">
        	matriculas.com.pt | matriculas.pt © 2012 Todos os direitos reservados  - <a href="mailto:geral@matriculas.com.pt">geral@matriculas.com.pt</a><br>
        	<a target="_blank" href="<?php  echo Yii::app()->request->baseUrl . '/index.php?r=site/index'; ?>">&Aacute;rea de Administração</a> | <a href="http://www.matriculas.com.pt/">www.matriculas.com.pt</a>
        </div>
    	<?php echo $rodape; ?>
        <br class="clear">
  </div>
</div>


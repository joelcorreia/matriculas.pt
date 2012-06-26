<?php

class InicialController extends Controller
{
	public function actionIndex()
	{
		$this->layout='/layouts/main_matriculas';

		$this->render('index');
	}

	public function actionJs()
	{

		$this->layout='/layouts/nothing';

		$mensagem_js = '	var lista_cursos = [
						';

		//anos
		$matriculas_anos0 = array();
		$conn = Yii::app()->db;
		$command= $conn->createCommand('SELECT id,title FROM tree WHERE level = 1 ORDER BY position ASC');
		$dataReader=$command->query();
		while(($linha=$dataReader->read())!==false)
		{
			$matriculas_anos0[] = array("id" => $linha[id], "title" => $linha[title]);
		}

		// 1ª opcao
		$matriculas_anos_opcao1 = array();
		foreach($matriculas_anos0 as $ano0)
		{

			$command= $conn->createCommand("SELECT id,title FROM tree WHERE level = 2 AND parent_id=" . $ano0["id"] . "  ORDER  BY position ASC");
			$dataReader=$command->query();
			while(($linha=$dataReader->read())!==false)
			{
				$matriculas_anos_opcao1[] = array("ano_id" => $ano0["id"],"ano_title" => $ano0["title"],"id" => $linha[id], "title" => $linha[title]);
			}
		}
		$primeiro = true;
		foreach($matriculas_anos_opcao1 as $opcao1)
		{
			if(!$primeiro)
				$mensagem_js .= ',
								';
			$mensagem_js .=  "{'When':'" . $opcao1["ano_id"] . "','Value':'opcao1_" . $opcao1["id"] . "','Text':'" . $opcao1["title"] . "'}";
			$primeiro = false;
		}
		$mensagem_js .='
								];

			var lista_opcoes_b = [
								';

		// 2ª opcao
		$matriculas_anos_opcao2 = array();
		foreach($matriculas_anos_opcao1 as $opcao1)
		{

			$command= $conn->createCommand("SELECT id,title FROM tree WHERE level = 3 AND parent_id=" . $opcao1["id"] . "  ORDER  BY position ASC");
			$dataReader=$command->query();
			while(($linha=$dataReader->read())!==false)
			{
				$matriculas_anos_opcao2[] = array("opcao1_id" => $opcao1["id"],"opcao1_title" => $opcao1["title"],"id" => $linha[id], "title" => $linha[title]);
			}
		}
		$primeiro = true;
		foreach($matriculas_anos_opcao2 as $opcao2)
		{

			$mensagem_js .= "{'When':'opcao1_" . $opcao2["opcao1_id"] . "','Value':'opcao2_" . $opcao2["id"] . "','Text':'" . $opcao2["title"] . "'},
			  			";
			$primeiro = false;
		}
		$mensagem_js .="
						{'When':'','Value':'','Text':'--'}
			  					];

			var lista_opcoes_c_d = [
								";
		// 3ª opcao
		$matriculas_anos_opcao3 = array();
		foreach($matriculas_anos_opcao2 as $opcao2)
		{
			$command= $conn->createCommand("SELECT id,title FROM tree WHERE level = 4 AND parent_id=" . $opcao2["id"] . "  ORDER  BY position ASC");
			$dataReader=$command->query();
			while(($linha=$dataReader->read())!==false)
			{
				$matriculas_anos_opcao3[] = array("opcao2_id" => $opcao2["id"],"opcao2_title" => $opcao2["title"],"id" => $linha[id], "title" => $linha[title]);
			}
		}
		$primeiro = true;
		foreach($matriculas_anos_opcao3 as $opcao3)
		{
			$mensagem_js .= "{'When':'opcao2_" . $opcao3["opcao2_id"] . "','Value':'" . $opcao3["id"] . "','Text':'" . $opcao3["title"] . "'},
			  			";
			$primeiro = false;
		}
		$mensagem_js .="
						{'When':'','Value':'','Text':'--'}
									];
									";

		$command= $conn->createCommand('SELECT id_tree,designacao,valor_a_pagar,opcao_1_titulo, opcao_1_valor_a_pagar, opcao_1_activo, opcao_2_titulo, opcao_2_valor_a_pagar, opcao_2_activo, opcao_3_titulo, opcao_3_valor_a_pagar, opcao_3_activo FROM anos ORDER BY id asc');
		$mensagem_js = $mensagem_js . '
$().ready(function() {

		    $("#Matriculas_ano_a_se_inscreve").change(function () {
		    switch($("#Matriculas_ano_a_se_inscreve").val())
			{
		';
		$dataReader=$command->query();
		while(($row=$dataReader->read())!==false) {

			$mensagem_js .= sprintf('
				case "%s":{
				$("#Matriculas_ano_a_se_inscreve_valor_a_pagar").text("Valor a pagar: %s€");
				',$row['id_tree'],$row['valor_a_pagar']);

			if($row['opcao_1_activo']=="1")
			{
					$mensagem_js .= sprintf('
								$("#Matriculas_campos_extra1_titulo").text("%s");
								$("#Matriculas_campos_extra1")
								    .find("option")
								    .remove()
								    .end()
								    .append("<option value=\"%s\">Sim</option>")
								    .val("%s");
								$("#Matriculas_campos_extra1")
								    .find("option")
								    .end()
								    .append("<option value=\"0\">Não</option>")
								    .val("0");

							',$row['opcao_1_titulo'],$row['opcao_1_valor_a_pagar'],$row['opcao_1_valor_a_pagar']);
			}
			else
			{
					$mensagem_js .= '
								$("#Matriculas_campos_extra1_titulo").text("Não aplicável");
								$("#Matriculas_campos_extra1")
								    .find("option")
								    .remove()
								    .end()
								    .append("<option value=\"0\">Não aplicável</option>")
								    .val("0");
							';
			}
			if($row['opcao_2_activo']=="1")
			{
					$mensagem_js .= sprintf('
								$("#Matriculas_campos_extra2_titulo").text("%s");
								$("#Matriculas_campos_extra2")
								    .find("option")
								    .remove()
								    .end()
								    .append("<option value=\"%s\">Sim</option>")
								    .val("%s");
								$("#Matriculas_campos_extra2")
								    .find("option")
								    .end()
								    .append("<option value=\"0\">Não</option>")
								    .val("0");

							',$row['opcao_2_titulo'],$row['opcao_2_valor_a_pagar'],$row['opcao_2_valor_a_pagar']);
			}
			else
			{
					$mensagem_js .= '
								$("#Matriculas_campos_extra2_titulo").text("Não aplicável");
								$("#Matriculas_campos_extra2")
								    .find("option")
								    .remove()
								    .end()
								    .append("<option value=\"0\">Não aplicável</option>")
								    .val("0");
							';
			}
			if($row['opcao_3_activo']=="1")
			{
					$mensagem_js .= sprintf('
								$("#Matriculas_campos_extra3_titulo").text("%s");
								$("#Matriculas_campos_extra3")
								    .find("option")
								    .remove()
								    .end()
								    .append("<option value=\"%s\">Sim</option>")
								    .val("%s");
								$("#Matriculas_campos_extra3")
								    .find("option")
								    .end()
								    .append("<option value=\"0\">Não</option>")
								    .val("0");

							',$row['opcao_3_titulo'],$row['opcao_3_valor_a_pagar'],$row['opcao_3_valor_a_pagar']);
			}
			else
			{
					$mensagem_js .= '
								$("#Matriculas_campos_extra3_titulo").text("Não aplicável");
								$("#Matriculas_campos_extra3")
								    .find("option")
								    .remove()
								    .end()
								    .append("<option value=\"0\">Não aplicável</option>")
								    .val("0");
							';
			}


			$mensagem_js .='}break;';


		}

		$mensagem_js .=  '
				default:;
			}
        }).change();

});


		';

		$this->renderText($mensagem_js);
	}


	public function actionRegistar()
	{
		$this->layout='/layouts/main_matriculas';


		$conn = Yii::app()->db;
		$command= $conn->createCommand('select count(*) as total from anos WHERE Now() between `data_disponivel_de` AND `data_disponivel_ate` AND `activo`=1');
		$row = $command->queryRow();

		if($row['total']<>'0')
			$this->render('registar');
		else
			$this->redirect(array('mensagem','mensagem'=>'Não disponivel. Consulte as datas.'.$row['total']));

	}

	public function actionConfirmacao($id)
	{
		$this->layout='/layouts/main_matriculas';


		$this->render('confirmacao',array(
			'id'=>$id,
		));
	}

	public function actionEstado()
	{
		$this->layout='/layouts/main_matriculas';


		$cartao = '0';
		if(isset($_POST['txt_bi']))
			$cartao=$_POST['txt_bi'];
		else
			$cartao='0';


		$conn = Yii::app()->db;
		$command= $conn->createCommand('select nmatricula,nomecompleto,paga,anulada,processada from matriculas WHERE bi=:bi');
		$command->bindParam(":bi",$cartao, PDO::PARAM_STR);

		$rows = array();
		$mensagem_html = '<table width="400px">
					<thead>
						<tr>
							<th>N.º Matricula</th>
							<th>Nome</th>
							<th>Paga</th>
							<th>Processada</th>
						</tr>
					</thead>';

		$dataReader=$command->query();
		$encontrou = false;
		while(($row=$dataReader->read())!==false) {
			$encontrou = true;
			$mensagem_html .= sprintf('
					<tbody>
						<tr>
							<td>%d</td>
							<td>%s</td>
							<td>%s</td>
							<td>%s</td>
						</tr>
					</tbody>',$row['nmatricula'],$row['nomecompleto'],($row['paga']==1?'Sim':'Não'),($row['processada']==1?'Sim':'Não'));
		}
		if(!$encontrou)
			$mensagem_html .=  '<tbody>
									<tr>
										<td colspan="4">Registo não encontrado. Por favor verifique se escreveu correctamente o Cartão de cidadão/Bilhete de identidade.</td>
									</tr>
								</tbody>';

		$mensagem_html .=  '</table>';

		$this->render('estado',array(
			'mensagem_html'=>$mensagem_html,
		));


	}

	public function actionPagamento()
	{
		$this->layout='/layouts/main_matriculas';

		$cartao = '0';
		if(isset($_POST['txt_bi']))
			$cartao=$_POST['txt_bi'];
		else
			$cartao='0';


		$conn = Yii::app()->db;
		$command= $conn->createCommand('select nmatricula,nomecompleto,paga,anulada,ano_a_se_inscreve from matriculas WHERE bi=:bi');
		$command->bindParam(":bi",$cartao, PDO::PARAM_STR);

		$rows = array();
		$mensagem_html = '<table width="400px">
					<thead>
						<tr>
							<th>N.º Matricula</th>
							<th>Nome</th>
							<th>Paga</th>
							<th>Dados de pagamento</th>
						</tr>
					</thead>';

		$dataReader=$command->query();
		$encontrou = false;
		while(($row=$dataReader->read())!==false) {
			$encontrou = true;
			$mensagem_html .= sprintf('
					<tbody>
						<tr>
							<td>%d</td>
							<td>%s</td>
							<td>%s</td>
							<td>%s</td>
						</tr>
					</tbody>',$row['nmatricula'],$row['nomecompleto'],($row['paga']==1?'Sim':'Não'),Matriculas::devolve_html_referencia_multibanco($row['nmatricula'], $row['ano_a_se_inscreve']) );
		}
		if(!$encontrou)
			$mensagem_html .=  '<tbody>
									<tr>
										<td colspan="4">registo não encontrado. Por favor verifique se escreveu correctamente o Cartão de cidadão/Bilhete de identidade.</td>
									</tr>
								</tbody>';

		$mensagem_html .=  '</table>';

		$this->render('pagamento',array(
			'mensagem_html'=>$mensagem_html,
		));

	}
	public function actionMensagem($mensagem)
	{
		$this->layout='/layouts/main_matriculas';


		$this->render('mensagem',array(
			'mensagem'=>$mensagem,
		));
	}

}
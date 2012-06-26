<?php
 session_start();
 if(count($_SESSION)==0)
 {
 	$host  = $_SERVER['HTTP_HOST'];
	$uri   = str_replace('/tree','', rtrim(dirname($_SERVER['PHP_SELF']), '/\\'));
	header("Location: http://$host$uri");
	exit;

 }
?>
<?php

$db_config = array(
	"servername"=> "localhost",
	"username"	=> "root",
	"password"	=> "root",
	"database"	=> "matriculas"
);
if(extension_loaded("mysqli")) require_once("_inc/class._database_i.php");
else require_once("_inc/class._database.php");

// Tree class
require_once("_inc/class.tree.php");

global $db_config;

	$con = mysql_connect($db_config["servername"] ,$db_config["username"] ,$db_config["password"]);
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db($db_config["database"], $con);
	mysql_query("SET NAMES 'utf8'");

	?>

<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Lista de opções Cursos/Disciplinas</title>
	<link type="text/css" rel="stylesheet" href="!style.css"/>
	<script type="text/javascript" src="_lib/cascade/jquery.js"></script>
	<script type="text/javascript" src="_lib/cascade/jquery.cascade.js"></script>
	<script type="text/javascript" src="_lib/cascade/jquery.cascade.ext.js"></script>
	<script type="text/javascript" src="_lib/cascade/jquery.templating.js"></script>

		<script type="text/javascript">
		var lista_cursos = [
								<?php

	// anos
	$resultado = mysql_query("SELECT id,title FROM tree WHERE level = 1 ORDER BY position ASC");
	$matriculas_anos0 = array();
	while($linha = mysql_fetch_array($resultado))
	{
		$matriculas_anos0[] = array("id" => $linha[id], "title" => $linha[title]);
	}

	// 1ª opcao
	$matriculas_anos_opcao1 = array();
	foreach($matriculas_anos0 as $ano0)
	{
		$resultado = mysql_query("SELECT id,title FROM tree WHERE level = 2 AND parent_id=" . $ano0["id"] . "  ORDER  BY position ASC");
		while($linha = mysql_fetch_array($resultado))
		{
			$matriculas_anos_opcao1[] = array("ano_id" => $ano0["id"],"ano_title" => $ano0["title"],"id" => $linha[id], "title" => $linha[title]);
		}
	}
	$primeiro = true;
	foreach($matriculas_anos_opcao1 as $opcao1)
	{
		if(!$primeiro)
			echo ',
							';
		echo "{'When':'" . $opcao1["ano_id"] . "','Value':'opcao1_" . $opcao1["id"] . "','Text':'" . $opcao1["title"] . "'}";
		$primeiro = false;
	}
	?>
							];

		var lista_opcoes_b = [
							<?php
	// 2ª opcao
	$matriculas_anos_opcao2 = array();
	foreach($matriculas_anos_opcao1 as $opcao1)
	{
		$resultado = mysql_query("SELECT id,title FROM tree WHERE level = 3 AND parent_id=" . $opcao1["id"] . "  ORDER  BY position ASC");
		while($linha = mysql_fetch_array($resultado))
		{
			$matriculas_anos_opcao2[] = array("opcao1_id" => $opcao1["id"],"opcao1_title" => $opcao1["title"],"id" => $linha[id], "title" => $linha[title]);
		}
	}
	$primeiro = true;
	foreach($matriculas_anos_opcao2 as $opcao2)
	{

		echo "{'When':'opcao1_" . $opcao2["opcao1_id"] . "','Value':'opcao2_" . $opcao2["id"] . "','Text':'" . $opcao2["title"] . "'},
		  			";
		$primeiro = false;
	}
	?>
					{'When':'','Value':'','Text':'--'}
		  					];

		var lista_opcoes_c_d = [
							<?php
	// 3ª opcao
	$matriculas_anos_opcao3 = array();
	foreach($matriculas_anos_opcao2 as $opcao2)
	{
		$resultado = mysql_query("SELECT id,title FROM tree WHERE level = 4 AND parent_id=" . $opcao2["id"] . "  ORDER  BY position ASC");
		while($linha = mysql_fetch_array($resultado))
		{
			$matriculas_anos_opcao3[] = array("opcao2_id" => $opcao2["id"],"opcao2_title" => $opcao2["title"],"id" => $linha[id], "title" => $linha[title]);
		}
	}
	$primeiro = true;
	foreach($matriculas_anos_opcao3 as $opcao3)
	{
		echo "{'When':'opcao2_" . $opcao3["opcao2_id"] . "','Value':'" . $opcao3["id"] . "','Text':'" . $opcao3["title"] . "'},
		  			";
		$primeiro = false;
	}
	?>
					{'When':'','Value':'','Text':'--'}
								];

		function commonTemplate(item) {
			return "<option value='" + item.Value + "'>" + item.Text + "</option>";
		};

		function commonMatch(selectedValue) {
			return this.When == selectedValue;
		};
		</script>


</head>
<body id="demo_body">
<div id="container">

<h1 id="dhead">Listas</h1>
<h1>Lista de opções Cursos/Disciplinas</h1>
<h2><a href="index.php">voltar a editar</a></h2>
<h2><a href="../index.php?r=site/index">Voltar à zona de administração</a></h2>
<div id="description">
<div id="mmenu" style="height:30px; overflow:auto;">
</div>


<div id="demo" class="demo" style="height:400px;">

<table border="0px" cellspacing="2px" cellpadding="6px" width="100%">
						<tr>
							<td colspan="5" align="center" bgcolor="#4F4F4F"><font
								color="#FFFFFF">RENOVAÇÃO DE MATRICULA</font>
							</td>
						</tr>
						<tr>
							<td>Ano em que se increve:</td>
							<td colspan="5">
								<select
									id="txt_ano_a_se_inscreve"
									name="txt_ano_a_se_inscreve">
	<?php

	foreach($matriculas_anos0 as $ano0)
	{
		echo '<option value="' . $ano0[id] . '">'. $ano0[title] . '</option>';
	}
	?>
								</select>
							</td>
						</tr>
						<tr>
							<td>Curso/Escolhas </td>
							<td colspan="5">
							<select
								id="txt_lista_cursos"
								name="txt_lista_cursos">
									<option value='Não Aplicável' selected="selected">Não Aplicável</option>
							</select> <span style="color:RED">*</span>
							<script type="text/javascript">
								jQuery(document)
										.ready(
												function() {
													jQuery("#txt_lista_cursos")
															.cascade(
																	"#txt_ano_a_se_inscreve",
																	{
																		list : lista_cursos,
																		template : commonTemplate,
																		match : commonMatch
																	});
												});
							</script>
							</td>
						</tr>
						<tr>
							<td>Opções </td>
							<td colspan="5">
							<select
								id="txt_lista_opcao_b"
								name="txt_lista_opcao_b">
									<option value='Não Aplicável' selected="selected">Não Aplicável</option>
							</select><span style="color:RED">*</span>
							<script type="text/javascript">
								jQuery(document)
										.ready(
												function() {
													jQuery("#txt_lista_opcao_b")
															.cascade(
																	"#txt_lista_cursos",
																	{
																		list : lista_opcoes_b,
																		template : commonTemplate,
																		match : commonMatch
																	});
												});
							</script>
							</td>
						</tr>
						<tr>
							<td>Opção Alternativa</td>
							<td colspan="5">
								<select
									id="txt_lista_opcao_c"
									name="txt_lista_opcao_c">
									<option value='Não Aplicável' selected="selected">Não Aplicável</option>
							</select> <span style="color:RED">*</span>
							<script type="text/javascript">
								jQuery(document)
										.ready(
												function() {
													jQuery("#txt_lista_opcao_c")
															.cascade(
																	"#txt_lista_opcao_b",
																	{
																		list : lista_opcoes_c_d,
																		template : commonTemplate,
																		match : commonMatch
																	});
												});
							</script>
							</td>
						</tr>
						</table>
</div>


</div>

</body>
</html>
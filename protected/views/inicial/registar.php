<?php

	$conn = Yii::app()->db;
	$command= $conn->createCommand('SELECT rodape FROM escolas WHERE id_escola=1');
	$row = $command->queryRow();

	$rodape=$row['rodape'];

$cs = Yii::app()->getClientScript();
$cs->registerCoreScript('jquery');

//$cs->registerCssFile(Yii::app()->clientScript->getCoreScriptUrl().'/jui/css/ui-lightness/jquery-ui.css');

$cs->registerScriptFile(Yii::app()->request->baseUrl.'/js/datetimepicker_css.js');
$cs->registerScriptFile(Yii::app()->request->baseUrl.'/js/cascade/jquery.cascade.js');
$cs->registerScriptFile(Yii::app()->request->baseUrl.'/js/cascade/jquery.cascade.ext.js');
$cs->registerScriptFile(Yii::app()->request->baseUrl.'/js/jquery.validate.js');
$cs->registerScriptFile(Yii::app()->request->baseUrl.'/js/ini_matriculas.js');
$cs->registerScriptFile(Yii::app()->request->baseUrl.'/index.php?r=inicial/js');


?>
<div class=container_form>
		<form
			action="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=matriculas/create"
			method="post"
			name="matriculas-form"
			id="matriculas-form">
			<table border="0px" cellspacing="0px" cellpadding="0px" width="95%">
				<tr valign="top">
					<td width="50%" valign="top">
						<table border="0px" cellspacing="0px" cellpadding="0px" width="100%">
							<tr>
								<td colspan="2" align="center" bgcolor="#4F4F4F">
									<font color="#FFFFFF">RENOVAÇÃO DE MATRICULA</font>
								</td>
							</tr>
							<tr>
								<td>Ano em que se increve:</td>
								<td>
									<select
										id="Matriculas_ano_a_se_inscreve"
										name="Matriculas[ano_a_se_inscreve]">
										<?php

												$conn = Yii::app()->db;
												$command= $conn->createCommand('select designacao,(SELECT id FROM `tree` WHERE `title`=anos.designacao  UNION SELECT \'\' LIMIT 1) as valor from anos WHERE Now() between `data_disponivel_de` AND `data_disponivel_ate` AND `activo`=1');
												$dataReader = $command->query();
												while(($row=$dataReader->read())!==false)
													echo '<option value="' . $row['valor'] . '">' . $row['designacao'] . '</option>';
										?>

									</select>
									<label for="Matriculas_ano_a_se_inscreve" id="Matriculas_ano_a_se_inscreve_valor_a_pagar"></label>
								</td>
							</tr>
							<tr>
								<td>Curso/Escolhas <a href="<?php echo Yii::app()->request->baseUrl; ?>/images/upload/planoscurriculares.jpg" onclick="window.open('<?php echo Yii::app()->request->baseUrl; ?>/images/upload/planoscurriculares.jpg','popup','width=800,height=800,scrollbars=no,resizable=no,toolbar=no,directories=no,location=no,menubar=no,status=no,left=0,top=0'); return false" target="_blank">Ver Panfleto</a></td>
								<td>
								<select
									id="Matriculas_lista_cursos"
									name="Matriculas[lista_cursos]">
										<option value='Não Aplicável' selected="selected">Não Aplicável</option>
								</select> <span style="color:RED">*</span>
								<script type="text/javascript">
									jQuery(document)
											.ready(
													function() {
														jQuery("#Matriculas_lista_cursos")
																.cascade(
																		"#Matriculas_ano_a_se_inscreve",
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
								<td>
								<select
									id="Matriculas_lista_opcao_b"
									name="Matriculas[lista_opcao_b]">
										<option value='Não Aplicável' selected="selected">Não Aplicável</option>
								</select><span style="color:RED">*</span>
								<script type="text/javascript">
									jQuery(document)
											.ready(
													function() {
														jQuery("#Matriculas_lista_opcao_b")
																.cascade(
																		"#Matriculas_lista_cursos",
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
								<td>
									<select
										id="Matriculas_lista_opcao_c"
										name="Matriculas[lista_opcao_c]">
										<option value='Não Aplicável' selected="selected">Não Aplicável</option>
								</select> <span style="color:RED">*</span>
								<script type="text/javascript">
									jQuery(document)
											.ready(
													function() {
														jQuery("#Matriculas_lista_opcao_c")
																.cascade(
																		"#Matriculas_lista_opcao_b",
																		{
																			list : lista_opcoes_c_d,
																			template : commonTemplate,
																			match : commonMatch
																		});
													});
								</script>
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<span style="color:RED">*</span> <span style="color:Black;font-size:9px;">Caso queira incluir uma informação extra, use o campo <label for="Matriculas_observacoes">Observações</label></span>
								</td>
							</tr>
							<tr>
								<td>Educação Moral e Religiosa Católica (EMRC):</td>
								<td>
									<select
										id="Matriculas_moral"
										name="Matriculas[moral]">
										<option value="Nim">Escolha uma opção</option>
										<option value="Sim">Sim</option>
										<option value="Não" >Não</option>
										<option value="Não Aplicavel" selected="selected">Não Aplicável</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Autorização Saída:</td>
								<td>
									<select
										id="Matriculas_saida"
										name="Matriculas[saida]">
										<option value="Toda a hora" >Toda a hora</option>
										<option value="Mediante horário escolar ">Mediante horário escolar</option>
										<option value="Hora de almoço" >Hora de almoço</option>
										<option value="Não autorizado" >Não autorizado</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Renovação de Matrícula:</td>
								<td>
									<input
										type="text"
										size="50"
										name="Matriculas[erenovacaomatricula]"
										id="Matriculas_erenovacaomatricula"
										value="Renovação Matrícula"
										readonly="readonly"
										style="background-color: #BCBCBC;"
										maxlength="200" />
								</td>
							</tr>
							<tr>
								<td>Estabelecimento de Ensino</td>
								<td>
									<input
										type="text"
										size="50"
										name="Matriculas[estabelecimento]"
										id="Matriculas_estabelecimento"
										value="Aluno que pretende frequentar o mesmo estabelecimento de ensino"
										readonly="readonly"
										style="background-color: #BCBCBC;"
										maxlength="200" />
								</td>
							</tr>

							<tr>
								<td>Ano de Matrícula:</td>
								<td>
									<input
										type="text"
										size="50"
										name="Matriculas[ano]"
										id="Matriculas_ano"
										value="2012"
										readonly="readonly"
										style="background-color: #BCBCBC;"
										maxlength="200" />
								</td>
							</tr>
							<tr>
								<td>Ano Lectivo de:</td>
								<td>
									<input
										type="text"
										size="50"
										name="Matriculas[anolectivode]"
										id="Matriculas_anolectivode"
										value="2012/2013"
										readonly="readonly"
										style="background-color: #BCBCBC;"
										maxlength="200" />
								</td>
							</tr>
							<tr>
								<td>Escola:</td>
								<td>
									<input
									type="text"
									size="50"
									name="Matriculas[escola]"
									id="Matriculas_escola"
									value="Escola Demonstração"
									style="background-color: #BCBCBC;"
									maxlength="200" />
								</td>
							</tr>
							<tr>
								<td>Transporte Escolar:</td>
								<td>
									<select
										name="Matriculas[transporte]"
										id="Matriculas_transporte">
										<option selected="selected" value="Sim">Sim</option>
										<option value="Não">Não</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Local Embarque:</td>
								<td>
									<input
										type="text"
										size="50"
										name="Matriculas[embarque]"
										id="Matriculas_embarque"
										maxlength="200" />
								</td>
							</tr>
							<tr>
								<td colspan="2" align="center" bgcolor="#4F4F4F">
									<font color="#FFFFFF">IDENTIFICAÇÃO DO ALUNO</font>
								</td>
							</tr>
							<tr>
								<td>Número do Cartão de Estudante:</td>
								<td>
									<input
										type="text"
										size="50"
										name="Matriculas[n_cartao_estudante]"
										id="Matriculas_n_cartao_estudante"
										maxlength="200" />
								</td>
							</tr>
							<tr>
								<td><label for="Matriculas_nomecompleto">Nome Completo:</label></td>
								<td>
									<input
										type="text"
										size="50"
										name="Matriculas[nomecompleto]"
										id="Matriculas_nomecompleto"
										maxlength="200" />
								</td>
							</tr>
							<tr>
								<td>Nacionalidade:</td>
								<td>
									<input
										type="text"
										size="50"
										name="Matriculas[nacionalidade]"
										id="Matriculas_nacionalidade"
										maxlength="200" />
								</td>
							</tr>
							<tr>
								<td>Natural da Freguesia:</td>
								<td>
									<input
										type="text"
										size="50"
										name="Matriculas[naturaldafreguesia]"
										id="Matriculas_naturaldafreguesia"
										maxlength="200" />
								</td>
							</tr>
							<tr>
								<td>Concelho:</td>
								<td>
									<input
										type="text"
										size="50"
										name="Matriculas[concelho]"
										id="Matriculas_concelho"
										maxlength="200" />
								</td>
							</tr>

							<tr>
								<td>Distrito:</td>
								<td>
									<input
										type="text"
										size="50"
										name="Matriculas[distrito]"
										id="Matriculas_distrito"
										maxlength="200"  />
								</td>
							</tr>
							<tr>
								<td>Data de Nascimento:</td>
								<td>
									<input
										type="text"
										size="50"
										name="Matriculas[datanasc]"
										id="Matriculas_datanasc"
										maxlength="200"
										value="01-12-1995" />
									<img src="images/cal.gif" onclick="javascript:NewCssCal('Matriculas_datanasc','ddmmyyyy','arrow')" style="cursor:pointer"/>
								</td>
							</tr>
							<tr>
								<td>Bilhete de Identidade ou Cartão de Cidadão Nº:</td>
								<td>
									<input
										type="text"
										size="50"
										name="Matriculas[bi]"
										id="Matriculas_bi"
										maxlength="200" />
								</td>
							</tr>
							<tr>
								<td>Nº Segurança Social(NISS):</td>
								<td>
									<input
										type="text"
										size="50"
										name="Matriculas[segsocial]"
										id="Matriculas_segsocial"
										maxlength="200" />
								</td>
							</tr>
							<tr>
								<td>Nº Identificação físcal:</td>
								<td>
									<input
										type="text"
										size="50"
										name="Matriculas[identificacao_fiscal]"
										id="Matriculas_identificacao_fiscal"
										maxlength="200" />
								</td>
							</tr>
							<tr>
								<td>Nº Utente de Saúde(SNS):</td>
								<td>
									<input
										type="text"
										size="50"
										name="Matriculas[utente_saude]"
										id="Matriculas_utente_saude"
										maxlength="200" />
								</td>
							</tr>
							<tr>
								<td>Vacinas em dia:</td>
								<td>
									<select
										name="Matriculas[vacinas]"
										id="Matriculas_vacinas">
										<option selected="selected" value="Não">Não</option>
										<option value="Sim">Sim</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Escalão do Abono</td>
								<td>
									<select
										name="Matriculas[abono]"
										id="Matriculas_abono">
										<option selected="selected" value="Sem Escalão">Sem Escalão</option>
										<option value="Escalão 1">Escalão 1</option>
										<option value="Escalão 2">Escalão 2</option>
										<option value="Outro Escalão">Outro Escalão</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>E-mail:</td>
								<td>
									<input
										type="text"
										size="50"
										name="Matriculas[email]"
										id="Matriculas_email"
										maxlength="200" />
								</td>
							</tr>
							<tr>
								<td>Residente em:(Rua)</td>
								<td>
									<input
										type="text"
										size="50"
										name="Matriculas[residente]"
										id="Matriculas_residente"
										maxlength="200" />
								</td>
							</tr>
							<tr>
								<td>Localidade:</td>
								<td>
									<input
										type="text"
										size="50"
										name="Matriculas[localidade]"
										id="Matriculas_localidade"
										maxlength="200"  />
								</td>
							</tr>
							<tr>
								<td>Cód. Postal:</td>
								<td>
									<input
										type="text"
										size="50"
										name="Matriculas[codpostal]"
										id="Matriculas_codpostal"
										maxlength="200"  />
								</td>
							</tr>
							<tr>
								<td>Telefone ou Telemóvel:</td>
								<td>
									<input
										type="text"
										size="50"
										name="Matriculas[telefone]"
										id="Matriculas_telefone"
										maxlength="200"  />
									<input
										type="button"
										style="width: 150px; height: 25px;"
										name="copiardados"
										id="copiardados"
										value="Copiar dados para EE &gt;&gt;"
										onclick="data_copy()" />
								</td>
							</tr>
							<tr>
								<td>Filho de:</td>
								<td>
									<input
										type="text"
										size="50"
										name="Matriculas[filhoA]"
										id="Matriculas_filhoA"
										maxlength="200"  />
								</td>
							</tr>
							<tr>
								<td>Profissão:</td>
								<td>
									<input
										type="text"
										size="50"
										name="Matriculas[profissaoA]"
										id="Matriculas_profissaoA"
										maxlength="200"  />
									<input
										type="button"
										style="width: 150px; height: 25px;"
										name="copiardadose1"
										id="copiardadose1"
										value="Copiar dados para EE &gt;&gt;"
										onclick="data_copye1()" />
								</td>
							</tr>
							<tr>
								<td>E de:</td>
								<td>
									<input
									type="text"
									size="50"
									name="Matriculas[filhoB]"
									id="Matriculas_filhoB"
									maxlength="200"  />
								</td>
							</tr>
							<tr>
								<td>Profissão:</td>
								<td>
									<input
										type="text"
										size="50"
										name="Matriculas[profissaoB]"
										id="Matriculas_profissaoB"
										maxlength="200"  />
									<input
										type="button"
										style="width: 150px; height: 25px;"
										name="copiardadose2"
										id="copiardadose2"
										value="Copiar dados para EE &gt;&gt;"
										onclick="data_copye2()" />
								</td>
							</tr>
						</table>
					</td>
					<td width="50%" valign="top">
						<table border="0px" cellspacing="0px" cellpadding="0px" width="100%">
							<tr>
								<td colspan="2" align="center" bgcolor="#4F4F4F">
									<font color="#FFFFFF">IDENTIFICAÇÃO DO ENCARREGADO DE EDUCAÇÃO</font>
								</td>
							</tr>
							<tr>
								<td>Nome Completo:</td>
								<td>
									<input
										type="text"
										size="50"
										name="Matriculas[nomecompletoee]"
										id="Matriculas_nomecompletoee"
										maxlength="200"  />
								</td>
							</tr>
							<tr>
								<td>Profissão:</td>
								<td>
									<input
										type="text"
										size="50"
										name="Matriculas[profissaoee]"
										id="Matriculas_profissaoee"
										maxlength="200"  />
								</td>
							</tr>
							<tr>
								<td>Residente em:(Rua)</td>
								<td>
									<input
										type="text"
										size="50"
										name="Matriculas[residenteee]"
										id="Matriculas_residenteee"
										maxlength="200"  />
								</td>
							</tr>

							<tr>
								<td>Localidade:</td>
								<td>
									<input
										type="text"
										size="50"
										name="Matriculas[localidadeee]"
										id="Matriculas_localidadeee"
										maxlength="200"  />
								</td>
							</tr>
							<tr>
								<td>Cód. Postal:</td>
								<td>
									<input
										type="text"
										size="50"
										name="Matriculas[codpostalee]"
										id="Matriculas_codpostalee"
										maxlength="200"  />
								</td>
							</tr>
							<tr>
								<td>Telefone da Residência ou Telemóvel:</td>
								<td>
									<input
										type="text"
										size="50"
										name="Matriculas[telefoneresidenciaee]"
										id="Matriculas_telefoneresidenciaee"
										maxlength="200"  />
								</td>
							</tr>
							<tr>
								<td>Telefone do Local de Trabalho:</td>
								<td>
									<input
										type="text"
										size="50"
										name="Matriculas[telefonetrabalhoee]"
										id="Matriculas_telefonetrabalhoee"
										maxlength="200"  />
								</td>
							</tr>
							<tr>
								<td>Grau de Parentesco:</td>
								<td>
									<input
										type="text"
										size="50"
										name="Matriculas[parentescoee]"
										id="Matriculas_parentescoee"
										maxlength="200"  />
								</td>
							</tr>
							<tr>
								<td colspan="2" align="center" bgcolor="#4F4F4F">
									<font color="#FFFFFF">SITUAÇÃO NO ÚLTIMO ANO EM QUE ESTEVE MATRICULADO</font>
								</td>
							</tr>
							<tr>
								<td>Ano Lectivo de:</td>
								<td>
									<input
										type="text"
										size="50"
										name="Matriculas[ultimoanolectivo]"
										id="Matriculas_ultimoanolectivo"
										maxlength="200"
										value="2010/2011"  />
								</td>
							</tr>
							<tr>
								<td>Ano de Escolaridade:</td>
								<td>
									<input
										type="text"
										size="50"
										name="Matriculas[ultimoanoescolaridade]"
										id="Matriculas_ultimoanoescolaridade"
										maxlength="200"  />
								</td>
							</tr>
							<tr>
								<td>Turma:</td>
								<td>
									<input
										type="text"
										size="50"
										name="Matriculas[ultimoanoturma]"
										id="Matriculas_ultimoanoturma"
										maxlength="200"  />
								</td>
							</tr>
							<tr>
								<td>Curso:</td>
								<td>
									<input
										type="text"
										size="50"
										name="Matriculas[ultimoanocurso]"
										id="Matriculas_ultimoanocurso"
										maxlength="200"
										value="Geral"  />
								</td>
							</tr>
							<tr>
								<td>Escola:</td>
								<td>
									<input
										type="text"
										size="50"
										name="Matriculas[ultimoanoescola]"
										id="Matriculas_ultimoanoescola"
										maxlength="200"
										value="<?php echo Yii::app()->db->createCommand('select escola_nome from escolas WHERE id_escola=1')->queryScalar(); ?>"  />
								</td>
							</tr>
							<tr>
								<td>Teve apoio no âmbito da Educação Especial?</td>
								<td><select size="1" name="Matriculas[apoioespecial]">
										<option selected="selected" value="Não">Não</option>
										<option value="Sim">Sim</option>
								</select></td>
							</tr>
							<tr>
								<td>Precisa de apoio no âmbito da Educação Especial?</td>
								<td><select size="1"
									name="Matriculas[precisaapoioespecial]">
										<option selected="selected" value="Não">Não</option>
										<option value="Sim">Sim</option>
								</select></td>
							</tr>
							<tr>
								<td>Língua Estrangeira: Iniciada no 5º ano:</td>
								<td>
									<select
										id="Matriculas_estrangeira"
										name="Matriculas[estrangeira]">
										<option value="Inglês" selected="selected" >Inglês</option>
										<option value="Francês">Francês</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Iniciada no 7º ano:</td>
								<td>
									<select
										id="Matriculas_estrangeiraa"
										name="Matriculas[estrangeiraa]">
										<option value="Inglês" selected="selected" >Inglês</option>
										<option value="Francês">Francês</option>
										<option value="Espanhol">Espanhol</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Iniciada no 10º ano:</td>
								<td>
									<select
										id="Matriculas_estrangeiraaa"
										name="Matriculas[estrangeiraaa]">
										<option value="Nenhuma" selected="selected" >Nenhuma</option>
										<option value="Inglês" >Inglês</option>
										<option value="Francês">Francês</option>
										<option value="Espanhol">Espanhol</option>
									</select>

								</td>
							</tr>

							<tr>
								<td colspan="2" align="center" bgcolor="#4F4F4F">
								<font color="#FFFFFF">MELHORIA DE NOTA</font>
								</td>
							</tr>
							<tr>
								<td colspan="2" align="center">
								<textarea
										name="Matriculas[disciplinas_melhoria]"
										id="Matriculas_disciplinas_melhoria"
										rows="4"
										cols="75">--</textarea>
								</td>
							</tr>
							<tr>
								<td colspan="2" align="center" bgcolor="#4F4F4F">
									<font color="#FFFFFF">DISCIPLINAS EM ATRASO</font>
								</td>
							</tr>
							<tr>
								<td colspan="2" align="center">
								<textarea
										name="Matriculas[disciplinas_em_atraso]"
										id="Matriculas_disciplinas_em_atraso"
										rows="4"
										cols="75">--</textarea>
								</td>
							</tr>
							<tr>
								<td colspan="2" align="center" bgcolor="#4F4F4F">
									<font color="#FFFFFF">OUTRAS CONSIDERAÇÕES/Observações</font>
								</td>
							</tr>
							<tr valign="top">
								<td colspan="2" align="center">
									<textarea
										name="Matriculas[observacoes]"
										id="Matriculas_observacoes"
										rows="4"
										cols="75">--</textarea>
								</td>
							</tr>
							<tr>
								<td colspan="2" align="center" bgcolor="#4F4F4F">
									<font color="#FFFFFF">Pagamentos</font>
								</td>
							</tr>
								<td colspan="2" align="center">
									<label for="Matriculas_campos_extra1" id="Matriculas_campos_extra1_titulo">Opção 1</label>
									<select
										id="Matriculas_campos_extra1"
										name="Matriculas[campos_extra1]">
										<option value="Não aplicável">Não aplicável</option>
									</select><br/>
									<label for="Matriculas_campos_extra2" id="Matriculas_campos_extra2_titulo">Opção 2</label>
									<select
										id="Matriculas_campos_extra2"
										name="Matriculas[campos_extra2]">
										<option value="Não aplicável">Não aplicável</option>
									</select><br/>
									<label for="Matriculas_campos_extra3" id="Matriculas_campos_extra3_titulo">Opção 3</label>
									<select
										id="Matriculas_campos_extra3"
										name="Matriculas[campos_extra3]">
										<option value="Não aplicável">Não aplicável</option>
									</select>
									<input
										type="hidden"
										name="Matriculas[campos_extra4]"
										id="Matriculas_campos_extra4"
										value="--">
									<input
										type="hidden"
										name="Matriculas[observacoes_internas]"
										id="Matriculas_observacoes_internas"
										value="--">
									<input
										type="hidden"
										name="Matriculas[activa]"
										id="Matriculas_activa"
										value="1">
									<input
										type="hidden"
										name="Matriculas[paga]"
										id="Matriculas_paga"
										value="0">
									<input
										type="hidden"
										name="Matriculas[anulada]"
										id="Matriculas_anulada"
										value="0">
									<input
										type="hidden"
										name="Matriculas[processada]"
										id="Matriculas_processada"
										value="0">
									<input
										type="hidden"
										name="Matriculas[data_criacao]"
										id="Matriculas_data_criacao"
										value="2012-01-01 00:00:00">
									<input
										type="hidden"
										name="Matriculas[gerarreferenciamultibanco]"
										id="Matriculas_gerarreferenciamultibanco"
										value="--">

								</td>
							</tr>
							<tr>
								<td colspan="2"  align="center">
									<input
										type="submit"
										style="width: 250px; height: 90px;"
										name="enviardados"
										id="enviardados"
										value="Enviar"/>
										<!-- disabled="disabled"  -->
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<b>Toda a informação inserida deverá corresponder à verdade.</b><br/>
						<!--  <h3><u>WEBSITE EM VERSÃO DE TESTES(Ver data oficial de sua Matrícula On-line)</u></h3>-->
					</td>
				</tr>
			</table>
		</form>

	</div>

<div id="footer">
	<div class="container">
    	<div id="footer-right">
			<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php" target="_self">Voltar à página inicial</a>
        </div>
			<?php echo $rodape; ?>
        <br class="clear">
  </div>
</div>



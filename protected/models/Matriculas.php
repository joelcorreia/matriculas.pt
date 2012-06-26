<?php

/**
 * This is the model class for table "matriculas".
 *
 * The followings are the available columns in table 'matriculas':
 * @property integer $nmatricula
 * @property string $ano_a_se_inscreve
 * @property string $lista_cursos
 * @property string $lista_opcao_b
 * @property string $lista_opcao_c
 * @property string $moral
 * @property string $saida
 * @property string $erenovacaomatricula
 * @property string $estabelecimento
 * @property string $ano
 * @property string $anolectivode
 * @property string $escola
 * @property string $campos_extra1
 * @property string $campos_extra2
 * @property string $campos_extra3
 * @property string $campos_extra4
 * @property string $transporte
 * @property string $embarque
 * @property string $nomecompleto
 * @property string $nacionalidade
 * @property string $naturaldafreguesia
 * @property string $concelho
 * @property string $distrito
 * @property string $datanasc
 * @property string $bi
 * @property string $segsocial
 * @property string $email
 * @property string $residente
 * @property string $localidade
 * @property string $codpostal
 * @property string $telefone
 * @property string $filhoA
 * @property string $profissaoA
 * @property string $filhoB
 * @property string $profissaoB
 * @property string $nomecompletoee
 * @property string $profissaoee
 * @property string $residenteee
 * @property string $localidadeee
 * @property string $codpostalee
 * @property string $telefoneresidenciaee
 * @property string $telefonetrabalhoee
 * @property string $parentescoee
 * @property string $ultimoanolectivo
 * @property string $ultimoanoescolaridade
 * @property string $ultimoanoturma
 * @property string $ultimoanocurso
 * @property string $ultimoanoescola
 * @property string $apoioespecial
 * @property string $precisaapoioespecial
 * @property string $estrangeira
 * @property string $estrangeiraa
 * @property string $estrangeiraaa
 * @property string disciplinas_melhoria
 * @property string disciplinas_em_atraso
 * @property string $observacoes
 * @property string $identificacao_fiscal
 * @property string $utente_saude
 * @property string $abono
 * @property string $vacinas
 * @property string $n_cartao_estudante
 * @property string $observacoes_internas
 * @property integer $estado
 * @property string $gerarreferenciamultibanco
 */
class Matriculas extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Matriculas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'matriculas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ano_a_se_inscreve, lista_cursos, lista_opcao_b, lista_opcao_c, moral, saida, erenovacaomatricula, estabelecimento, ano, anolectivode, escola, campos_extra1, campos_extra2, campos_extra3, campos_extra4, transporte, embarque, nomecompleto, nacionalidade, naturaldafreguesia, concelho, distrito, datanasc, bi, segsocial, email, residente, localidade, codpostal, telefone, filhoA, profissaoA, filhoB, profissaoB, nomecompletoee, profissaoee, residenteee, localidadeee, codpostalee, telefoneresidenciaee, telefonetrabalhoee, parentescoee, ultimoanolectivo, ultimoanoescolaridade, ultimoanoturma, ultimoanocurso, ultimoanoescola, apoioespecial, precisaapoioespecial, estrangeira, estrangeiraa, estrangeiraaa, disciplinas_em_atraso, disciplinas_melhoria, observacoes, identificacao_fiscal, utente_saude, abono, vacinas, n_cartao_estudante, observacoes_internas, activa,paga,anulada,processada,data_criacao, gerarreferenciamultibanco', 'required'),
			array('activa,paga,anulada,processada', 'numerical', 'integerOnly'=>true),
			array('ano_a_se_inscreve, lista_cursos, lista_opcao_b, lista_opcao_c, moral, saida, erenovacaomatricula, estabelecimento, ano, anolectivode, escola, campos_extra1, campos_extra2, campos_extra3, campos_extra4, transporte, embarque, nomecompleto, nacionalidade, naturaldafreguesia, concelho, distrito, datanasc, bi, segsocial, email, residente, localidade, codpostal, telefone, filhoA, profissaoA, filhoB, profissaoB, nomecompletoee, profissaoee, residenteee, localidadeee, codpostalee, telefoneresidenciaee, telefonetrabalhoee, parentescoee, ultimoanolectivo, ultimoanoescolaridade, ultimoanoturma, ultimoanocurso, ultimoanoescola, apoioespecial, precisaapoioespecial, estrangeira, estrangeiraa, estrangeiraaa, disciplinas_em_atraso, disciplinas_melhoria, identificacao_fiscal, utente_saude, abono, vacinas, n_cartao_estudante, gerarreferenciamultibanco', 'length', 'max'=>200),
			array('observacoes, observacoes_internas', 'length', 'max'=>2000),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('nmatricula,ano_a_se_inscreve,lista_cursos,nomecompleto,bi,n_cartao_estudante,observacoes_internas,activa,paga,anulada,processada ', 'safe', 'on'=>'search'),

		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'nmatricula' => 'N.º Matricula',
			'ano_a_se_inscreve' => 'Ano em que se inscreve',
			'lista_cursos' => 'Cursos',
			'lista_opcao_b' => 'Opção B',
			'lista_opcao_c' => 'Opção C',
			'moral' => 'Educação Moral e Católica',
			'saida' => 'Permissões de saída',
			'erenovacaomatricula' => 'Renovação',
			'estabelecimento' => 'Estabelecimento',
			'ano' => 'Ano',
			'anolectivode' => 'Ano lectivo',
			'escola' => 'Escola',
			'campos_extra1' => 'Campo pagamento opção 1',
			'campos_extra2' => 'Campo pagamento opção 2',
			'campos_extra3' => 'Campo pagamento opção 3',
			'campos_extra4' => 'Total a pagar',
			'transporte' => 'Transporte',
			'embarque' => 'Embarque',
			'nomecompleto' => 'Nome',
			'nacionalidade' => 'Nacionalidade',
			'naturaldafreguesia' => 'Naturalidade',
			'concelho' => 'Concelho',
			'distrito' => 'Distrito',
			'datanasc' => 'Data de nascimento',
			'bi' => 'Cartão de cidadão/BI',
			'segsocial' => 'Segurança Social',
			'email' => 'Email',
			'residente' => 'Residente em ',
			'localidade' => 'Localidade',
			'codpostal' => 'Código postal',
			'telefone' => 'Telefone',
			'filhoA' => 'Filho de',
			'profissaoA' => 'Profissão',
			'filhoB' => 'Filho de',
			'profissaoB' => 'Profissão',
			'nomecompletoee' => 'Nome Enc. Edu.',
			'profissaoee' => 'Profissão Enc. Edu.',
			'residenteee' => 'Residente em',
			'localidadeee' => 'Localidade',
			'codpostalee' => 'Codigo postal',
			'telefoneresidenciaee' => 'Telefone da residência',
			'telefonetrabalhoee' => 'Telefone do trabalho',
			'parentescoee' => 'Parentesco',
			'ultimoanolectivo' => 'Ultimo ano lectivo',
			'ultimoanoescolaridade' => 'Ultimo ano escolaridade',
			'ultimoanoturma' => 'Ultimo ano turma',
			'ultimoanocurso' => 'Ultimo ano curso',
			'ultimoanoescola' => 'Ultimo ano escola',
			'apoioespecial' => 'Tipo de Apoio especial',
			'precisaapoioespecial' => 'Precisa de apoio especial',
			'estrangeira' => 'Ling. Estrangeira 1',
			'estrangeiraa' => 'Ling. Estrangeira 2',
			'estrangeiraaa' => 'Ling. Estrangeira 3',
			'disciplinas_melhoria' => 'Disciplinas em melhoria',
			'disciplinas_em_atraso' => 'Disciplinas em atraso',
			'observacoes' => 'Observações',
			'identificacao_fiscal' => 'N.º de Identificacao Fiscal',
			'utente_saude' => 'N.º Utente Saude',
			'abono' => 'Abono',
			'vacinas' => 'Vacinas em dia',
			'n_cartao_estudante' => 'N.º Cartao Estudante',
			'observacoes_internas' => 'Observações Internas',
			'activa' => 'Activa',
			'paga' => 'Paga',
			'anulada' => 'Anulada',
			'processada' => 'Processada',
			'data_criacao' => 'Data de criação',
			'gerarreferenciamultibanco' => 'Referência multibanco',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('nmatricula',$this->nmatricula);
		$criteria->compare('ano_a_se_inscreve',$this->ano_a_se_inscreve,true);
		$criteria->compare('lista_cursos',$this->lista_cursos,true);
		$criteria->compare('nomecompleto',$this->nomecompleto,true);
		$criteria->compare('bi',$this->bi,true);
		$criteria->compare('n_cartao_estudante',$this->n_cartao_estudante,true);
		$criteria->compare('observacoes_internas',$this->observacoes_internas,true);
		$criteria->compare('activa',$this->activa);
		$criteria->compare('paga',$this->paga);
		$criteria->compare('anulada',$this->anulada);
		$criteria->compare('processada',$this->processada);


		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public static function devolve_html_referencia_multibanco($nmatricula)
	{
		$valor_a_pagar = Matriculas::devolve_valor_a_pagar($nmatricula);
		if($valor_a_pagar>0)
		{
		return '
		<table>
			<tr>
				<td colspan="2">Dados de Pagamento</td>
			</tr>
			<tr>
				<td colspan="2"><img src="/images/upload/multibanco_s.jpg" alt="multibanco" /></td>
			</tr>
			<tr>
				<td>Entidade:</td>
				<td>' . Yii::app()->params['mb_entidade']  .'</td>
			</tr>
			<tr>
				<td>Referencia:</td>
				<td>' . Matriculas::devolve_referencia_multibanco($nmatricula) . '</td>
			</tr>
			<tr>
				<td>Valor:</td>
				<td>' . $valor_a_pagar . '&#8364;</td>
			</tr>
		</table>
		';
		}
		else
		{
			return "Isento de Pagamento.";
		}
	}
	public static function devolve_valor_a_pagar($nmatricula)
	{
		$conn = Yii::app()->db;
		$command= $conn->createCommand('SELECT campos_extra4 FROM matriculas WHERE nmatricula=:nmatricula UNION SELECT 0');
		$command->bindParam(":nmatricula",$nmatricula, PDO::PARAM_INT);
		return  $command->queryScalar();
	}
	public static function devolve_valor_a_pagar_ref_ano($ano_a_se_inscreve)
	{
		$conn = Yii::app()->db;
		$command= $conn->createCommand('SELECT valor_a_pagar FROM anos WHERE designacao=:ano_a_se_inscreve UNION SELECT 0');
		$command->bindParam(":ano_a_se_inscreve",$ano_a_se_inscreve, PDO::PARAM_STR);
		return  $command->queryScalar();
	}
	public static function devolve_referencia_multibanco($nmatricula)
	{
		if($nmatricula>=0 && $nmatricula<1000)
			return Yii::app()->params['mb_referencia_inicial'] + ($nmatricula);
		else
			return devolve_referencia_multibanco($nmatricula-1000);
	}
	public static function get_paga_Options(){
	    return array('0' => 'Pagamento pendente', '1' => 'Pagamento efectuado');
	}
	public static function get_processada_Options(){
	    return array('0' => 'Pendentes', '1' => 'Processadas');
	}
	public static function get_anulada_Options(){
	    return array('0' => 'Activas', '1' => 'Anuladas');
	}

	public static function envia_estado_da_matricula($nmatricula)
	{
		$mensagem_info = '';

		try {

			$conn = Yii::app()->db;

			$command= $conn->createCommand('SELECT escola_nome,escola_email,email_remetente,email_destinatario,nmatricula,ano_a_se_inscreve,email,nomecompleto,paga,anulada,processada FROM escolas,matriculas WHERE id_escola=1 AND nmatricula=:nmatricula;');
			$command->bindParam(":nmatricula",$nmatricula, PDO::PARAM_INT);
			$resultados = $command->queryRow();

    		$from_name = $resultados['escola_nome'];
    		$from_email = $resultados['email_remetente'];
    		$to_name = $resultados['nomecompleto'];
    		$to_email = $resultados['email'];


   			$subject = sprintf("Matricula N.º %d",$nmatricula);
   			$message = sprintf("Detalhes da matricula N.&ordm %d <br/> Estado: %s <br/> Pagamento: %s <br/> %s",$nmatricula,($resultados['processada']?"Processada":"Pendente"),($resultados['paga']?"Paga":"Pendente"),($resultados['paga']? "" : Matriculas::devolve_html_referencia_multibanco($nmatricula,$resultados['ano_a_se_inscreve'])));

  			require Yii::getPathOfAlias('application.extensions').'/phpmailer/class.phpmailer.php';

			$mail = new PHPMailer(true); //defaults to using php "mail()"; the true param means it will throw exceptions on errors, which we need to catch
			$mail->CharSet = 'UTF-8';
			try {

			  $mail->AddAddress($to_email,$to_name);
			  $mail->AddReplyTo($from_email,$from_name);
			  $mail->SetFrom($from_email, $from_name);
			  $mail->Subject = $subject;
			  $mail->AltBody = $message;
			  $mail->MsgHTML($message);

			  $mail->Send();
			  $mensagem_info = '<h6>Email enviado</h6><br/><b>Para:</b><br/>' . $to_email . '<br/><b>Assunto:</b><br/>' . $subject . '<br/><b>Mensagem:</b><br/>' . $message;

			} catch (phpmailerException $e) {
			  $mensagem_info = $e->errorMessage(); //Pretty error messages from PHPMailer
			} catch (Exception $e) {
			 $mensagem_info = $e->getMessage(); //Boring error messages from anything else!
			}



		} catch (Exception $e) {

			$mensagem_info = '<h6>Email não enviado</h6><br/>' . $e->getMessage() . "<br/>" . $message ;
		}

		return $mensagem_info;
	}

}
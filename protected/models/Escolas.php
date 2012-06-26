<?php

/**
 * This is the model class for table "escolas".
 *
 * The followings are the available columns in table 'escolas':
 * @property integer $id_escola
 * @property string $escola_nome
 * @property string $escola_email
 * @property string $escola_url
 * @property string $cabecalho
 * @property string $coluna1
 * @property string $coluna2
 * @property string $coluna3
 * @property string $rodape
 * @property string $logotipo
 * @property string $email_remetente
 * @property string $url_matriculas
 * @property string $observacoes
 */
class Escolas extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Escolas the static model class
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
		return 'escolas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('escola_nome, escola_email, escola_url, cabecalho, coluna1, coluna2, coluna3, rodape, logotipo, email_remetente, email_destinatario, url_matriculas, observacoes', 'required'),
			array('escola_nome, escola_email, escola_url, logotipo, email_remetente, email_destinatario, url_matriculas', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_escola', 'safe', 'on'=>'search'),
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
			'id_escola' => 'Id Escola',
			'escola_nome' => 'Escola Nome',
			'escola_email' => 'Escola Email',
			'escola_url' => 'Escola Url',
			'cabecalho' => 'Cabecalho',
			'coluna1' => 'Coluna1',
			'coluna2' => 'Coluna2',
			'coluna3' => 'Coluna3',
			'rodape' => 'Rodape',
			'logotipo' => 'Logotipo',
			'email_remetente' => 'Email Remetente',
			'email_destinatario' => 'Email Destinatario',
			'url_matriculas' => 'Url Matriculas',
			'observacoes' => 'Observacoes',
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

		$criteria->compare('id_escola',$this->id_escola);
		$criteria->compare('escola_nome',$this->escola_nome,true);
		$criteria->compare('escola_email',$this->escola_email,true);
		$criteria->compare('escola_url',$this->escola_url,true);
		$criteria->compare('cabecalho',$this->cabecalho,true);
		$criteria->compare('coluna1',$this->coluna1,true);
		$criteria->compare('coluna2',$this->coluna2,true);
		$criteria->compare('coluna3',$this->coluna3,true);
		$criteria->compare('rodape',$this->rodape,true);
		$criteria->compare('logotipo',$this->logotipo,true);
		$criteria->compare('email_remetente',$this->email_remetente,true);
		$criteria->compare('email_destinatario',$this->email_destinatario,true);
		$criteria->compare('url_matriculas',$this->url_matriculas,true);
		$criteria->compare('observacoes',$this->observacoes,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
<?php

/**
 * This is the model class for table "anos".
 *
 * The followings are the available columns in table 'anos':
 * @property integer $id
 * @property string $designacao
 * @property string $data_disponivel_de
 * @property string $data_disponivel_ate
 * @property string $valor_a_pagar
 * @property integer $activo
 * @property string $opcao_1_titulo
 * @property string $opcao_1_valor_a_pagar
 * @property integer $opcao_1_activo
 * @property string $opcao_2_titulo
 * @property string $opcao_2_valor_a_pagar
 * @property integer $opcao_2_activo
 * @property string $opcao_3_titulo
 * @property string $opcao_3_valor_a_pagar
 * @property integer $opcao_3_activo
 * @property integer $id_tree
 */
class Anos extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Anos the static model class
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
		return 'anos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('designacao, data_disponivel_de, data_disponivel_ate, valor_a_pagar, activo, opcao_1_titulo, opcao_1_valor_a_pagar, opcao_1_activo, opcao_2_titulo, opcao_2_valor_a_pagar, opcao_2_activo, opcao_3_titulo, opcao_3_valor_a_pagar, opcao_3_activo,id_tree', 'required'),
			array('activo, opcao_1_activo, opcao_2_activo, opcao_3_activo,id_tree', 'numerical', 'integerOnly'=>true),
			array('designacao, opcao_1_titulo, opcao_2_titulo, opcao_3_titulo', 'length', 'max'=>128),
			array('valor_a_pagar, opcao_1_valor_a_pagar, opcao_2_valor_a_pagar, opcao_3_valor_a_pagar', 'length', 'max'=>8),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'designacao' => 'Designacao',
			'data_disponivel_de' => 'Data disponivel de',
			'data_disponivel_ate' => 'Data disponivel até',
			'valor_a_pagar' => 'Valor a pagar',
			'activo' => 'Activo',
			'opcao_1_titulo' => 'Título da 1ª opção',
			'opcao_1_valor_a_pagar' => '1ª Opção para pagamento',
			'opcao_1_activo' => '1ª opção activa',
			'opcao_2_titulo' => 'Título da 2ª opção',
			'opcao_2_valor_a_pagar' => '2ª Opção para pagamento',
			'opcao_2_activo' => '2ª opção activa',
			'opcao_3_titulo' => 'Título da 3ª opção',
			'opcao_3_valor_a_pagar' => '3ª Opção para pagamento',
			'opcao_3_activo' => '3ª opção activa',
			'id_tree' => 'Id tree',
		);
	}

	public function get_id_tree_Options()
	{
		$conn = Yii::app()->db;
		$command= $conn->createCommand('SELECT `id`,`title` FROM `tree` WHERE `level`=1 ORDER BY `position`');

		$rows = array();
		$dataReader=$command->query();
		while(($row=$dataReader->read())!==false) {
			$rows[$row['id']] = $row['title'];
		}
	    return $rows;
	    //return array('Predio' => 'Predio', 'Moradia' => 'Moradia');
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

		$criteria->compare('id',$this->id);


		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort'=>array(
	            'defaultOrder'=>'id ASC',
	        ),
	        'pagination'=>array(
	            'pageSize'=>12
	        ),
		));
	}
}
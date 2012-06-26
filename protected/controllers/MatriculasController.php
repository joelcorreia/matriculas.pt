<?php

class MatriculasController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow', // allow authenticated user to perform:
				'actions'=>array('index','view','update','admin','paga','anulada','processada','email'),
				'users'=>array('@'),
			),
			array('allow', // allow all users to perform:
				'actions'=>array('create',),
				'users'=>array('*'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->layout='/layouts/nothing_html';
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Matriculas;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Matriculas']))
		{
			$model->attributes=$_POST['Matriculas'];
			$model->campos_extra4 = $model->campos_extra1 + $model->campos_extra2 + $model->campos_extra3 + Matriculas::devolve_valor_a_pagar_ref_ano($model->ano_a_se_inscreve);
			if($model->save())
			{
					$model->gerarreferenciamultibanco = Matriculas::devolve_referencia_multibanco($model->nmatricula);
					$conn = Yii::app()->db;
					$command= $conn->createCommand('UPDATE matriculas SET gerarreferenciamultibanco=:gerarreferenciamultibanco WHERE nmatricula=:nmatricula');
					$command->bindParam(":gerarreferenciamultibanco",$model->gerarreferenciamultibanco, PDO::PARAM_STR);
					$command->bindParam(":nmatricula",$model->nmatricula, PDO::PARAM_INT);
					$command->query();
					Yii::app()->controller->redirect(array('/inicial/confirmacao','id'=>$model->nmatricula));

			}
		}
		else
			$this->redirect('index','site');
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Matriculas']))
		{
			$model->attributes=$_POST['Matriculas'];
			if($model->save())
				$this->redirect(array('admin','id'=>$model->nmatricula));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Matriculas');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Matriculas('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Matriculas']))
			$model->attributes=$_GET['Matriculas'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Matriculas::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='matriculas-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}


	public function actionPaga($id)
	{
		$model=$this->loadModel($id);

		$conn = Yii::app()->db;
		$command= $conn->createCommand('UPDATE matriculas SET paga =1 WHERE nmatricula=:nmatricula;'); //-pago
		$command->bindParam(":nmatricula",$model->nmatricula, PDO::PARAM_STR);
		$command->query();

		$mensagem_info = 'Assinalado como paga';
		$mensagem_alerta = '';

		$model=new Matriculas('search');
		$model->unsetAttributes();

		$this->render('admin',array(
			'model'=>$model,
			'mensagem_info' =>$mensagem_info,
		));
		//$this->redirect(array('admin'));

	}

	public function actionAnulada($id)
	{
		$model=$this->loadModel($id);

		$conn = Yii::app()->db;
		$command= $conn->createCommand('UPDATE matriculas SET anulada =1-anulada WHERE nmatricula=:nmatricula;');
		$command->bindParam(":nmatricula",$model->nmatricula, PDO::PARAM_STR);
		$command->query();

		$mensagem_info = 'Assinalado como anulada';
		$mensagem_alerta = '';

		$model=new Matriculas('search');
		$model->unsetAttributes();

		$this->render('admin',array(
			'model'=>$model,
			'mensagem_info' =>$mensagem_info,
		));
		//$this->redirect(array('admin'));

	}
	public function actionProcessada($id)
	{
		$model=$this->loadModel($id);

		$conn = Yii::app()->db;
		$command= $conn->createCommand('UPDATE matriculas SET processada =1 WHERE nmatricula=:nmatricula;');
		$command->bindParam(":nmatricula",$model->nmatricula, PDO::PARAM_STR);
		$command->query();

		$mensagem_info = 'Assinalado como processada.';
		$mensagem_alerta = '';

		$model=new Matriculas('search');
		$model->unsetAttributes();

		$this->render('admin',array(
			'model'=>$model,
			'mensagem_info' =>$mensagem_info,
		));
		//$this->redirect(array('admin'));

	}
	public function actionEmail($id)
	{
		$mensagem_info = Matriculas::envia_estado_da_matricula($id);

		$this->layout='/layouts/nothing_html';

		$this->render('email',array(
			'mensagem_info'=>$mensagem_info,
		));
	}
}

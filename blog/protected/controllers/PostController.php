<?php
class PostController extends Controller{
	public function actionIndex(){
		$model = new Post();
		if (isset($_POST['Post'])) {
			$model->attributes = $_POST['Post'];
			//$parser=new CMarkdownParser;
			//var_dump($model->content);
			//Yii::app()->end();
			//$model->content= $parser->safeTransform($model->content);
			if($model->save()){
				$this->redirect(array('view','id'=>$model->id));
			}
		}
		$this->render('index',array('model'=>$model));
	}
	public function actionPreview()
	{
		$parser=new CMarkdownParser;
		
		
		echo $parser->safeTransform($_POST['Post'][$_GET['attribute']]);
	}
	public function actionView($id){
		$model= $this->loadModel($id);
		$parser=new CMarkdownParser;
		$model->content= $parser->safeTransform($model->content);
		$this->render('view',array('model'=>$model));
	}
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Facility the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Post::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
	
}
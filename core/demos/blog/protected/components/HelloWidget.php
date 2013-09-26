<?php
Yii::import('zii.widgets.CPortlet');
/**
 * extends CPorlet or CWidget
 * */
class HelloWidget extends CPortlet{
	protected  $_message = '';
	public $title='hello Widget';

	/* 	public function init(){
		//for init data
	} */
	
	public function renderContent(){
		$this->_message = 'render';
		$this->render('helloWidget');
	}  
 
}
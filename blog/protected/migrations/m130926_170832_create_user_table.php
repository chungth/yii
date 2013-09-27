<?php

class m130926_170832_create_user_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('cg_post',array(
			'id'=>'pk',
			'content'=>'text'
		));
	}

	public function down()
	{
		$this->dropTable('cg_post');
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}
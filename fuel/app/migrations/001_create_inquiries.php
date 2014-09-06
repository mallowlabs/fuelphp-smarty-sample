<?php

namespace Fuel\Migrations;

class Create_inquiries
{
	public function up()
	{
		if (\Fuel::$env == \Fuel::PRODUCTION) {
			\DBUtil::create_table('inquiries', array(
				'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
				'name' => array('constraint' => 255, 'type' => 'varchar'),
				'email' => array('constraint' => 255, 'type' => 'varchar'),
				'body' => array('type' => 'text'),
				'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
				'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			), array('id'));
		} else {
			\DBUtil::create_table('inquiries', array(
				'id' => array('type' => 'integer primary key', 'autoincrement' => true,),
				'name' => array('type' => 'text'),
				'email' => array('type' => 'text'),
				'body' => array('type' => 'text'),
				'created_at' => array('type' => 'integer', 'null' => true),
				'updated_at' => array('type' => 'integer', 'null' => true),
			));
		}

	}

	public function down()
	{
		\DBUtil::drop_table('inquiries');
	}
}

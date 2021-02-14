<?php

class Migration_Project extends CI_Migration {

	public function up() {
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'auto_increment' => TRUE
			),
			'title' => array(
				'type' => 'VARCHAR',
				'constraint' => 128
			),
			'description' => array(
				'type' => 'LONGTEXT',
				'null' => TRUE
			),
			'priority' => array(
				'type' => 'INTEGER',
				'constraint' => 11,
				'null' => TRUE
			),
			'image' => array(
				'type' => 'VARCHAR',
				'constraint' => '128',
				'null' => TRUE
			),
			'image_url' => array(
				'type' => 'VARCHAR',
				'constraint' => '254',
				'null' => TRUE
			),
			'date' => array(
				'type' => 'VARCHAR',
				'constraint' => 32,
				'null' => TRUE
			),
			'content' => array(
				'type' => 'LONGTEXT',
				'null' => TRUE
			),

			'last_update' => array(
				'type' => 'TIMESTAMP'
			),
			'create_date' => array(
				'type' => 'TIMESTAMP'
			)
		));

		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('project');

		$data = [];
		$data['title'] = 'Card Object detection';
		$data['description'] = 'Deep Learning and Web developer';
		$data['priority'] = 1;
		$data['image'] = '';
		$data['image_url'] = '';
		$data['date'] = '';
		$data['content'] = '';
		$this->db->insert('project', $data);

	}


	public function down() {

		$this->dbforge->drop_table('project');

	}

}

<?php

class Migration_Experience extends CI_Migration {

	public function up() {
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'auto_increment' => TRUE
			),
			'company' => array(
				'type' => 'VARCHAR',
				'constraint' => 32
			),
			'position' => array(
				'type' => 'VARCHAR',
				'constraint' => 128,
				'null' => TRUE
			),

			'priority' => array(
				'type' => 'INTEGER',
				'constraint' => 11,
				'null' => TRUE
			),
			'image_name' => array(
				'type' => 'VARCHAR',
				'constraint' => 128,
				'null' => TRUE
			),
			'start_date' => array(
				'type' => 'VARCHAR',
				'constraint' => 32,
				'null' => TRUE
			),
			'end_date' => array(
				'type' => 'VARCHAR',
				'constraint' => 32,
				'null' => TRUE
			),
			'location' => array(
				'type' => 'VARCHAR',
				'constraint' => 32,
				'null' => TRUE
			),
			'message' => array(
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
		$this->dbforge->create_table('experience');

		$data = [];
		$data['company'] = 'Ixaya';
		$data['position'] = 'Deep Learning and Web developer';
		$data['priority'] = 1;
		$data['image_name'] = '';
		$data['start_date'] = 'May 2020';
		$data['end_date'] = '';
		$data['location'] = 'Leon, Gto';
		$this->db->insert('experience', $data);

	}

	public function down() {
		$this->dbforge->drop_table('experience');
	}
}

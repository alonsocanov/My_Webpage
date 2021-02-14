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
				'constraint' => 64
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
			'logo' => array(
				'type' => 'VARCHAR',
				'constraint' => '128',
				'null' => TRUE
			),
			'logo_url' => array(
				'type' => 'VARCHAR',
				'constraint' => '254',
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
		$this->dbforge->create_table('experience');

		$data = [];
		$data['company'] = 'Ixaya';
		$data['position'] = 'Deep Learning and Web developer';
		$data['priority'] = 1;
		$data['logo'] = '';
		$data['logo_url'] = '';
		$data['start_date'] = 'May 2020';
		$data['end_date'] = '';
		$data['location'] = 'Leon, Gto';
		$data['content'] = '';
		$this->db->insert('experience', $data);

		$data['company'] = 'AFD Technologies';
		$data['position'] = 'Machine Learning Project Manager';
		$data['priority'] = 1;
		$data['logo'] = '';
		$data['logo_url'] = '';
		$data['start_date'] = 'May 2020';
		$data['end_date'] = '';
		$data['location'] = 'Paris, France';
		$data['content'] = '';
		$this->db->insert('experience', $data);

		$data['company'] = 'Electronics and Electromagnetism Laboratory (L2E)';
		$data['position'] = 'Reserch Internship';
		$data['priority'] = 1;
		$data['logo'] = '';
		$data['logo_url'] = '';
		$data['start_date'] = 'May 2020';
		$data['end_date'] = '';
		$data['location'] = 'Paris, France';
		$data['content'] = '';
		$this->db->insert('experience', $data);

	}

	public function down() {
		$this->dbforge->drop_table('experience');
	}
}

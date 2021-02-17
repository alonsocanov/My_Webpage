<?php

class Migration_Kind extends CI_Migration {

	public function up() {
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'auto_increment' => TRUE
			),
			'title' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE
			),
			'description' => array(
				'type' => 'VARCHAR',
				'constraint' => 128,
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
		$this->dbforge->create_table('kind');

		$data = [];
		$data['title'] = 'Projects';
		$data['description'] = 'Personal projects';
		$this->db->insert('kind', $data);

		$data = [];
		$data['title'] = 'Experience';
		$data['description'] = 'Profesional experience';
		$this->db->insert('kind', $data);

		$data = [];
		$data['title'] = 'Academic';
		$data['description'] = 'Academic formation';

		$this->db->insert('kind', $data);

		$data = [];
		$data['title'] = 'Skills';
		$data['description'] = 'The skills';
		$this->db->insert('kind', $data);

		$data = [];
		$data['title'] = 'Other';
		$data['description'] = 'Hobbys and extras';
		$this->db->insert('kind', $data);

	}

	public function down() {
		$this->dbforge->drop_table('kind');
	}
}

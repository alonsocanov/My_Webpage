<?php

class Migration_Front_Item extends CI_Migration {

	public function up() {
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'auto_increment' => TRUE
			),
			'title' => array(
				'type' => 'VARCHAR',
				'constraint' => 32
			),
			'description' => array(
				'type' => 'VARCHAR',
				'constraint' => 128,
				'null' => TRUE
			),
			'url' => array(
				'type' => 'VARCHAR',
				'constraint' => 128,
				'null' => TRUE
			),
			'kind' => array(
				'type' => 'INTEGER',
				'constraint' => 11
			),
			'faicon' => array(
				'type' => 'VARCHAR',
				'constraint' => 32,
				'null' => TRUE
			),
			'image_name' => array(
				'type' => 'VARCHAR',
				'constraint' => 32,
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
		$this->dbforge->create_table('front_item');

		$data = [];

		$data['title'] = 'Projects';
		$data['description'] = 'Personal projects';
		$data['kind'] = 1;
		$data['url'] = 'frontend/projects';
		$data['faicon'] = 'fa-code';
		$this->db->insert('front_item', $data);

		$data['title'] = 'Experience';
		$data['description'] = 'Profesional experience';
		$data['kind'] = 1;
		$data['url'] = 'frontend/experiences';
		$data['faicon'] = 'fa-briefcase';
		$this->db->insert('front_item', $data);

		$data['title'] = 'Education';
		$data['description'] = 'Academic Formation';
		$data['kind'] = 1;
		$data['url'] = 'education';
		$data['faicon'] = 'fa-graduation-cap';
		$this->db->insert('front_item', $data);


		$data['title'] = 'Github';
		$data['description'] = '';
		$data['kind'] = 4;
		$data['url'] = 'https://github.com/alonsocanov';
		$data['faicon'] = 'fa-github';
		$this->db->insert('front_item', $data);

		$data['title'] = 'Linked In';
		$data['description'] = '';
		$data['kind'] = 4;
		$data['url'] = 'https://www.linkedin.com/in/alonsocanovillarreal/';
		$data['faicon'] = 'fa-linkedin';
		$this->db->insert('front_item', $data);

		$data['title'] = 'Facebook';
		$data['description'] = '';
		$data['kind'] = 4;
		$data['url'] = 'https://www.facebook.com/alonso.cano.5';
		$data['faicon'] = 'fa-facebook';
		$this->db->insert('front_item', $data);

		$data['title'] = 'Twitter';
		$data['description'] = '';
		$data['kind'] = 4;
		$data['url'] = 'https://twitter.com/alonso_cano';
		$data['faicon'] = 'fa-twitter';
		$this->db->insert('front_item', $data);

		$data['title'] = 'Instagram';
		$data['description'] = '';
		$data['kind'] = 4;
		$data['url'] = 'https://www.instagram.com/alonsocanov/';
		$data['faicon'] = 'fa-instagram';
		$this->db->insert('front_item', $data);

	}

	public function down() {
		$this->dbforge->drop_table('front_item');
	}
}

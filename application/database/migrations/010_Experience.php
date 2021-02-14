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
		$data['content'] = '<div class="page" title="Page 1"><div class="layoutArea"><div class="column"><ul><li><p>The objective is to extract key data from policy documents in order to generate a data base</p></li><li><p>Used Deep Learning and Image Processing techniques for document classification and data extraction</p></li><li><p>Facilitates workers’ data filling process into the system</p></li></ul></div></div></div>';
		$this->db->insert('experience', $data);

		$data['company'] = 'AFD Technologies';
		$data['position'] = 'Machine Learning Project Manager';
		$data['priority'] = 1;
		$data['logo'] = '';
		$data['logo_url'] = '';
		$data['start_date'] = 'May 2020';
		$data['end_date'] = '';
		$data['location'] = 'Paris, France';
		$data['content'] = '<div class="page" title="Page 1"><div class="layoutArea"><p></p><p></p><ul><ul></ul></ul><p></p><p></p><p></p><ul><ul></ul></ul><p></p><p></p><ul></ul><p></p><ul><li>The goal of the project was to detect alarm anomalies on&nbsp;telecommunication&nbsp;services provided by Orange France</li></ul><p></p><ul></ul><p></p><ul><li>Used unsupervised algorithms for anomaly detection of alarm systems</li></ul><p></p><ul></ul><p></p><ul><li>Evaluated unsupervised algorithms with statistical criteria in order to determine the best-one according to data set</li></ul><p></p><ul></ul><p></p><ul><li>The models were implemented for testing phase</li></ul><p></p><ul></ul><p></p><ul><li>The time that the supervision team took to detect certain anomalies was&nbsp;reduced</li></ul></div></div>';
		$this->db->insert('experience', $data);

		$data['company'] = 'Electronics and Electromagnetism Laboratory (L2E)';
		$data['position'] = 'Reserch Internship';
		$data['priority'] = 1;
		$data['logo'] = '';
		$data['logo_url'] = '';
		$data['start_date'] = 'May 2020';
		$data['end_date'] = '';
		$data['location'] = 'Paris, France';
		$data['content'] = '<div class="page" title="Page 1"><div class="layoutArea"><div class="column"><ul><li><p>The objective was to determine trees position on forests using electromagnetic waves</p></li><li><p>Applied unbiased estimators in order to find the optimal aerial distribution with a certain phase and modulus</p></li><li><p>Accomplished to recreate Radar Imaging from obtained data for low density tree distribution</p></li></ul></div></div></div>';
		$this->db->insert('experience', $data);

	}


	public function down() {

		$this->dbforge->drop_table('experience');

	}

}

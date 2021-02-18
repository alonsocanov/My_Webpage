<?php

class Migration_Experience extends CI_Migration {

	public function up() {
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => '11',
				'auto_increment' => TRUE
			),
			'kind' => array(
				'type' => 'INT',
				'constraint' => '16'

			),
			'title' => array(
				'type' => 'VARCHAR',
				'constraint' => '64',
				'null' => TRUE
			),
			'description' => array(
				'type' => 'LONGTEXT',
				'null' => TRUE
			),
			'priority' => array(
				'type' => 'INT',
				'constraint' => '11',
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
			'video' => array(
				'type' => 'VARCHAR',
				'constraint' => '128',
				'null' => TRUE
			),
			'video_url' => array(
				'type' => 'VARCHAR',
				'constraint' => '254',
				'null' => TRUE
			),
			'url' => array(
				'type' => 'VARCHAR',
				'constraint' => '254',
				'null' => TRUE
			),
			'faicon' => array(
				'type' => 'VARCHAR',
				'constraint' => '32',
				'null' => TRUE
			),
			'start_date' => array(
				'type' => 'VARCHAR',
				'constraint' => '32',
				'null' => TRUE
			),
			'end_date' => array(
				'type' => 'VARCHAR',
				'constraint' => '32',
				'null' => TRUE
			),
			'location' => array(
				'type' => 'VARCHAR',
				'constraint' => '64',
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
		$data['kind'] = 1;
		$data['title'] = "Custom dataset for detecting cards' Club and Number";
		$data['description'] = "Object detection using Single Box MultiBox Detector (SSD) for playing cards' number and club";
		$data['priority'] = 1;
		$data['start_date'] = '2020';
		$data['content'] = '';
		$this->db->insert('experience', $data);

		$data = [];
		$data['kind'] = 1;
		$data['title'] = "Image Processing Camera Scanner";
		$data['description'] = "Using Canny edge detector and an Homagraphy a scanned document is obtained from a simple image";
		$data['priority'] = 1;
		$data['start_date'] = '2019';
		$data['content'] = '';
		$this->db->insert('experience', $data);

		$data = [];
		$data['kind'] = 2;
		$data['title'] = 'Ixaya';
		$data['description'] = 'Deep Learning and Web developer';
		$data['priority'] = 1;
		$data['start_date'] = 'May 2020';
		$data['end_date'] = '';
		$data['location'] = 'Leon, Gto';
		$data['content'] = '<div class="page" title="Page 1"><div class="layoutArea"><div class="column"><ul><li><p>The objective is to extract key data from policy documents in order to generate a data base</p></li><li><p>Used Deep Learning and Image Processing techniques for document classification and data extraction</p></li><li><p>Facilitates workers’ data filling process into the system</p></li></ul></div></div></div>';
		$this->db->insert('experience', $data);

		$data = [];
		$data['kind'] = 2;
		$data['title'] = 'AFD Technologies';
		$data['description'] = 'Machine Learning Project Manager';
		$data['priority'] = 1;
		$data['start_date'] = 'May 2020';
		$data['end_date'] = '';
		$data['location'] = 'Paris, France';
		$data['content'] = '<div class="page" title="Page 1"><div class="layoutArea"><p></p><p></p><ul><ul></ul></ul><p></p><p></p><p></p><ul><ul></ul></ul><p></p><p></p><ul></ul><p></p><ul><li>The goal of the project was to detect alarm anomalies on&nbsp;telecommunication&nbsp;services provided by Orange France</li></ul><p></p><ul></ul><p></p><ul><li>Used unsupervised algorithms for anomaly detection of alarm systems</li></ul><p></p><ul></ul><p></p><ul><li>Evaluated unsupervised algorithms with statistical criteria in order to determine the best-one according to data set</li></ul><p></p><ul></ul><p></p><ul><li>The models were implemented for testing phase</li></ul><p></p><ul></ul><p></p><ul><li>The time that the supervision team took to detect certain anomalies was&nbsp;reduced</li></ul></div></div>';
		$this->db->insert('experience', $data);
		$data = [];
		$data['kind'] = 2;
		$data['title'] = 'Electronics and Electromagnetism Laboratory (L2E)';
		$data['description'] = 'Reserch Internship';
		$data['priority'] = 1;
		$data['start_date'] = 'May 2020';
		$data['end_date'] = '';
		$data['location'] = 'Paris, France';
		$data['content'] = '<div class="page" title="Page 1"><div class="layoutArea"><div class="column"><ul><li><p>The objective was to determine trees description on forests using electromagnetic waves</p></li><li><p>Applied unbiased estimators in order to find the optimal aerial distribution with a certain phase and modulus</p></li><li><p>Accomplished to recreate Radar Imaging from obtained data for low density tree distribution</p></li></ul></div></div></div>';
		$this->db->insert('experience', $data);

		$data = [];
		$data['kind'] = 2;
		$data['title'] = 'Velesa';
		$data['description'] = 'Advisor';
		$data['priority'] = 3;
		$data['start_date'] = 'May 2015';
		$data['end_date'] = '';
		$data['location'] = 'Leon, Guanajuato';
		$data['content'] = '';
		$this->db->insert('experience', $data);

	}


	public function down() {

		$this->dbforge->drop_table('experience');

	}

}

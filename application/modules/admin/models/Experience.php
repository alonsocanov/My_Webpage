<?php (defined('BASEPATH')) or exit('No direct script access allowed');

class Experience extends MY_Model {

	public function __construct() {
		//overrides
		//$this->connection_name = '';
		//$this->table_name = '';
		//$this->override_column = '';
		//$this->soft_delete = true;

		//initialize after overriding
		parent::__construct();


	}

	public function priority()
	{

		$priority = [];
		$priority[1] = 'Top';
		$priority[2] = 'Middle';
		$priority[3] = 'Just in there';
		$priority[4] = 'Hide';


		return $priority;
	}
}
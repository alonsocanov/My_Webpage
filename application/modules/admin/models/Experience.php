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
		$priority[0] = 'Select an Option';
		$priority[1] = 'Top';
		$priority[2] = 'Middle';
		$priority[3] = 'Just in there';
		$priority[4] = 'Hide';
		return $priority;
	}

	public function kind()
	{
		$kind = [];
		$kind[0] = 'Select an Option';
		$kind[1] = 'Profesional Experience';
		$kind[2] = 'Projects';
		$kind[3] = 'Academic';
		$kind[4] = 'Skills';
		$kind[5] = 'Other';
		return $kind;
	}
}
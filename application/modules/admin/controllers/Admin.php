<?php
require_once APPPATH . 'modules/admin/libraries/Admin_Controller.php';

class Admin extends Admin_Controller {

	function __construct() {
		parent::__construct();

	}

	public function index() {


		$this->load->model('admin/front_item');
		$data['page_items_count'] = $this->front_item->count_all();
		$this->load_view('dashboard', $data);

	}
}

<?php
require_once APPPATH . 'modules/admin/libraries/Admin_Controller.php';

class Experiences extends Admin_Controller {

	function __construct() {
		parent::__construct();


	}

	public function index() {
		$this->load->model('experience');

		$data['experiences'] = $this->experience->get_all();
		$data['priorities'] = $this->experience->priority();
		$data['total_experiences'] 	= $this->experience->count_all();



		$this->load_view("experience/experiences", $data);

	}

	public function create() {
		$this->edit();
	}

	public function edit($id = NULL)
	{
		//cargo el modelo
		$this->load->model('experience');

		if ($this->input->post('company')) {
			$data['company'] = $this->input->post('company');
			$data['position'] = $this->input->post('position');
			$data['priority'] = $this->input->post('priority');
			$data['logo'] = $this->input->post('logo');
			$data['start_date'] = $this->input->post('start_date');
			$data['end_date'] = $this->input->post('end_date');
			$data['location'] = $this->input->post('location');

			if ($id){
				$this->experience->update($data, $id);
			} else{
				$data['create_date'] = date('Y-m-d H:i:s');
				$id = $this->experience->insert($data);
			}

			redirect("/admin/experiences/edit/$id", 'refresh');
		}

		if ($id)
			$data['experience'] = $this->experience->get($id);
		else
			$data['experience'] = $this->experience->empty_object();


		$this->load->helper(array('form','ui'));
		$data['priorities'] = $this->experience->priority();

		$this->load_view("experience/experience", $data);
	}

	public function delete($id) {
		$this->load->model('experience');
		$this->page_item->delete($id);

		redirect('/admin/experioences', 'refresh');
	}

}
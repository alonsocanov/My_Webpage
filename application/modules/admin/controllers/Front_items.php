<?php
require_once APPPATH . 'modules/admin/libraries/Admin_Controller.php';

class Front_items extends Admin_Controller {

	function __construct() {
		parent::__construct();


	}

	public function index() {
		$this->load->model('front_item');
		$data['front_items'] = $this->front_item->get_all();
		$data['page_items_count'] = $this->front_item->count_all();
		$data['icon_items'] 	= $this->front_item->count_all('kind = 1');
		$data['testimonials']	= $this->front_item->count_all('kind = 2');
		$data['social_networks'] = $this->front_item->count_all('kind = 3');
		$data['about_items'] 	= $this->front_item->count_all('kind = 4');

		$data['kinds'] = $this->front_item->kinds();

		$this->load->model('experience');
		$data['total_projects']  	= $this->experience->count_all('kind = 2');

		$this->load_view("front_item/front_items", $data);
	}

	public function create() {
		$this->edit();
	}

	public function edit($id = NULL)
	{
		//cargo el modelo
		$this->load->model('front_item');
		if ($this->input->post('title')) {
			$data['title'] = $this->input->post('title');
			$data['description'] = $this->input->post('description');
			$data['url'] = $this->input->post('url');
			$data['kind'] = $this->input->post('kind');
			$data['faicon'] = $this->input->post('faicon');
			$data['image_name'] = $this->input->post('image_name');

			if ($id){
				$this->front_item->update($data, $id);
			} else{
				$data['create_date'] = date('Y-m-d H:i:s');
				$id = $this->front_item->insert($data);
			}

			redirect("/admin/front_items/edit/$id", 'refresh');
		}

		if ($id)
			$data['front_item'] = $this->front_item->get($id);
		else
			$data['front_item'] = $this->front_item->empty_object();


		$this->load->helper(array('form','ui'));

		//me traigo los kinds desde el modelo front_item
		$data['kinds'] = $this->front_item->kinds();

		$this->load_view('front_item/front_item', $data);
	}

	public function delete($id) {
		$this->load->model('front_item');
		$this->front_item->delete($id);

		redirect('/admin/front_items', 'refresh');
	}

}

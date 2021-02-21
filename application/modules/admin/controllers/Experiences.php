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
		$data['kinds'] = $this->experience->kind();
		$data['total_experiences'] 	= $this->experience->count_all('kind = 1');

		$data['total_projects'] = $this->experience->count_all('kind = 2');





		$this->load_view("experience/experiences", $data);

	}

	public function create() {
		$this->edit();
	}

	public function edit($id = NULL)
	{
		//cargo el modelo
		$this->load->model('experience');

		if ($this->input->post('title')) {
		$data['title'] = $this->input->post('title');
		$data['kind'] = $this->input->post('kind');
			$data['description'] = $this->input->post('description');
			$data['priority'] = $this->input->post('priority');
			// $data['image'] = $this->input->post('image');
			// $data['image_url'] = $this->input->post('image_url');
			$data['video'] = $this->input->post('video');
			$data['video_url'] = $this->input->post('video_url');
			$data['url'] = $this->input->post('url');
			$data['faicon'] = $this->input->post('faicon');
			$data['location'] = $this->input->post('location');
			$data['content'] = $this->input->post('content');
			if (!($this->input->post('start_date'))){
				$data['start_date'] = '';
			}else if ($data['kind'] == '1'){// if it is experience
				$data['start_date'] = date('Y-m-d', strtotime('01-'.$this->input->post('start_date')));
			}else{// only year
				$data['start_date'] = date('Y-m-d', strtotime('01-01-'.$this->input->post('start_date')));
			}

			if (!($this->input->post('end_date'))){
			$data['end_date'] = '';
		}else if ($data['kind'] == '1'){
			$data['end_date'] = date('Y-m-d', strtotime('01-'.$this->input->post('end_date')));
			}else{// only year
				$data['end_date'] = date('Y-m-d', strtotime('01-01'.$this->input->post('end_date')));
			}


			if ($this->input->post('image')){
			$relative_path = 'assets/frontend/images/experience/';
			$desired_file_name = str_replace(' ', '_', $data['title']);
				$delete_original = False;
				$field_name = 'image';
				$resolution = [400, 400];
				$preserve_type = FALSE;

				$result = $this->upload_image($relative_path, $desired_file_name, $delete_original, $field_name, $resolution, $preserve_type);
				if (!empty($result['thumb_image_name']))
				{
					$data['image'] = $result['thumb_image_name'];
					$data['image_url'] =  base_url('admin/experiences/picture/' . $id);
				}
			}


			if ($id){
				$this->experience->update($data, $id);
			} else{
				$data['create_date'] = date('Y-m-d H:i:s');
				$id = $this->experience->insert($data);
			}

			redirect("/admin/experiences/edit/$id", 'refresh');
		}

		if ($id){
			$data['experience'] = $this->experience->get($id);
			$data['experience']->start_date = date_format(date_create($data['experience']->start_date), 'm-Y');

			if($data['experience']->start_date == '0000-00-00'){
				$data['experience']->start_date = '';
			}else if ($data['experience']->kind == '1'){
				$data['experience']->start_date = date_format(date_create($data['experience']->start_date), 'm-Y');
			}else{
				$data['experience']->start_date = date_format(date_create($data['experience']->start_date), 'Y');
			}

			if($data['experience']->end_date == '0000-00-00'){
				$data['experience']->end_date = '';
			}else if ($data['experience']->kind == '1'){
				$data['experience']->end_date = date_format(date_create($data['experience']->end_date), 'm-Y');
			}else{
				$data['experience']->end_date = date_format(date_create($data['experience']->end_date), 'Y');
			}
		}
		else{
			$data['experience'] = $this->experience->empty_object();
		}

		$this->load->helper(array('form','ui'));
		$data['priorities'] = $this->experience->priority();
		$data['kinds'] = $this->experience->kind();


		$this->load_view("experience/experience", $data);
	}

	public function picture($id=NULL)
	{
		$this->load->model('experience');
		$relative_path = "assets/frontend/images/experience/";
		$data = $this->experience->get_array($id);
		if ($data){
			$filename = $data['image'];
			$file_path = FCPATH . $relative_path . $filename;
			$this->display_image($file_path);
		}



	}


	public function delete($id) {
		$this->load->model('experience');
		$this->front_item->delete($id);

		redirect('/admin/experioences', 'refresh');
	}

}
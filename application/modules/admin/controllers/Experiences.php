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
			$data['image'] = $this->input->post('image');
			$data['image_url'] = $this->input->post('image_url');
			$data['video'] = $this->input->post('video');
			$data['video_url'] = $this->input->post('video_url');
			$data['url'] = $this->input->post('url');
			$data['faicon'] = $this->input->post('faicon');
			$data['start_date'] = $this->input->post('start_date');
			$data['end_date'] = $this->input->post('end_date');
			$data['location'] = $this->input->post('location');
			$data['content'] = $this->input->post('content');

		$relative_path = FCPATH;
		// $result = $this->upload_image($relative_path);
		// if(!empty($result['thumb_image_name']))
		// {
		// 	$data['image_name'] = $result['thumb_image_name'];
		// 	$data['image_url'] = base_url('private/profile/picture');
		// }

		// $current_user = $this->ion_auth->user()->row();
		// }

		// $data['user'] = $current_user;
		// $this->load_view('profile_edit',$data);

			if ($id){
				$this->experience->update($data, $id);
			} else{
				$data['create_date'] = date('Y-m-d H:i:s');
				$id = $this->experience->insert($data);
			}

			redirect("/admin/experiences/edit/$id", 'refresh');
		}

		if ($id)
		{
			$data['experience'] = $this->experience->get($id);
		}else
		{
			$data['experience'] = $this->experience->empty_object();
		}

		$this->load->helper(array('form','ui'));
		$data['priorities'] = $this->experience->priority();
		$data['kinds'] = $this->experience->kind();


		$this->load_view("experience/experience", $data);
	}

	public function delete($id) {
		$this->load->model('experience');
		$this->front_item->delete($id);

		redirect('/admin/experioences', 'refresh');
	}

}
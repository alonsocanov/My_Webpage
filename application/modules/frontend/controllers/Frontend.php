<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends Public_Controller {

	function __construct() {

		//you can change the theme from here, or from manager.php inside /application/config/
		//$this->_theme = 'default';
		//$this->_theme = 'soon';

		parent::__construct();
	}

	public function index()
	{
		$this->load->model('admin/front_item');
		$data['icon_items'] 	= $this->front_item->get_all('','kind = 1');
		$data['testimonials']	= $this->front_item->get_all('','kind = 2');
		// $data['social_networks'] = $this->front_item->get_all('','kind = 4');
		$data['about_items'] 	= $this->front_item->get_all('','kind = 5');


		$this->load->model('admin/experience');
		$data['projects'] = $this->experience->get_all('', 'kind = 2');
		$this->load_view('frontend', $data);



	}

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Footer {

	private $data = [];

	public function social_networks()
	{
		$this->load->model('admin/page_item');
		$this->data['social_networks'] = $this->page_item->get_all('','kind = 4');
		return $data;
	}

}

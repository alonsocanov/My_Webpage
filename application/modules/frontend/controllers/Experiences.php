<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Experiences extends Public_Controller {

    function __construct() {


        //you can change the theme from here, or from manager.php inside /application/config/
        //$this->_theme = 'default';
        //$this->_theme = 'soon';

        parent::__construct();
    }

    public function index()
    {
        $this->load->model('admin/experience');
        $data['experiences'] = $this->experience->get_all('', 'kind = 1');
        $this->load_view('experiences', $data);
    }

}
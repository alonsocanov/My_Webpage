<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends MY_Controller {

    function __construct() {


        //you can change the theme from here, or from manager.php inside /application/config/
        //$this->_theme = 'default';
        //$this->_theme = 'soon';

        parent::__construct();
    }

    public function index()
    {
        $this->load->model('admin/project');
        $data['projects'] = $this->project->get_all();
        $this->load_view('projects', $data);
    }

}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends Public_Controller {

    function __construct() {


        //you can change the theme from here, or from manager.php inside /application/config/
        //$this->_theme = 'default';
        //$this->_theme = 'soon';

        parent::__construct();
    }

    public function index()
    {
        $this->load->model('admin/experience');
        $this->load->model('admin/kind');

        $data = [];
        $projects = $this->kind->get_all('id', "title = 'Projects'");
        if ($projects && count($projects) == 1){
            $id = $projects[0]['id'];
            $data['projects'] = $this->experience->get_all('', "kind = $id");
        }


        $this->load_view('projects', $data);

    }

}
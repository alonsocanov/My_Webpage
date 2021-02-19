<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Education extends Public_Controller {

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
        $education = $this->kind->get_all('id', "title = 'Academic'");
        if ($education && count($education) == 1){
            $id = $education[0]['id'];
            $data['education'] = $this->experience->get_all('', "kind = $id");
        }


        $this->load_view('education', $data);

    }

}
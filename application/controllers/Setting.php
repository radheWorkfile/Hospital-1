<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Setting extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        ($this->session->userdata('user_id') == '') ? redirect(base_url(), 'refresh') : ''; 
        $this->lgCat = $this->session->userdata['user_cate'];
        error_reporting(0);
    }


    public function index()
    {
        $return = array(
            'title' => 'Home / Software Details',
            'breadcrums' => 'Admin Dashboard',
            'targetItem' => base_url('setting'),
            'layout' => 'setting.php',
        );
        $this->load->view('admin/base', $return);
    }


}

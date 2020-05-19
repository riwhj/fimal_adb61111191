<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    
    function __construct()
    {
        parent::__construct();
        $this->load->model('categories_model');
        $this->load->model('product_model');
    }


	public function index()
	{
		// $this->load->model('test_model');
        // $this->test_model->getAll();
        $data['categories']=$this->categories_model->findAll();
        $data['products']=$this->product_model->findAll();
        $this->load->view('layout/head');
        $this->load->view('layout/header');
        $this->load->view('categories/content',$data);
        $this->load->view('layout/left-menu');
        $this->load->view('layout/footer');
        $this->load->view('layout/foot');
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class City extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct() {
	  parent::__construct();
	  $this->load->model('user');
	  
	  $this->load->helper('form');
    $this->load->helper('url');
	}

	public function index() {
		$data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
		$this->load->view('template/header', $data);
		$this->load->view('upload_city');
		$this->load->view('template/footer');
	}

	public function upload_city() {
		$this->load->view('upload_file');
	}

	public function create() {
    $form_data = $this->input->post();
    $this->load->model(array('City_m'));
    if (0 != count($form_data)) {
      $this->City_m->insert($form_data['city']);
      $data['list'] = $this->City_m->get_all();
      redirect('City/list');
    } else {
      print_r('Created failed');
    }
	}

	public function list()
    {
      $this->load->model(array('City_m'));
      $data['list'] = $this->City_m->get_all();
      $this->load->view('template/header');
	    $this->load->view('city_view', $data);
    }

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	  $this->load->model(array('City_m'));
	}

	public function index()
	{
		$data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
		$data['list'] = $this->City_m->get_all();
		$this->load->view('template/header', $data);
		$this->load->view('welcome_message');
	  $this->load->view('city_view', $data);
		$this->load->view('template/footer');
	}
}

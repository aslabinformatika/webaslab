<?php
// if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
    parent::__construct();
    //load our helper
    $this->load->helper('url');
	//load our model
    //$this->load->model('Dashboard');
//   }
//   public function index(){
//     if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
//     //load session library to use flashdata
//     $this->load->library('session');
//     //fetch all files i the database
//     $data['bugreport'] = $this->BugreportModel->getAllFiles();
//     $this->load->view('index', $data);
//     }else{
//       echo "Anda tidak berhak mengakses halaman ini";
}

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
	public function index()
	{
		$this->load->view('index');
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

  public function __construct() {
    parent::__construct();
  }

  public function index()
  {
    $data = [
      'title' => 'Dashboard',
      'page' => 'dashboard'
    ];
    $this->load->view('dashboard', $data);
  }

}

/* End of file: Dashboard.php */

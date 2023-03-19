<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landingpage extends CI_Controller {

  public function __construct() {
    parent::__construct();
  }

  public function index()
  {
    $data = [
      'title' => 'Landing Page'
    ];

    $this->load->view('landingpage', $data);
  }

}

/* End of file: Landingpage.php */

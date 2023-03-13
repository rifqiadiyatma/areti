<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Extended extends CI_Controller {

  public function __construct() {
    parent::__construct();
  }

  public function sweetalert()
  {
    $data = [
      'title' => 'Sweet Alert',
      'page' => 'sweetalert'
    ];

    $this->load->view('extended/sweetalert', $data);
  }

}

/* End of file: Extended.php */

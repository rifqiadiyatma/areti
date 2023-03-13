<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

  public function __construct() {
    parent::__construct();
  }

  public function index()
  {
    $data = [
      'title' => 'Form',
      'page' => 'form'
    ];

    $this->load->view('form', $data);
  }

}

/* End of file: Form.php */

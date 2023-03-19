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
      'parent' => 'form',
      'page' => 'form'
    ];

    $this->load->view('form/form', $data);
  }

  public function formlayout()
  {
    $data = [
      'title' => 'Form Layout',
      'parent' => 'form',
      'page' => 'formlayout'
    ];

    $this->load->view('form/formlayout', $data);
  }

  public function validation()
  {
    $data = [
      'title' => 'Form Validation',
      'parent' => 'form',
      'page' => 'formvalidation'
    ];

    $this->load->view('form/formvalidation', $data);
  }
}

/* End of file: Form.php */

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
      'parent' => 'extended',
      'page' => 'sweetalert'
    ];

    $this->load->view('extended/sweetalert', $data);
  }

  public function select2()
  {
    $data = [
      'title' => 'Select2',
      'parent' => 'extended',
      'page' => 'select2'
    ];

    $this->load->view('extended/select2', $data);
  }

  public function ckeditor()
  {
    $data = [
      'title' => 'CKEditor',
      'parent' => 'extended',
      'page' => 'ckeditor'
    ];

    $this->load->view('extended/ckeditor', $data);
  }

  public function tinymce()
  {
    $data = [
      'title' => 'TinyMCE',
      'parent' => 'extended',
      'page' => 'tinymce'
    ];

    $this->load->view('extended/tinymce', $data);
  }

}

/* End of file: Extended.php */

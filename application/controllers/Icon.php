<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Icon extends CI_Controller {

  public function __construct() {
    parent::__construct();
  }

  public function fa()
  {
    $data = [
      'title' => 'Font Awesome',
      'parent' => 'icon',
      'page' => 'fontawesome'
    ];

    $this->load->view('icon/fa', $data);
  }

  public function bi()
  {
    $data = [
      'title' => 'Bootstrap Icon',
      'parent' => 'icon',
      'page' => 'bootstrapicon'
    ];

    $this->load->view('icon/bi', $data);
  }

}

/* End of file: Icon.php */

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layout extends CI_Controller {

  public function __construct() {
    parent::__construct();
  }

  public function blankpage()
  {
    $data = [
      'title' => 'Blank Page',
      'parent' => 'layout',
      'page' => 'blankpage'
    ];

    $this->load->view('layout/blankpage', $data);
  }

  public function topnav()
  {
    $data = [
      'title' => 'Top Nav Page',
      'parent' => 'layout',
      'page' => 'topnav'
    ];

    $this->load->view('layout/topnav', $data);
  }

}

/* End of file: Layout.php */

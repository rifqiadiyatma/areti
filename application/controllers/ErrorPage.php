<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ErrorPage extends CI_Controller {

  public function __construct() {
    parent::__construct();
  }

  public function page404()
  {
    $data = [
      'title' => '404',
      'page' => '404'
    ];

    $this->load->view('customerror/404page', $data);
  }

  public function page403()
  {
    $data = [
      'title' => '403',
      'page' => '403'
    ];

    $this->load->view('customerror/403page', $data);
  }

  public function page500()
  {
    $data = [
      'title' => '500',
      'page' => '500'
    ];

    $this->load->view('customerror/500page', $data);
  }

  public function page503()
  {
    $data = [
      'title' => '503',
      'page' => '503'
    ];

    $this->load->view('customerror/503page', $data);
  }
  
}

/* End of file: Error.php */

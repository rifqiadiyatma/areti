<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

  public function __construct() {
    parent::__construct();
  }

  public function index()
  {
    $data = [
      'title' => 'My Profile',
      'parent' => 'pages',
      'page' => 'myprofile'
    ];

    $this->load->view('pages/myprofile', $data);
  }

  public function changepassword()
  {
    $data = [
      'title' => 'Change Password',
      'parent' => 'pages',
      'page' => 'changepassword'
    ];

    $this->load->view('pages/changepassword', $data);
  }

  public function blankpage()
  {
    $data = [
      'title' => 'Blank Page',
      'parent' => 'pages',
      'page' => 'blankpage'
    ];

    $this->load->view('pages/blankpage', $data);
  }
  
  public function settings()
  {
    $data = [
      'title' => 'Settings',
      'parent' => 'pages',
      'page' => 'settings'
    ];

    $this->load->view('pages/settings', $data);
  }



}

/* End of file: Pages.php */

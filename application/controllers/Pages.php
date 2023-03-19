<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

  public function __construct() {
    parent::__construct();
  }

  public function myprofile()
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
  
  public function settings()
  {
    $data = [
      'title' => 'Settings',
      'parent' => 'pages',
      'page' => 'settings'
    ];

    $this->load->view('pages/settings', $data);
  }

  public function addproduct()
  {
    $data = [
      'title' => 'Add Product',
      'parent' => 'pages',
      'page' => 'addproduct'
    ];

    $this->load->view('pages/addproduct', $data);
  }
  
  public function product()
  {
    $data = [
      'title' => 'Product',
      'parent' => 'pages',
      'page' => 'product'
    ];

    $this->load->view('pages/product', $data);
  }

  public function market()
  {
    $data = [
      'title' => 'Market',
      'parent' => 'pages',
      'page' => 'market'
    ];

    $this->load->view('pages/market', $data);
  }




}

/* End of file: Pages.php */

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

  public function __construct() {
    parent::__construct();
  }

  public function login()
  {
    $data = [
      'title' => 'Login',
      'page' => 'login'
    ];

    $this->load->view('auth/login', $data);
  }

  public function register()
  {
    $data = [
      'title' => 'Register',
      'page' => 'register'
    ];

    $this->load->view('auth/register', $data);
  }

  public function resetpassword()
  {
    $data = [
      'title' => 'Reset Password',
      'page' => 'resetpassword'
    ];

    $this->load->view('auth/resetpassword', $data);
  }

  public function forgotpassword()
  {
    $data = [
      'title' => 'Forgot Password',
      'page' => 'forgotpassword'
    ];

    $this->load->view('auth/forgotpassword', $data);
  }

}

/* End of file: Auth.php */

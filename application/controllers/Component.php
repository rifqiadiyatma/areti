<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Component extends CI_Controller {

  public function __construct() {
    parent::__construct();
  }

  public function accordion()
  {
    $data = [
      'title' => 'Accordion',
      'page' => 'accordion'
    ];
    
    $this->load->view('component/accordion', $data);
  }

  public function alerts()
  {
    $data = [
      'title' => 'Alerts',
      'page' => 'alerts'
    ];
    
    $this->load->view('component/alerts', $data);
  }

  public function badge()
  {
    $data = [
      'title' => 'Badge',
      'page' => 'badge'
    ];
    
    $this->load->view('component/badge', $data);
  }

  public function buttons()
  {
    $data = [
      'title' => 'Buttons',
      'page' => 'buttons'
    ];
    
    $this->load->view('component/buttons', $data);
  }

  public function card()
  {
    $data = [
      'title' => 'Card',
      'page' => 'card'
    ];
    
    $this->load->view('component/card', $data);
  }
  
  public function modal()
  {
    $data = [
      'title' => 'Modal',
      'page' => 'modal'
    ];
    
    $this->load->view('component/modal', $data);
  }

  public function tooltips()
  {
    $data = [
      'title' => 'Tooltips',
      'page' => 'tooltips'
    ];
    
    $this->load->view('component/tooltips', $data);
  }

}

/* End of file: Component.php */

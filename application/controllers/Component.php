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
      'parent' => 'component',
      'page' => 'accordion'
    ];
    
    $this->load->view('component/accordion', $data);
  }

  public function alerts()
  {
    $data = [
      'title' => 'Alerts',
      'parent' => 'component',
      'page' => 'alerts'
    ];
    
    $this->load->view('component/alerts', $data);
  }

  public function badge()
  {
    $data = [
      'title' => 'Badge',
      'parent' => 'component',
      'page' => 'badge'
    ];
    
    $this->load->view('component/badge', $data);
  }

  public function buttons()
  {
    $data = [
      'title' => 'Buttons',
      'parent' => 'component',
      'page' => 'buttons'
    ];
    
    $this->load->view('component/buttons', $data);
  }

  public function card()
  {
    $data = [
      'title' => 'Card',
      'parent' => 'component',
      'page' => 'card'
    ];
    
    $this->load->view('component/card', $data);
  }
  
  public function modal()
  {
    $data = [
      'title' => 'Modal',
      'parent' => 'component',
      'page' => 'modal'
    ];
    
    $this->load->view('component/modal', $data);
  }
  
  public function toast()
  {
    $data = [
      'title' => 'Toast',
      'parent' => 'component',
      'page' => 'toast'
    ];
    
    $this->load->view('component/toast', $data);
  }

  public function tooltips()
  {
    $data = [
      'title' => 'Tooltips',
      'parent' => 'component',
      'page' => 'tooltips'
    ];
    
    $this->load->view('component/tooltips', $data);
  }

}

/* End of file: Component.php */

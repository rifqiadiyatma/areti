<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Table extends CI_Controller {

  public function __construct() {
    parent::__construct();
  }

  public function basictable()
  {
    $data = [
      'title' => 'Basic Table',
      'parent' => 'table',
      'page' => 'basictable' 
    ];

    $this->load->view('table/basictable', $data);
  }

  public function datatables()
  {
    $data = [
      'title' => 'DataTables',
      'parent' => 'table',
      'page' => 'datatables' 
    ];

    $this->load->view('table/datatables', $data);
  }

}

/* End of file: Table.php */

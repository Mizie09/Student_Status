<?php

class Employees extends CI_Controller
{
  public function _construct()
  {
    parent::_construct();
  }
  public function index()
  {
    $this->load->view('employees/index');
  }
}
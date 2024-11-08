<?php

class Dashboard extends CI_Controller
{
  public function _construct()
  {
    parent::_construct();
  }
  public function index()
  {
    $this->load->view('dashboard/index');
  }
}
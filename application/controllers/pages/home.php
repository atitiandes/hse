<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
  public function view() {
    if ( ! file_exists(APPPATH.'/views/pages/home.php')) {
      //Whoops, we don't have a page for that!
      show_404();
    }       
    $data['title'] = ucfirst('home'); 
    // $this->load->view('templates/header', $data);
    $this->load->view('pages/home.php', $data);
    // $this->load->view('templates/footer', $data);
  }
}
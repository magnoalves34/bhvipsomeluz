<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index()
	{
		$this->load->view('site/index');
	}
    
    public function servicos(){
        $this->load->view('site/servicos');
    }
    
    public function pacotes(){
        $this->load->view('site/pacotes');
    }
    
    public function galeria(){
        $this->load->view('site/galeria');
    }
    
    public function contato(){
        $this->load->view('site/contato');
    }
    
    public fucntion 404(){
        $this->load->view('site/404');
    }
}

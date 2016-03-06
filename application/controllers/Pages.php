<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
	
	public function __construct() 
	{
		parent::__construct();
		$this->load->helper('form');
	}
	
	public function view($page = 'home')
	{
        if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
	}
	
	public function form()
	{
		$data['title'] = 'Example Form';
		$data['inputs']['Username'] = $this->_buildField('username');
		$data['inputs']['Password'] = $this->_buildField('password', 'password', 'xyz');
		$data['inputs']['Name'] = $this->_buildField('name');
		
 		$this->load->view('pages/form', $data);
 	}
	
	private function _buildField($fieldName, $type = 'text', $class = "")
	{
		return array('name' => $fieldName, 'id' => $fieldName, 'type' => $type, 'class' => $class);
	}
}
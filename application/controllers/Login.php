<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Login Page for this controller.
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $data['page'] = 'login';
        $data['title'] = '';
		$this->load->view('template2.html', $data);
	}
}

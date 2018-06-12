<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Academy extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $data['page'] = 'gvh-academy/gvh-home';
        $data['title'] = '';
		$this->load->view('template.html', $data);
	}
  public function courses()
	{
        $data['page'] = 'gvh-academy/courses';
        $data['title'] = '';
		$this->load->view('template.html', $data);
	}
  public function instructors()
  {
        $data['page'] = 'gvh-academy/instructors';
        $data['title'] = '';
    $this->load->view('template.html', $data);
  }
  public function affiliates()
  {
        $data['page'] = 'gvh-academy/affiliates';
        $data['title'] = '';
    $this->load->view('template.html', $data);
  }
}
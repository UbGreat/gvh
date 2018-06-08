<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myhub extends CI_Controller {

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
	public function about()
	{
        $data['page'] = 'about';
        $data['title'] = '';
		$this->load->view('template.html', $data);
	}
    
    public function job_page()
	{
        $data['page'] = 'job-page';
        $data['title'] = '';
		$this->load->view('template.html', $data);
	}
    
    public function job_details()
	{
        $data['page'] = 'job-details';
        $data['title'] = '';
		$this->load->view('template.html', $data);
	}
    
    public function resume()
	{
        $data['page'] = 'resume';
        $data['title'] = '';
		$this->load->view('template.html', $data);
	}
    
    public function faq()
	{
        $data['page'] = 'faq';
        $data['title'] = '';
		$this->load->view('template.html', $data);
	}
    
    public function contact()
	{
        $data['page'] = 'contact';
        $data['title'] = '';
		$this->load->view('template.html', $data);
	}
    
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Candidates extends CI_Controller {

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
	public function browse_jobs()
	{
        $data['page'] = 'browse-jobs';
        $data['title'] = '';
		$this->load->view('template.html', $data);
	}
    
    public function browse_categories()
	{
        $data['page'] = 'browse-categories';
        $data['title'] = '';
		$this->load->view('template.html', $data);
	}
    
    public function add_resume()
	{
        $data['page'] = 'add-resume';
        $data['title'] = '';
		$this->load->view('template.html', $data);
	}
    
    public function manage_resumes()
	{
        $data['page'] = 'manage-resumes';
        $data['title'] = '';
		$this->load->view('template.html', $data);
	}
    
    public function job_alerts()
	{
        $data['page'] = 'job-alerts';
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

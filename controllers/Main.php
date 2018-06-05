<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

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

		$data['title'] = 'Web Developer. World Traveler. Nerd. | Anthony Stenberg-Di Geronimo | Seattle, WA';
		$this->load->view('main/home',$data);
	}// end of function index()

	public function about()
	{

		$data['title'] = 'About | Web Developer. World Traveler. Nerd. | Anthony Stenberg-Di Geronimo | Seattle, WA';
		$this->load->view('main/home',$data);
	}// end of function about()

	public function contact()
	{

		$data['title'] = 'Contact | Web Developer. World Traveler. Nerd. | Anthony Stenberg-Di Geronimo | Seattle, WA';
		$this->load->view('main/home',$data);
	}// end of function contact()

	public function resources()
	{

		$data['title'] = 'Resources | Web Developer. World Traveler. Nerd. | Anthony Stenberg-Di Geronimo | Seattle, WA';
		$this->load->view('main/resources',$data);
	}// end of function resources()

	public function portfolio()
	{
		$data['title'] = 'Portfolio | Web Developer. World Traveler. Nerd. | Anthony Stenberg-Di Geronimo | Seattle, WA';
		$this->load->view('main/home',$data);
	} // end of function portfolio()

	public function blog()
	{
		$data['title'] = 'Blog | Web Developer. World Traveler. Nerd. | Anthony Stenberg-Di Geronimo | Seattle, WA';
		$this->load->view('main/home',$data);
	} // end of function blog()

}
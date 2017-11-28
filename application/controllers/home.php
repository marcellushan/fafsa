<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {



	public function index()
	{	
		
		$this->load->view('templates/header');
		$this->load->view('home');
	}
	
	public function submit()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Attendee Name', 'required|alpha_numeric_spaces');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('event_date', 'Event Date', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('templates/header');
			$this->load->view('home');
		}
		else
		{
		
			$this->load->model('attendee_model');
			$attendee = new Attendee_model();
			var_dump($_POST);
			foreach ($_POST as $key=>$value)
			{
				$attendee->$key = $this->input->post($key);
			}
			$attendee->save();
			$this->load->view('templates/header');
			$this->load->view('all_attendees');
		}

	}
}

	
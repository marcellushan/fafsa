<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Submit extends CI_Controller {



	public function index()
	{
	$this->load->library('form_validation');
	$this->form_validation->set_rules('attendee_name', 'Attendee Name', 'required|alpha_numeric_spaces');
	$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
	$this->form_validation->set_rules('phone', 'Phone', 'required|min_length[10]');
	$this->form_validation->set_rules('num_attending', 'Number Attending', 'required|numeric|max_length[2]');
	$this->form_validation->set_rules('event_date', 'Event Date', 'required|min_length[5]');
	$this->form_validation->set_rules('location', 'Location', 'required|min_length[5]');
	if ($this->form_validation->run() == FALSE)
	{
		$this->load->view('templates/header');
		$this->load->view('home');
	}
	else
	{

		$this->load->model('attendee_model');
		$attendee = new Attendee_model();
// 		var_dump($_POST);
		foreach ($_POST as $key=>$value)
		{
			$attendee->$key = $this->input->post($key);
		}
		$attendee->save();
		$date = date_create($_POST['event_date']);
// 		echo date_format($date, "F jS");
// 		$data['event_date']= $_POST['event_date'];
		$data['event_date']= date_format($date, "F jS");
		$this->load->view('templates/header');
		$this->load->view('thank_you',$data);
	}

	}
}
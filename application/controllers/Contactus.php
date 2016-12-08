<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactus extends CI_Controller {

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

	 
	 public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->library('form_validation');
        $this->load->helper(array('form', 'url')); 

	}

	public function index()
	{
		$data['header']=$this->load->view('parts/header','',true);
		$data['navbar']=$this->load->view('parts/navbar','',true);
		$data['footer']=$this->load->view('parts/footer','',true);
		$this->load->view('contactus/index',$data);
	}

	public function email()
	{
		$nama = $this->input->post('nama');
		$email = $this->input->post("email");
		$subject = $this->input->post('subject');
		$content = $this->input->post('content');


		echo $nama."<br>";
		echo $email."<br>";
		echo $subject."<br>";
		echo $content."<br>";

		$email_config = Array(
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.gmail.com',
            'smtp_port' => '465',
            'smtp_user' => 'laundrybagus123@gmail.com',
            'smtp_pass' => 'baguslaundry123',
            'mailtype'  => 'html',
            'starttls'  => true,
            'newline'   => "\r\n"
        );

        $this->load->library('email', $email_config);
		$this->email->from($email, $nama);
		#$this->email->to('mesinlaundrysolo@gmail.com');
		$this->email->to('kevinfachreza009@gmail.com');
		$subject = 'CONTACTUS@LaundryBagus.CO-'.$subject.'';
		$message = $content;

		$this->email->subject($subject);
		$this->email->message($message);

		if($this->email->send()){
			$this->session->set_flashdata('message', 'Email Anda Telah Terkirim');
			redirect('contactus');
		}
		else
		{
			$this->session->set_flashdata('message', 'Pengiriman EmailGagal');
			redirect('contactus');
		}



	}
}

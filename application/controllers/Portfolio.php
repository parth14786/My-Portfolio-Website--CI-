<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller {


	public function index()
	{
		/*
		$this->load->view('Header');
		$this->load->view('Home');
		$this->load->view('footer');
		*/
		
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}
	
	public function Welcome()
	{
		/*
			$this->load->view('Header');
			$this->load->view('Home');
			$this->load->view('footer');
			*/
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('home11');
		$this->load->view('footer');
	}
	
	public function latest_videos()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('latest_videos');
		$this->load->view('footer');
	}
	
	public function Next_Page1()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('Next_Page1');
		$this->load->view('footer');
	}
	
	public function Next_Page2()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('Next_Page2');
		$this->load->view('footer');
	}
	
	public function Next_Page3()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('Next_Page3');
		$this->load->view('footer');
	}
	
	public function Next_Page4()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('Next_Page4');
		$this->load->view('footer');
	}
	
	public function Next_Page5()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('Next_Page5');
		$this->load->view('footer');
	}
	
	public function Next_Page6()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('Next_Page6');
		$this->load->view('footer');
	}
	
	public function Next_Page7()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('Next_Page7');
		$this->load->view('footer');
	}
	
	public function Next_Page8()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('Next_Page8');
		$this->load->view('footer');
	}
	
	public function Next_Page9()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('Next_Page9');
		$this->load->view('footer');
	}
	
	public function Next_Page10()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('Next_Page10');
		$this->load->view('footer');
	}
	
	public function other_stuff()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('other_stuff');
		$this->load->view('footer');
	}
	
	public function other_stuff1()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('other_stuff1');
		$this->load->view('footer');
	}
	
	public function Music()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('listen_track');
		$this->load->view('footer');
	}
	
	public function calendar()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('other_stuff');
		$this->load->view('footer');
	}
	
	public function calculator()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('other_stuff');
		$this->load->view('footer');
	}
	
	public function clock()
	{
	
		$this->load->view('clock');
	
	}

}

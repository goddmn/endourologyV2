<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pages extends CI_Controller {

	public function index($id=0)
	{	
		$this->load->model('Get_model');
		$data['main_menu'] = $this->Get_model->main_menu();
		$this->load->view('head');
		$this->load->view('header',$data);
		$this->load->view('main_content',$data);
		$data['m_news'] = $this->Get_model->m_news(3);
		$data['main_menu_second'] = $this->Get_model->main_menu_second();
		$data['directions'] = $this->Get_model->directions(6);
		$this->load->view('directions',$data);
		$this->load->view('news',$data);
		$this->load->view('info');
		$this->load->view('partners');
		$this->load->view('footer');
	}

	public function directions($id=0){
		$this->load->model('Get_model');
		$data['main_menu'] = $this->Get_model->main_menu();
		$this->load->view('head');
		$this->load->view('header',$data);
		$data['m_news'] = $this->Get_model->m_news(3);
		$data['in_direction'] = $this->Get_model->in_direction($id);
		$data['video'] = $this->Get_model->video(4);
		$this->load->view('directions_page',$data);
		$this->load->view('footer');
	}

	public function news($id=0){
		$this->load->model('Get_model');
		$data['main_menu'] = $this->Get_model->main_menu();
		$this->load->view('head');
		$this->load->view('header',$data);
		$data['m_news'] = $this->Get_model->m_news(3);
		$data['in_news'] = $this->Get_model->in_news($id);
		$this->load->view('news_page',$data);
		$this->load->view('footer');
	}

	public function news_page($id=0){
		$this->load->model('Get_model');
		$data['main_menu'] = $this->Get_model->main_menu();
		$this->load->view('head');
		$this->load->view('header',$data);
		$data['news'] = $this->Get_model->news();
		$this->load->view('all_news',$data);
		$this->load->view('footer');
	}

	public function collective(){
		$this->load->model('Get_model');
		$data['main_menu'] = $this->Get_model->main_menu();
		$this->load->view('head');
		$this->load->view('header',$data);
		$data['collective'] = $this->Get_model->collective();
		$this->load->view('collective',$data);	
		$this->load->view('footer');
	}	
	public function employee($id=0){
		$this->load->model('Get_model');
		$data['main_menu'] = $this->Get_model->main_menu();
		$this->load->view('head');
		$this->load->view('header',$data);
		$data['employee'] = $this->Get_model->employee($id);
		$this->load->view('about_employee');	
		$this->load->view('footer');
	}	
	public function gallery(){
		$this->load->model('Get_model');
		$data['main_menu'] = $this->Get_model->main_menu();
		$this->load->view('head');
		$this->load->view('header',$data);
		// $data['gallery'] = $this->Get_model->gallery();
		$this->load->view('gallery');
		$this->load->view('footer');
	}

	public function map(){
		$this->load->model('Get_model');
		$data['main_menu'] = $this->Get_model->main_menu();
		$this->load->view('head');
		$this->load->view('header',$data);
		$this->load->view('map');
		$this->load->view('footer');
	}

	public function video_gallery(){
		$this->load->model('Get_model');
		$data['main_menu'] = $this->Get_model->main_menu();
		$this->load->view('head');
		$this->load->view('header',$data);
		$this->load->view('video_gallery');
		$this->load->view('footer');
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class List_c extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('m_data');
		
	}
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
	public function index(){
		
		$jumlah_data = $this->m_data->jumlah_data();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'index.php/List_c/index/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 5;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);		
		$data['isi'] = $this->m_data->data($config['per_page'],$from);
		$this->load->view('hasil',$data);
	}

	public function edit()
	{
		$id = $this->input->get('id');
		$data['isi'] = $this->m_data->editdata($id);
		$this->load->view('formedit', $data);
		
				
	}

	public function delete()
	{
		$id = $this->input->get('id');
		$this->m_data->deletedata($id);
		
		redirect('List_c/','refresh');
		
	}

	public function input()
	{
		$this->load->view('input');
		
	}

	
	public function prosesinput()
	{
		$nama = $this->input->post('nama');
		$nim = $this->input->post('nim');
		$tgl = $this->input->post('tgl');
		$ipk = $this->input->post('ipk');
		$kelas = $this->input->post('kelas');

		$this->m_data->input($nama,$nim,$tgl,$ipk,$kelas);
		redirect('List_c/','refresh');
		
	}

	public function prosesedit()
	{
		$nama = $this->input->post('nama');
		$nim = $this->input->post('nim');
		$tgl = $this->input->post('tgl');
		$ipk = $this->input->post('ipk');
		$kelas = $this->input->post('kelas');

		$this->m_data->edit($nama,$nim,$tgl,$ipk,$kelas);
		redirect('List_c/','refresh');
		
	}

	public function cari()
	{
		$cari = $this->input->get('cari');
		
		$this->session->set_userdata('data',$cari);
		$carii = $this->session->data;
		$jumlah_data = $this->m_data->jumlah_datacari($cari);
		$this->load->library('pagination');
		$config['base_url'] = base_url()."index.php/List_c/cari";
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 5;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);	
		
		$data['datacari'] = $this->m_data->datacari($config['per_page'],$from,$carii);
		$this->load->view('hasil',$data);
	}
	
}

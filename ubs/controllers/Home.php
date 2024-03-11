<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
		{
		$this->load->view('utama');
		}
	public function admin()
		{
		$data['barang'] = $this->model_barang->get_stok10()->result();
		$this->load->view('temp/head');
		$this->load->view('temp/nav');
		$this->load->view('admin',$data);
		$this->load->view('temp/footer');
		}
	public function dash()
		{
		$data['barang'] = $this->model_barang->get_barang()->result();
		$this->load->view('dash',$data);
		}
	public function divisi()
		{
		$this->load->view('temp/head');
		$this->load->view('temp/nav');
		$this->load->view('divisi');
		$this->load->view('temp/footer');
		}
	public function masterpetugas()
		{
		$data['barang'] = $this->model_barang->get_barang()->result();
		$this->load->view('temp/head');
		$this->load->view('temp/nav');
		$this->load->view('masterpetugas',$data);
		$this->load->view('temp/footer');
		}
	public function insert()
		{
		$this->load->view('insert');
		}
	public function proses_insert()
		{
		$data = array( 'BARCODE' => $this->input->post('BARCODE') ,
		'NAMA_BRG' => $this->input->post('NAMA_BRG') ,
		'HARGA_BRG' => $this->input->post('HARGA_BRG') ,
		'KETERANGAN'=> $this->input->post('KETERANGAN') ,
		'JENIS' => $this->input->post('JENIS') ,
		'SATUAN' => $this->input->post('SATUAN') ,
		'STOK_BRG' => $this->input->post('STOK_BRG')
		);
		$this->model_barang->insert_barang($data);
		redirect('home/admin','refresh');
		}
	public function update($id)
		{
		$data['barang'] = $this->model_barang->get_detail_barang($id)->row();
		$this->load->view('update',$data);
		}
	public function proses_update()
		{
		$id['KODE_BRG'] = $this->input->post('KODE_BRG');
		$data = array( 'BARCODE' => $this->input->post('BARCODE') ,
		'NAMA_BRG' => $this->input->post('NAMA_BRG') ,
		'HARGA_BRG' => $this->input->post('HARGA_BRG') ,
		'KETERANGAN'=> $this->input->post('KETERANGAN') ,
		'JENIS' => $this->input->post('JENIS') ,
		'SATUAN' => $this->input->post('SATUAN') ,
		'STOK_BRG' => $this->input->post('STOK_BRG')
		);
		$this->model_barang->update_barang($data,$id);
		redirect('home/admin','refresh');
		}
	public function delete($id)
		{
		$this->model_barang->delete_barang($id);
		redirect('home/admin','refresh');
		}
	public function top10()
		{
		$data['barang'] = $this->model_barang->get_stok10()->result();
		$this->load->view('top10',$data);
		}
	public function login()
		{
		$this->load->model('model_auth');
		$this->load->library('form_validation');
	
		$rules = $this->model_auth->rules();
		$this->form_validation->set_rules($rules);
	
		if($this->form_validation->run() == FALSE){
			return $this->load->view('login');
		}
	
		$username = $this->input->post('username');
		$password = $this->input->post('password');
	
		if($this->model_auth->login($username, $password)){
			redirect('home/admin');
		} else {
		$this->session->set_flashdata('message_login_error', '<div class="animate__animated animate__bounce animate__repeat-2" align="center">USERNAME ATAU PASSWORD ANDA SALAH!!!</div>');
		}
	
		$this->load->view('login');
		}
	
	public function logout()
		{
		$this->load->model('model_auth');
		$this->model_auth->logout();
		redirect(site_url());
		}
	
}


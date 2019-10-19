<?php 

class Barang extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('Barang_model');
		$this->load->library('form_validation');
	}

	public function index(){
		
		$data['judul']='Daftar Barang';

		$data['barang'] = $this->Barang_model->getAllBarang();
		if($this->input->post('keyword')) {
			$data['barang'] = $this->Barang_model->cariDataBarang();
		}
		$this->load->view('templates/header',$data);
		$this->load->view('barang/index',$data);
		$this->load->view('templates/footer');
	}

	public function tambah(){
		$data['judul'] = 'Form Tambah Data Barang';
		$this->form_validation->set_rules('nama', 'Nama', 'required'); // nama, ketentuan, rules
		$this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
		$this->form_validation->set_rules('warna', 'Warna', 'required');

		if($this->form_validation->run() == FALSE){
			$this->load->view('templates/header', $data);
			$this->load->view('barang/tambah');
			$this->load->view('templates/footer');
		} else {
			$this->Barang_model->tambahDataBarang();
			$this->session->set_flashdata('flash', 'Ditambahkan'); // namanya flash, pesannya ditambahkan
			redirect('barang');
		}
	}

	public function hapus($id){
		$this->Barang_model->hapusDataBarang($id);
		$this->session->set_flashdata('flash','Dihapus');
		redirect('barang');
	}

	public function detail($id){
		$data['judul'] = 'Detail Data Barang';
		$data['barang'] = $this->Barang_model->getBarangById($id);
		$this->load->view('templates/header', $data);
		$this->load->view('barang/detail');
		$this->load->view('templates/footer');
	}

		public function ubah($id){
		$data['judul'] = 'Form Ubah Data Barang';
		$data['barang'] = $this->Barang_model->getBarangById($id);
		$data['jenis'] = ['Cotton', 'Spandex', 'Polyester', 'Hyget', 'Rajut'];


		$this->form_validation->set_rules('nama', 'Nama', 'required'); // nama, ketentuan, rules
		$this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
		$this->form_validation->set_rules('warna', 'Warna', 'required');

		if($this->form_validation->run() == FALSE){
			$this->load->view('templates/header', $data);
			$this->load->view('barang/ubah', $data);
			$this->load->view('templates/footer');
		} else {
			$this->Barang_model->ubahDataBarang();
			$this->session->set_flashdata('flash', 'Diubah'); // namanya flash, pesannya ditambahkan
			redirect('barang');
		}
	}
}
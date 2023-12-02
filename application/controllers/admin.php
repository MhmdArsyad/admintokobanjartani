<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$data['barang']=$this->M_toko->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/navbar');
		$this->load->view('v_toko', $data);
		$this->load->view('templates/footer');
	}


	public function tambah_data()
	{
		$namabarang=$this->input->post('namabarang');
		$harga=$this->input->post('harga');
		$jumlah=$this->input->post('jumlah');
		$data = array(	'namabarang' => $namabarang,
						'harga' => $harga,
						'jumlah' => $jumlah );
		$this->M_toko->input_data($data);
		redirect ('admin/index');
	}


	public function hapus($no)
	{
		$where = array('no' => $no,);
		$this->M_toko->hapus_data($where, 'tb_barang');
		redirect ('admin/index');
	}


	public function edit($no)
	{
		$where = array('no' => $no ,);
		$data['barang']=$this->M_toko->edit_data($where, 'tb_barang');
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/navbar');
		$this->load->view('edit', $data);
		$this->load->view('templates/footer');
	}


	public function update()
	{
		$no=$this->input->post('no');
		$namabarang=$this->input->post('namabarang');
		$harga=$this->input->post('harga');
		$jumlah=$this->input->post('jumlah');
		$data = array(	'namabarang' => $namabarang,
						'harga' => $harga,
						'jumlah' => $jumlah );
		$where = array('no' =>$no, );
		$this->M_toko->update_data($where ,$data ,'tb_barang');
		redirect ('admin/index');
	}


	public function print()
	{
		$data['barang']=$this->M_toko->tampil_data()->result();
		$this->load->view('printbrg', $data);
	}
}

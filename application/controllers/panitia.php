<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Mahasiswas
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class panitia extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('panitia_model');
  }

  public function index()
  {
    $data['judul'] = "Halaman panitia";
    $data['panitia'] = $this->panitia_model->get();
    $this->load->view('layout/header');
    $this->load->view('panitia/vw_panitia', $data);
    $this->load->view('layout/footer');
  }

  function tambah()
  {
    $data['judul'] = "Halaman Tambah Panitia";
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();
    $data['panitia'] = $this->panitia_model->get();

    $this->form_validation->set_rules('nama', 'Nama', 'required', [
      'required' => 'Nama Wajib di isi'
    ]);
    $this->form_validation->set_rules('nim', 'NIM', 'required', [
      'required' => 'NIM Wajib di isi'
    ]);
    $this->form_validation->set_rules('devisi', 'Devisi', 'required', [
      'required' => 'Devisi utama Wajib di isi'
    ]);
    $this->form_validation->set_rules('cadangan', 'Devisi Cadangan', 'required', [
      'required' => 'Devisi Cadangan Wajib di isi'
    ]);
    $this->form_validation->set_rules('prodi', 'Prodi', 'required', [
      'required' => 'Prodi Wajib di isi'
    ]);
    $this->form_validation->set_rules('generasi', 'Generasi', 'required', [
      'required' => 'Generasi Wajib di isi'
    ]);

    if ($this->form_validation->run() == false) {
        $this->load->view("layout/header");
        $this->load->view("panitia/vw_tambah_panitia", $data);
        $this->load->view("layout/footer");
    } else {
      $data = [
        'nama' => $this->input->post('nama'),
        'nim' => $this->input->post('nim'),
        'devisi' => $this->input->post('devisi'),
        'cadangan' => $this->input->post('cadangan'),
        'prodi' => $this->input->post('prodi'),
        'generasi' => $this->input->post('generasi'),
      ];
      $this->panitia_model->insert($data);
      $this->session->set_flashdata('message', '<div class="alert alert-success"
  role="alert">Data Calon Panitia Berhasil Ditambah!</div>');
      redirect('panitia'); 
    }
  }

  public function detail($id)
  {
    $data['judul'] = "Halaman panitia";
    $data['panitia'] = $this->panitia_model->getById($id);
    $this->load->view('layout/header');
    $this->load->view('panitia/vw_detail_panitia', $data);
    $this->load->view('layout/footer');
  }

  public function hapus($id)
  {
    $this->panitia_model->delete($id);
    redirect('panitia');
  }

  public function edit($id)
  {
    $data['judul'] = "";
    $data['panitia'] = $this->panitia_model->get();
    $data['user'] = $this->db->get_where ('user',['email' => 
    $this->session->userdata('email')])->row_array();
    $data['panitia'] = $this->panitia_model->getById($id);

    $this->form_validation->set_rules('nama','Nama','required',[
      'required' => 'Nama Wajib di isi'
    ]);
    $this->form_validation->set_rules('nim','NIM','required',[
      'required' => 'NIM Wajib di isi'
    ]);
    $this->form_validation->set_rules('devisi','Devisi','required',[
      'required' => 'Devisi Wajib di isi'
    ]);
    $this->form_validation->set_rules('cadangan','Devisi Cadangan','required',[
      'required' => 'Devisi Cadangan Wajib di isi'
    ]);
    $this->form_validation->set_rules('prodi','Prodi','required',[
      'required' => 'Prodi Wajib di isi'
    ]);
    $this->form_validation->set_rules('generasi','Generasi','required',[
      'required' => 'Generasi Wajib di isi'
    ]);

    if ($this->form_validation->run() == false){
      $this->load->view("layout/header");
      $this->load->view("panitia/vw_ubah_panitia",$data);
      $this->load->view("layout/footer");
    }else {
      $data = [
        'nama' => $this->input->post('nama'),
        'nim' => $this->input->post('nim'),
        'devisi' => $this->input->post('devisi'),
        'cadangan' => $this->input->post('cadangan'),
        'prodi' => $this->input->post('prodi'),
        'generasi' => $this->input->post('generasi'),
      ];
      $id = $this -> input -> post ('id');
      $this->panitia_model->update(['id' => $id], $data);
      $this -> session -> set_flashdata('message','<div class="alert alert-success" role="alert">Data Calon Panitia Berhasil Diubah!</div>');
      redirect('panitia');
    }
  }
}


/* End of file Mahasiswas.php */
/* Location: ./application/controllers/Mahasiswas.php */
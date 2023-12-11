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

class Prodi extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Prodi_model');
    $this->load->model('Mahasiswa_model');
  }

  public function index()
  {
    $data['judul'] = "Halaman prodi";
    $data['prodi'] = $this->Prodi_model->get();
    $this->load->view('layout/header');
    $this->load->view('prodi/vw_prodi', $data);
    $this->load->view('layout/footer');
  }

  function tambah()
  {
    $data['judul'] = "Halaman Tambah Prodi";
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();
    $data['prodi'] = $this->Prodi_model->get();

    $this->form_validation->set_rules('nama', 'Nama Kaprodi', 'required', [
      'required' => 'Nama prodi Wajib di isi'
    ]);
    $this->form_validation->set_rules('ruangan', 'Ruangan', 'required', [
      'required' => 'Ruangan prodi Wajib di isi'
    ]);
    $this->form_validation->set_rules('jurusan', 'Jurusan', 'required', [
      'required' => 'Jurusan prodi Wajib di isi'
    ]);
    $this->form_validation->set_rules('akreditasi', 'Akreditasi', 'required', [
      'required' => 'Akreditasi prodi Wajib di isi'
    ]);
    $this->form_validation->set_rules('nama_kaprodi', 'Nama Kaprodi', 'required', [
      'required' => 'Alamat  prodi Wajib di isi'
    ]);
    $this->form_validation->set_rules('tahun_berdiri', 'tahun berdiri', 'required', [
      'required' => 'Tahun Berdiri prodi Wajib di isi'
    ]);
    $this->form_validation->set_rules('output_lulusan', 'Output Lulusan', 'required', [
      'required' => 'Output Lulusan prodi Wajib di isi'
    ]);

    if ($this->form_validation->run() == false) {
        $this->load->view("layout/header");
        $this->load->view("prodi/vw_tambah_prodi", $data);
        $this->load->view("layout/footer");
    } else {
      $data = [
        'nama' => $this->input->post('nama'),
        'ruangan' => $this->input->post('ruangan'),
        'jurusan' => $this->input->post('jurusan'),
        'akreditasi' => $this->input->post('akreditasi'),
        'nama_kaprodi' => $this->input->post('nama_kaprodi'),
        'tahun_berdiri' => $this->input->post('tahun_berdiri'),
        'output_lulusan' => $this->input->post('output_lulusan'),
      ];
      $this->Prodi_model->insert($data);
      $this->session->set_flashdata('message', '<div class="alert alert-success"
  role="alert">Data Prodi Berhasil Ditambah!</div>');
      redirect('Prodi'); 
    }
  }

  public function detail($id)
  {
    $data['judul'] = "Halaman prodi";
    $data['prodi'] = $this->Prodi_model->getById($id);
    $this->load->view('layout/header');
    $this->load->view('prodi/vw_detail_prodi', $data);
    $this->load->view('layout/footer');
  }

  public function hapus($id)
  {
    $this->Prodi_model->delete($id);
    redirect('Prodi');
  }

  public function edit($id)
  {
    $data['judul'] = "";
    $data['prodi'] = $this->Prodi_model->get();
    $data['user'] = $this->db->get_where ('user',['email' => 
    $this->session->userdata('email')])->row_array();
    $data['prodi'] = $this->Prodi_model->getById($id);

    $this->form_validation->set_rules('nama','Nama Kaprodi','required',[
      'required' => 'Nama Kaprodi Wajib di isi'
    ]);
    $this->form_validation->set_rules('ruangan','Ruangan','required',[
      'required' => 'Ruangan Wajib di isi'
    ]);
    $this->form_validation->set_rules('jurusan','Jurusan','required',[
      'required' => 'Jurusan Wajib di isi'
    ]);
    $this->form_validation->set_rules('akreditasi','Akreditasi','required',[
      'required' => 'Akreditasi Wajib di isi'
    ]);
    $this->form_validation->set_rules('nama_kaprodi','Nama Kaprodi','required',[
      'required' => 'Nama Kaprodi Wajib di isi'
    ]);
    $this->form_validation->set_rules('tahun_berdiri','Tahun Berdiri','required',[
      'required' => 'Tahun berdiri Wajib di isi'
    ]);
    $this->form_validation->set_rules('output_lulusan','Output lulusan','required',[
      'required' => 'Output Lulusan Mahasiswa Wajib di isi',
    ]);

    if ($this->form_validation->run() == false){
      $this->load->view("layout/header");
      $this->load->view("prodi/vw_ubah_prodi",$data);
      $this->load->view("layout/footer");
    }else {
      $data = [
        'nama' => $this->input->post('nama'),
        'nim' => $this->input->post('ruangan'),
        'email' => $this->input->post('jurusan'),
        'prodi' => $this->input->post('akreditasi'),
        'alamat' => $this->input->post('nama_kaprodi'),
        'jenis_kelamin' => $this->input->post('tahun_berdiri'),
        'no_hp' => $this->input->post('output_lulusan'),
      ];
      $id = $this -> input -> post ('id');
      $this->Mahasiswa_model->update(['id' => $id], $data);
      $this -> session -> set_flashdata('message','<div class="alert alert-success" role="alert">Data Kaprodi Berhasil Diubah!</div>');
      redirect('Prodi');
    }
  }
}


/* End of file Mahasiswas.php */
/* Location: ./application/controllers/Mahasiswas.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('ComplaintModel');
        $this->load->model('AuthModel');
        $this->load->model('CategoryModel');

        if (!$this->AuthModel->current_user()) {
            redirect('auth/login');
        }
    }


    public function index()
    {
        $data['hasil'] = $this->CategoryModel->getAll();
        $this->load->view('kategori', $data);
    }

    public function tambahData()
{
  $this->load->model('CategoryModel');
  $data['category'] = $this->CategoryModel->getAll();
  $this->load->view('tambahkategori', $data);
}
public function simpanData()
{
    $this->load->model('CategoryModel');

            $category = $this->input->post('category');

            $data = [
                'category' => $category,
            ];

$simpan = $this->CategoryModel->insert($data);

if ($simpan) {
   $this->session->set_flashdata('msg_success', 'Data sudah tersimpan'); 
}else {
   $this->session->set_flashdata('msg_error', 'Data gagal disimpan');
}
   redirect('category');
}

public function edit($id)
{
    $this->load->model('CategoryModel');
    $data['category'] = $this->CategoryModel->get($id);
    $this->load->view('updatekategori', $data);
}
public function update(){
    {
        $this->load->model('CategoryModel');

                $id = $this->input->post('category_id');
                $category = $this->input->post('category');

    
                $data = [
                    'category_id' => $id,
                    'category' => $category,
                ];


 $save = $this->CategoryModel->update($data, $id);
 if($save) {
      $this->session->set_flashdata('msg_success', 'Data telah diubah!');
  } else {
      $this->session->set_flashdata('msg_error', 'Data gagal disimpan, silakan isi ulang!');
  }
   redirect('category');
}
}
public function delete($id){
   $this->load->model('CategoryModel');
   $delete = $this->CategoryModel->delete($id);

if ($delete) {
   $this->session->set_flashdata('msg_success', 'Data yang anda pilih telah terhapus');
} else {
   $this->session->set_flashdata('msg_error', 'Tidak bisa hapus pesan');
}
   redirect('category');
}

}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Complaint extends CI_Controller {
    
    function __construct(){
        parent::__construct();
        $this->load->model('ComplaintModel');

    }

	public function index()
	{
	    $data['hasil']=$this->ComplaintModel->TabelTiket();
		$this->load->view('tiket',$data);
	}
	
	public function tambahData()
{
  $this->load->model('CategoryModel');
  $data['category'] = $this->CategoryModel->getAll();
  $this->load->view('tambah', $data);
}
public function simpanData()
{
  $this->load->model('ComplaintModel');
  $name = $this->input->post('name');
  $description = $this->input->post('description');
  $category = $this->input->post('category');
  $image = $_FILES["image"]["tmp_name"];
  
  $path = "upload/";
  $imagePath = $path . $name . "_complaint.png";
  move_uploaded_file($image, $imagePath);

$data = [
 'name' => $name,
 'description' => $description,
 'category_id' => $category,
 'image' => base_url() . $imagePath,
];

$simpan = $this->ComplaintModel->insert($data);

if ($simpan) {
   $this->session->set_flashdata('msg_success', 'Data sudah tersimpan'); 
}else {
   $this->session->set_flashdata('msg_error', 'Data gagal disimpan');
}
   redirect('Complaint');
}

public function edit($id)
{
    $this->load->model('CategoryModel');
    $this->load->model('ComplaintModel');
    $data['category'] = $this->CategoryModel->getAll();
    $data['complaint'] = $this->ComplaintModel->get($id);
    $this->load->view('update', $data);
}
public function update(){
    $this->load->model('ComplaintModel');
    $id = $this->input->post('ticket_id');
    $name = $this->input->post('name');
    $description = $this->input->post('description');
    $category = $this->input->post('category');
$data = [
    'name' => $name,
    'description' => $description,
    'category_id' => $category
];

 $save = $this->ComplaintModel->update($data, $id);
 if($save) {
      $this->session->set_flashdata('msg_success', 'Data telah diubah!');
  } else {
      $this->session->set_flashdata('msg_error', 'Data gagal disimpan, silakan isi ulang!');
  }
   redirect('Complaint');
}
public function delete($id){
   $this->load->model('ComplaintModel');
   $delete = $this->ComplaintModel->delete($id);

if ($delete) {
   $this->session->set_flashdata('msg_success', 'Data yang anda pilih telah terhapus');
} else {
   $this->session->set_flashdata('msg_error', 'Tidak bisa hapus pesan');
}
   redirect('Complaint');
}
}

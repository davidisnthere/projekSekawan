<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Complaint extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('ComplaintModel');
        $this->load->model('AuthModel');

        if (!$this->AuthModel-> current_user()) {
            redirect('auth/login');
        }
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
            $imagePath =  $path . $name . time() . "_complaint.png";
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
    {
        $this->load->model('ComplaintModel');
        $config_logo_image = array(
            'allowed_types' => 'jpg|jpeg|gif|png',
            'upload_path' => 'upload/',//root path for image
            'max_size' => 2000,
            );
    
        $this->load->library('upload', $config_logo_image );
            if ($this->upload->do_upload('image')) {
                $id = $this->input->post('ticket_id');
                $name = $this->input->post('name');
                $description = $this->input->post('description');
                $category = $this->input->post('category');
                $image = $_FILES["image"]["tmp_name"];
    
                $path = "upload/";
                $imagePath =  $path . $name . time() . "_complaint.png";
                move_uploaded_file($image, $imagePath);
    
                $data = [
                    'name' => $name,
                    'description' => $description,
                    'category_id' => $category,
                    'image' => base_url() . $imagePath,
                ];
            } else {
                $id = $this->input->post('ticket_id');
                $name = $this->input->post('name');
                $description = $this->input->post('description');
                $category = $this->input->post('category');
    
                $data = [
                    'name' => $name,
                    'description' => $description,
                    'category_id' => $category
                ];
            }

 $save = $this->ComplaintModel->update($data, $id);
 if($save) {
      $this->session->set_flashdata('msg_success', 'Data telah diubah!');
  } else {
      $this->session->set_flashdata('msg_error', 'Data gagal disimpan, silakan isi ulang!');
  }
   redirect('complaint');
}
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


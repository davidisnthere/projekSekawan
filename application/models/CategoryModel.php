<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CategoryModel extends CI_Model {
  public function getAll() 
  {
   return $this->db->get('category')->result();
   }

   public function insert($data) 
{
      return $this->db->insert('category', $data);
}

public function get($id) {
      return $this->db->where('category_id', $id)->get('category')->row();
}
    

public function Update($data, $id)
{
    return $this->db->where('category_id', $id)->update('category', $data);
}
public function delete($id) {
    return $this->db->where('category_id', $id)->delete('category');
    
}
}
?>

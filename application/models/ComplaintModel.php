<?php defined('BASEPATH') OR exit('No direct script access allowed');

class ComplaintModel extends CI_Model
{
    function TabelTiket() 
    {
        $this->db->select('complaint.*, category.category');
        return $this->db->from('complaint')
          ->join('category', 'category.category_id=complaint.category_id')
          ->get()
          ->result();
    }  
    
    public function insert($data) 
{
      return $this->db->insert('complaint', $data);
}

public function get($id) {
      return $this->db->where('ticket_id', $id)->get('complaint')->row();
}

public function Update($data, $id)
{
    return $this->db->where('ticket_id', $id)->update('complaint', $data);
}
public function delete($id) {
    return $this->db->where('ticket_id', $id)->delete('complaint');
    
}
}


<?php
class Lfaskes_model extends CI_Model
{
    private $table = "faskes";

    public function getAll()
    {
        //SELECT * FROM faskes
        $query = $this->db->get($this->table);
        return $query->result();
    }
    public function findById($id)
    {
        //SELECT * FROM faskes WHERE id=$ID
        $this->db->where('id', $id);
        $query = $this->db->get($this->table);
        return $query->row();
    }
}

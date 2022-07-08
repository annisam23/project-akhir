<?php
class Setting_model extends CI_Model
{
    private $table = "users";

    public function getAll()
    {
        //SELECT * FROM users
        $query = $this->db->get($this->table);
        return $query->result();
    }
    public function findById($id)
    {
        //SELECT * FROM users WHERE id=$ID
        $this->db->where('id', $id);
        $query = $this->db->get($this->table);
        return $query->row();
    }
    public function update($data)
    {
        //UPDATE users
        $sql = "UPDATE users SET username=?,password=?,email=?,
        status=? WHERE id=?";
        $this->db->query($sql, $data);
    }
}

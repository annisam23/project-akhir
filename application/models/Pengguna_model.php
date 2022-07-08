<?php
class Pengguna_model extends CI_Model
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

    public function delete($id)
    {
        //DELETE FROM users WHERE ID
        $sql = "DELETE FROM users WHERE id=?";
        $this->db->query($sql, array($id));
    }
    public function update($data)
    {
        //UPDATE users
        $sql = "UPDATE users SET id=?,username=?,password=?,email=?,created_at=?,
        last_login=?,status=?,role=? WHERE id=?";
        $this->db->query($sql, $data);
    }
    public function save($data)
    {
        //insert into komentar
        $sql = "INSERT INTO users (id,username,password,email,created_at,last_login,status,role)
        VALUES (?,?,?,?,?,?,?,?)";
        $this->db->query($sql, $data);
    }
}

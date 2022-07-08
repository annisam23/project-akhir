<?php
class Jfaskes_model extends CI_Model
{
    private $table = "jenis_faskes";

    public function getAll()
    {
        //SELECT * FROM jenis_faskes
        $query = $this->db->get($this->table);
        return $query->result();
    }
    public function findById($id)
    {
        //SELECT * FROM jenis_faskes WHERE id=$ID
        $this->db->where('id', $id);
        $query = $this->db->get($this->table);
        return $query->row();
    }
    public function delete($id)
    {
        //DELETE FROM jenis_faskes WHERE ID
        $sql = "DELETE FROM jenis_faskes WHERE id=?";
        $this->db->query($sql, array($id));
    }
    public function update($data)
    {
        //UPDATE jenis_faskes
        $sql = "UPDATE jenis_faskes SET id=?,nama=? WHERE id=?";
        $this->db->query($sql, $data);
    }
    public function save($data)
    {
        //insert into jenis_faskes
        $sql = "INSERT INTO jenis_faskes (id,nama)
        VALUES (?,?)";
        $this->db->query($sql, $data);
    }
}

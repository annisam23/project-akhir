<?php
class Kecamatan_model extends CI_Model
{
    private $table = "kecamatan";

    public function getAll()
    {
        //SELECT * FROM kecamatan
        $query = $this->db->get($this->table);
        return $query->result();
    }
    public function findById($id)
    {
        //SELECT * FROM Kecamatan WHERE id=$ID
        $this->db->where('id', $id);
        $query = $this->db->get($this->table);
        return $query->row();
    }
    public function delete($id)
    {
        //DELETE FROM Kecamatan WHERE ID
        $sql = "DELETE FROM kecamatan WHERE id=?";
        $this->db->query($sql, array($id));
    }
    public function update($data)
    {
        //UPDATE kecamatan
        $sql = "UPDATE kecamatan SET id=?,nama=? WHERE id=?";
        $this->db->query($sql, $data);
    }
    public function save($data)
    {
        //insert into kecamatan
        $sql = "INSERT INTO kecamatan (id,nama)
        VALUES (?,?)";
        $this->db->query($sql, $data);
    }
}

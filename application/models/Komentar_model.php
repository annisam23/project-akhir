<?php
class Komentar_model extends CI_Model
{
    private $table = "komentar";

    public function getAll()
    {
        //SELECT * FROM komentar
        $query = $this->db->get($this->table);
        return $query->result();
    }
    public function findById($id)
    {
        //SELECT * FROM KOMENTAR WHERE id=$ID
        $this->db->where('id', $id);
        $query = $this->db->get($this->table);
        return $query->row();
    }
    public function delete($id)
    {
        //DELETE FROM Komentar WHERE ID
        $sql = "DELETE FROM komentar WHERE id=?";
        $this->db->query($sql, array($id));
    }
    public function update($data)
    {
        //UPDATE komentar
        $sql = "UPDATE komentar SET id=?,tanggal=?,isi=?,users_id=?,faskes_id=?,
        nilai_rating_id=? WHERE id=?";
        $this->db->query($sql, $data);
    }
    public function save($data)
    {
        //insert into komentar
        $sql = "INSERT INTO komentar (id,tanggal,isi,users_id,faskes_id,nilai_rating_id)
        VALUES (?,?,?,?,?,?)";
        $this->db->query($sql, $data);
    }
}

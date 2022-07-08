<?php
class Rating_model extends CI_Model
{
    private $table = "nilai_rating";

    public function getAll()
    {
        //SELECT * FROM nilai_rating
        $query = $this->db->get($this->table);
        return $query->result();
    }
    public function findById($id)
    {
        //SELECT * FROM nilai_rating WHERE id=$ID
        $this->db->where('id', $id);
        $query = $this->db->get($this->table);
        return $query->row();
    }
    public function delete($id)
    {
        //DELETE FROM nilai_rating WHERE ID
        $sql = "DELETE FROM nilai_rating WHERE id=?";
        $this->db->query($sql, array($id));
    }
    public function update($data)
    {
        //UPDATE nilai_rating
        $sql = "UPDATE nilai_rating SET id=?,nama=? WHERE id=?";
        $this->db->query($sql, $data);
    }
    public function save($data)
    {
        //insert into kecamatan
        $sql = "INSERT INTO nilai_rating (id,nama)
        VALUES (?,?)";
        $this->db->query($sql, $data);
    }
}

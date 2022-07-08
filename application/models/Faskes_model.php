<?php
class Faskes_model extends CI_Model
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
    public function delete($id)
    {
        //DELETE FROM faskes WHERE ID
        $sql = "DELETE FROM faskes WHERE id=?";
        $this->db->query($sql, array($id));
    }
    public function update($data)
    {
        //UPDATE faskes
        $sql = "UPDATE faskes SET id=?,nama=?, alamat=?,latlong=?,jenis_id=?,
        deskripsi=?,skor_rating=?,foto1=?,foto2=?,foto3=?,kecamatan_id=?,website=?,jumlah_dokter=?,jumlah_pegawai=? WHERE id=?";
        $this->db->query($sql, $data);
    }
    public function save($data)
    {
        //insert into faskes
        $sql = "INSERT INTO faskes (id,nama,alamat,latlong,jenis_id,deskripsi,skor_rating,foto1,foto2,foto3,kecamatan_id,website,jumlah_dokter,jumlah_pegawai)
        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $this->db->query($sql, $data);
    }
}

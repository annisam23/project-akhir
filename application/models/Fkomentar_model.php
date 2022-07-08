<?php
class Fkomentar_model extends CI_Model
{
    private $table = "komentar";

    public function getJoin()
    {
        //SELECT * FROM faskes
        $this->db->select('*');
        $this->db->from('komentar');
        $this->db->join('users', 'komentar.users_id=users.id', 'inner');
        $query = $this->db->get();
        return $query->result();
    }
    public function save($data)
    {
        //insert into komentar
        $id = $this->session->userdata('id');
        $sql = "INSERT INTO komentar (id,tanggal,isi,users_id,faskes_id,nilai_rating_id)
        VALUES (default,NOW(),?,$id,4,3)";
        $this->db->query($sql, $data);
    }
};
